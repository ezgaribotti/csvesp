<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Fluent;

abstract class Request extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function transform(): object
    {
        return new Fluent($this->validated());
    }
}
