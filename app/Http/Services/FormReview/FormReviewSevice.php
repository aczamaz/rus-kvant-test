<?php

namespace App\Http\Services\FormReview;

use App\Http\Services\FormReview\Handlers\FormReviewsHandlerPg;

class FormReviewSevice
{
    public function __construct(FormReviewsHandlerPg $formReviewsHandlerPg)
    {
        $this->formReviewsHandlerPg = $formReviewsHandlerPg;
    }
    public function saveResult(array $fields)
    {
        return $this->formReviewsHandlerPg->saveResult($fields);
    }
}
