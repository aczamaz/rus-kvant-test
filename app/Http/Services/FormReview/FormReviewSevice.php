<?php

namespace App\Http\Services\FormReview;

use App\Http\Services\FormReview\Handlers\FormReviewsHandlerFile;
use App\Http\Services\FormReview\Handlers\FormReviewsHandlerPg;

class FormReviewSevice
{
    public function __construct(
        FormReviewsHandlerPg $formReviewsHandlerPg,
        FormReviewsHandlerFile $formReviewsHandlerFile
    )
    {
        $this->formReviewsHandlerPg = $formReviewsHandlerPg;
        $this->formReviewsHandlerFile = $formReviewsHandlerFile;
    }
    public function saveResult(array $fields)
    {
        $this->formReviewsHandlerFile->saveResult($fields);
        return $this->formReviewsHandlerPg->saveResult($fields);
    }
}
