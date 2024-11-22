<?php

namespace Modules\Blog\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
{
    public function rules()
    {
        if ($this->isMethod('post')) {
            $rules = [
                'title'=>'required|unique:team_translations',
                'description'=>'required',                
            ];
        }

        if ($this->isMethod('post')) {
            if($this->request->get('lang_code') == admin_lang()){
                $rules = [
                    'title'=>'required',
                    'description'=>'required',                    
                ];
            }else{
                $rules = [
                    'title'=>'required',
                    'description'=>'required',
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
          
            'description.required' => trans('translate.Description is required'),
            
        ];
    }
}
