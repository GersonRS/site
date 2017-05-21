<?php

namespace Site\Transformers;

use League\Fractal\TransformerAbstract;
use Site\Models\Company;

/**
 * Class CompanyTransformer
 * @package namespace Site\Transformers;
 */
class CompanyTransformer extends TransformerAbstract
{
    protected $availableIncludes = [ 'category', 'order', 'users'];

    /**
     * Transform the \Company entity
     * @param \Company $model
     *
     * @return array
     */
    public function transform(Company $model)
    {
        return [
            'id'         => (int) $model->id,
            'name' => $model->name,
            'lat' => $model->lat,
            'lng' => $model->lng,
            'website' => $model->website,
            'mail' => $model->mail,
            'address' => $model->address,
            'active' => $model->active,
            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }

    public function includeCategory(Company $model)
    {
        return $this->collection($model->category, new CategoryTransformer());
    }

    public function includeOrder(Company $model)
    {
        return $this->collection($model->order, new OrderTransformer());
    }

    public function includeUsers(Company $model)
    {
        return $this->collection($model->users, new CompanyUserTransformer());
    }
}
