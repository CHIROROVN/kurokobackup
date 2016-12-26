<?php namespace App\Http\Models;

class ApplicationModel
{

    protected $table = false;

    //Application rules
    public function Rules(){
        return array(
            'contract_capacity'                           => 'required',
            'start_year'                                  => 'required',
            'start_month'                                 => 'required',
            'start_day'                                   => 'required',
            'payment_method'                              => 'required',
            'payment_credit'                              => 'required',
            'contract_furigana'                           => 'required||regex:/^[\x{3041}-\x{3096}]+$/u',
            'contract_name'                               => 'required',
            'organization_name'                           => 'required',
            'dept_name'                                   => 'required',
            'title'                                       => 'required',
            'zipcode'                                     => 'required|regex:/^\+?[^a-zA-Z]{5,}$/',
            'address'                                     => 'required',
            'tel'                                         => 'required|regex:/^\+?[^a-zA-Z]{5,}$/',
            'fax'                                         => 'regex:/^\+?[^a-zA-Z]{5,}$/',
            'email'                                       => 'required|email',
            'policy_check'                                => 'required'
            );
    }

    //Application messages
    public function Messages(){
        return array(
            'contract_capacity.required'                  => trans('validation.error_contract_capacity_required'),
            'start_year.required'                         => trans('validation.error_start_year_required'),
            'start_month.required'                        => trans('validation.error_start_month_required'),
            'start_day.required'                          => trans('validation.error_start_day_required'),
            'payment_method.required'                     => trans('validation.error_payment_method_required'),
            'payment_credit.required'                     => trans('validation.error_payment_credit_required'),
            'contract_furigana.required'                  => trans('validation.error_contract_furigana_required'),
            'contract_furigana.regex'                     => trans('validation.error_contract_furigana_regex'),
            'contract_name.required'                      => trans('validation.error_contract_name_required'),
            'organization_name.required'                  => trans('validation.error_organization_name_required'),
            'dept_name.required'                          => trans('validation.error_dept_name_required'),
            'title.required'                              => trans('validation.error_title_required'),
            'zipcode.required'                            => trans('validation.error_zipcode_required'),
            'zipcode.regex'                               => trans('validation.error_zipcode_regex'),
            'address.required'                            => trans('validation.error_address_required'),
            'tel.required'                                => trans('validation.error_tel_required'),
            'tel.regex'                                   => trans('validation.error_tel_numeric'),
            'fax.regex'                                   => trans('validation.error_fax_numeric'),
            'email.required'                              => trans('validation.error_email_required'),
            'email.email'                                 => trans('validation.error_email_email'),
            'policy_check.required'                       => trans('validation.error_policy_check_required'),
            );
    }

}