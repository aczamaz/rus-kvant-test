<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\FormReview;
use App\Http\Services\FormReview\FormReviewSevice;

class FormReviewController extends Controller
{
    public function __construct(FormReviewSevice $formReviewSevice)
    {
        $this->formReviewSevice = $formReviewSevice;
    }
    public function save(FormReview $formReview)
    {
        $result = $this->formReviewSevice->saveResult($formReview->all());
        return response()->json($result);
    }
}
