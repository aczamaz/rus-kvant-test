<?php

namespace App\Http\Services\FormReview\Handlers;

use Illuminate\Support\Facades\Storage;

class FormReviewsHandlerFile implements IFormReviewsHandler
{
    public function saveResult(array $fields):array
    {
        $path = Storage::disk('local')->append('example.txt', json_encode($fields));

        return array_merge($fields,['path' => $path]);
    }
}
