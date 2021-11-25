<?php
namespace App\Http\Services\FormReview\Handlers;

interface IFormReviewsHandler
{
    public function saveResult(array $fields):array;
}
