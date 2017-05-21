<?php

namespace Site\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Site\Presenters\CompanyPresenter;
use Site\Repositories\CompanyRepository;
use Site\Models\Company;
use Site\Validators\CompanyValidator;

/**
 * Class CompanyRepositoryEloquent
 * @package namespace Site\Repositories;
 */
class CompanyRepositoryEloquent extends BaseRepository implements CompanyRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Company::class;
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
        return CompanyPresenter::class;
    }
}
