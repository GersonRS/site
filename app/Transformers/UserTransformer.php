<?php

namespace Site\Transformers;

use League\Fractal\TransformerAbstract;
use Site\Models\User;

/**
 * Class UserTransformer
 * @package namespace Site\Transformers;
 */
class UserTransformer extends TransformerAbstract
{
    protected $availableIncludes = ['client'];
    /**
     * Transform the \User entity
     * @param \User $model
     *
     * @return array
     */
    public function transform(User $model)
    {
        return [
            'id'         => (int) $model->id,
            'name'       => $model->name,
            'email'      => $model->email,
            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }

    public function includeClient(User $model)
    {
        return $this->item($model->client, new ClientTransformer());
    }
}
