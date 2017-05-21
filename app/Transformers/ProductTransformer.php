<?php

namespace Site\Transformers;

use League\Fractal\TransformerAbstract;
use Site\Models\Product;

/**
 * Class ProductTransformer
 * @package namespace Site\Transformers;
 */
class ProductTransformer extends TransformerAbstract
{

    /**
     * Transform the \Product entity
     * @param \Product $model
     *
     * @return array
     */
    public function transform(Product $model)
    {
        return [
            'id'         => (int) $model->id,
            'name'       => $model->name,
            'description'=> $model->description,
            'price'      => (float) $model->price,
            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
