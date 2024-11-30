<?php

namespace Modules\Blog\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
{
    public function rules()
    {
        if ($this->isMethod('post')) {
            $rules = [
                'title'=>'required|unique:blog_translations',
                'slug'=>'required|unique:blogs',
                'image'=>'required',
                'description'=>'required',                
                'author'=>'required',                
                'short_description'=>'required',                
            ];
        }

        if ($this->isMethod('put')) {
            if($this->request->get('lang_code') == admin_lang()){
                $rules = [
                    'title'=>'required',
                    'slug'=>'required|unique:blogs,slug,'.$this->blog.',id',
                    'description'=>'required',      
                    'author'=>'required',                
                'short_description'=>'required',                   
                ];
            }else{
                $rules = [
                    'title'=>'required',
                    'description'=>'required',
                    'author'=>'required',                
                'short_description'=>'required',
                ];
            }
        }

        return $rules;
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function messages(): array
    {
        return [
            'title.required' => trans('translate.Title is required'),
            'title.unique' => trans('translate.Title already exist'),
            'slug.required' => trans('translate.Slug is required'),
            'slug.unique' => trans('translate.Slug already exist'),
            'image.required' => trans('translate.Image is required'),
            'description.required' => trans('translate.Description is required'),
            
        ];
    }
}
