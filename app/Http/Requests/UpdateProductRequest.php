<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'model' => 'required',
            'price' => 'required',
            'discount_type' => 'required',
            'discount_price' => 'required',
            'description' => 'required',
            'variants'  => 'required',
            'price_add'  => 'required',
        ];
    }

    public function sanitized()
    {
        return [
            'name' => $this->name,
            'model' => $this->model,
            'price' => $this->price,
            'discount_type' => $this->discount_type,
            'discount_price' => $this->discount_price,
            'description' => $this->description,
            'variants'  => $this->variants,
            'price_add'  => $this->price_add,
        ];
    }
}
