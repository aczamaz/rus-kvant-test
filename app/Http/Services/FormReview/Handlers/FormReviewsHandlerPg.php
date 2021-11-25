<?php

namespace App\Http\Services\FormReview\Handlers;

use App\Models\FormReview;

class FormReviewsHandlerPg implements IFormReviewsHandler
{
    private $formReview;
    public function __construct(FormReview $formReview)
    {
        $this->formReview = $formReview;
    }
    public function saveResult(array $fields):array
    {
        return $this->formReview->create(
            $fields
        )->getOriginal();
    }
}
