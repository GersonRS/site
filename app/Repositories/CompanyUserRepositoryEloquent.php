<?php

namespace Site\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Site\Presenters\CompanyUserPresenter;
use Site\Repositories\CompanyUserRepository;
use Site\Models\CompanyUser;
use Site\Validators\CompanyUserValidator;

/**
 * Class CompanyUserRepositoryEloquent
 * @package namespace Site\Repositories;
 */
class CompanyUserRepositoryEloquent extends BaseRepository implements CompanyUserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return CompanyUser::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function presenter()
    {
        return CompanyUserPresenter::class;
    }
}
