<?php

namespace Site\Transformers;

use League\Fractal\TransformerAbstract;
use Site\Models\User;

/**
 * Class DeliverymanTransformer
 * @package namespace Site\Transformers;
 */
class DeliverymanTransformer extends TransformerAbstract
{

    /**
     * Transform the \Deliveryman entity
     * @param \Deliveryman $model
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
}
