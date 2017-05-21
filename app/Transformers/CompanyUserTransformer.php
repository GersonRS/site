<?php

namespace Site\Transformers;

use League\Fractal\TransformerAbstract;
use Site\Models\CompanyUser;

/**
 * Class CompanyUserTransformer
 * @package namespace Site\Transformers;
 */
class CompanyUserTransformer extends TransformerAbstract
{
    protected $defaultIncludes = ["user"];

    /**
     * Transform the \CompanyUser entity
     * @param \CompanyUser $model
     *
     * @return array
     */
    public function transform(CompanyUser $model)
    {
        return [
            'id'         => (int) $model->id,
            'admin' => (boolean) $model->admin
        ];
    }

    public function includeUser(CompanyUser $model)
    {
        return $this->item($model->user, new UserTransformer());
    }
}
