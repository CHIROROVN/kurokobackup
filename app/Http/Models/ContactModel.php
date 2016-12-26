<?php namespace App\Http\Models;

class ContactModel
{

    protected $table = false;

    //Contact rules
    public function rules(){
        return array(
            'name_kana'                       => 'required|regex:/^[\x{3041}-\x{3096}]+$/u',
        	'name'                            => 'required',
            'company_name'                    => 'required',
            'department_name'                 => 'required',
            'zipcode'                         => 'required|regex:/^\+?[^a-zA-Z]{5,}$/',
            'address'                         => 'required',
            'tel'                             => 'required|regex:/^\+?[^a-zA-Z]{5,}$/',
            'fax'                             => 'regex:/^\+?[^a-zA-Z]{5,}$/',
            'email'                           => 'required|email',
            'content'                         => 'required',
    	);
    }

    //Contact messages
    public function messages(){
        return array(
        	'name_kana.required'              => trans('validation.error_name_kana_required'),
        	'name_kana.regex'                 => trans('validation.error_name_kana_regex'),
            'name.required'                   => trans('validation.error_name_required'),
            'company_name.required'           => trans('validation.error_company_name_required'),
            'department_name.required'        => trans('validation.error_department_name_required'),
            'zipcode.required'                => trans('validation.error_zipcode_required'),
            'zipcode.regex'                   => trans('validation.error_zipcode_regex'),
            'address.required'                => trans('validation.error_address_required'),
            'tel.required'                    => trans('validation.error_tel_required'),
            'tel.regex'                       => trans('validation.error_tel_regex'),
            'fax.regex'                       => trans('validation.error_fax_regex'),
            'email.required'                  => trans('validation.error_email_required'),
            'email.email'                  	  => trans('validation.error_email_email'),
            'content.required'                => trans('validation.error_content_required'),
    	);
    }

}