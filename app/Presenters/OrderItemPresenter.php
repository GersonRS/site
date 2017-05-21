<?php

namespace Site\Presenters;

use Site\Transformers\OrderItemTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class OrderItemPresenter
 *
 * @package namespace Site\Presenters;
 */
class OrderItemPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new OrderItemTransformer();
    }
}
