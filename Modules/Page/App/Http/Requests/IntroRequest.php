<?php

namespace Modules\Page\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IntroRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules()
    {
        return [
            'intro_title' => 'required',
        ];
    }


    public function messages(): array
    {
        return [
            'intro_banner_one.required' => 'Image is required',
            'intro_title.required' => trans('translate.Title is required'),
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
}
