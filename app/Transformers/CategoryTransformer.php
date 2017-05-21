<?php

namespace Site\Transformers;

use League\Fractal\TransformerAbstract;
use Site\Models\Category;

/**
 * Class CategoryTransformer
 * @package namespace Site\Transformers;
 */
class CategoryTransformer extends TransformerAbstract
{
    protected $defaultIncludes = ["product"];

    /**
     * Transform the \Category entity
     * @param \Category $model
     *
     * @return array
     */
    public function transform(Category $model)
    {
        return [
            'id'         => (int) $model->id,
            'name'       => $model->name,
            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }

    public function includeProduct(Category $model)
    {
        return $this->collection($model->products, new ProductTransformer());
    }
}
