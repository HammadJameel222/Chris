<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
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
            // 'size' => 'required',
            // 'color' => 'required',
            'price_add'  => 'required',
            // 'image' => 'required',
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
            // 'size' => $this->size,
            // 'color' => $this->color,
            'price_add'  => $this->price_add,

        ];
    }
}
