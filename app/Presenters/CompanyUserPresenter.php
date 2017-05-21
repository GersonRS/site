<?php

namespace Site\Presenters;

use Site\Transformers\CompanyUserTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class CompanyUserPresenter
 *
 * @package namespace Site\Presenters;
 */
class CompanyUserPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new CompanyUserTransformer();
    }
}
