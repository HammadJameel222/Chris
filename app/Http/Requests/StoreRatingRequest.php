<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRatingRequest extends FormRequest
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
            // 'review' => 'required',
            'rating' => 'required|min:1|max:5',
        ];
    }

    public function sanitized()
    {
        return  [
            'review' => $this->review,
            'rating' => $this->rating,
        ];
    }

}
