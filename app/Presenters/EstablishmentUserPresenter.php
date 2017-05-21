<?php

namespace Site\Presenters;

use Site\Transformers\EstablishmentUserTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class EstablishmentUserPresenter
 *
 * @package namespace Site\Presenters;
 */
class EstablishmentUserPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new EstablishmentUserTransformer();
    }
}
