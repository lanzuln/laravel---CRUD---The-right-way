<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rules\File;
use Illuminate\Foundation\Http\FormRequest;

class StoreOffer extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required|string|max:255',
            'price'=>'required|integer|min|0',
            'description'=>'required',
            'category_id'=>['required','min:1','array'],
            'location_id'=>['required','min:1','array'],
            'image'=>['nullable',File::image()->max('10mb')]
        ];
    }
}
