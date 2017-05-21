<?php

namespace Site\Transformers;

use League\Fractal\TransformerAbstract;
use Site\Models\Cupom;

/**
 * Class CupomTransformer
 * @package namespace Site\Transformers;
 */
class CupomTransformer extends TransformerAbstract
{

    /**
     * Transform the \Cupom entity
     * @param \Cupom $model
     *
     * @return array
     */
    public function transform(Cupom $model)
    {
        return [
            'id'         => (int) $model->id,
            'code'       => $model->code,
            'value'      => (float) $model->value,
            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
