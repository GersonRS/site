<?php

namespace Site\Http\Controllers\Api\Client;

use Illuminate\Support\Facades\Auth;
use Site\Http\Controllers\Controller;
use Site\Http\Requests\CheckoutRequest;
use Site\Repositories\OrderRepository;
use Site\Repositories\UserRepository;
use Site\Services\OrderService;

class ClientCheckoutController extends Controller
{
    private $orderRepository;
    private $userRepository;
    private $service;
    private $with = ['client','items','cupom'];

    public function __construct(
        OrderRepository $orderRepository,
        UserRepository $userRepository,
        OrderService $service
    )
    {
        $this->orderRepository = $orderRepository;
        $this->userRepository = $userRepository;
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientId = Auth::user()->client->id;

        $orders = $this->orderRepository
            ->skipPresenter(false)
            ->with($this->with)
            ->scopeQuery(function($query) use($clientId){
                return $query->where('client_id',$clientId);
            })->all();

        return $orders;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CheckoutRequest $request)
    {
        $data = $request->all();
        $data['client_id'] = Auth::user()->client->id;
        $o = $this->service->create($data);
        return $this->orderRepository
            ->skipPresenter(false)
            ->with($this->with)
            ->find($o->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $o = $this->orderRepository
            ->skipPresenter(false)
            ->with($this->with)
            ->find($id);
        return $o;
    }
}
