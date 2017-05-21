<?php

namespace Site\Presenters;

use Site\Transformers\EstablishmentsTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class EstablishmentsPresenter
 *
 * @package namespace Site\Presenters;
 */
class EstablishmentsPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new EstablishmentsTransformer();
    }
}
