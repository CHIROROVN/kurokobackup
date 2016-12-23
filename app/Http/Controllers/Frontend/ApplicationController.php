<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
use App\Http\Models\ApplicationModel;
use Input;
use Session;
use Validator;


class ApplicationController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }

    /*
    |-----------------------------------
    | get input application
    |-----------------------------------
    */
    public function getInput() {
        $data['yearCurr'] = date('Y');
        $data['yearNext'] = date('Y') + 1;
        $data['yearLast'] = date('Y') + 2;
        return view('frontend.application.input', $data);
    }

    /*
    |-----------------------------------
    | post input application
    |-----------------------------------
    */
    public function postInput() {
        $clsApplication         = new ApplicationModel();
        $RuleApplication        = $clsApplication->rules();

        if(Input::get('select_date') == 1){
            unset($RuleApplication['start_year']);
            unset($RuleApplication['start_month']);
            unset($RuleApplication['start_day']);
        }

        $validator              = Validator::make(Input::all(), $RuleApplication, $clsApplication->messages());
        if ($validator->fails()) {
            return redirect()->route('frontend.application.input')->withErrors($validator)->withInput();
        }

        $dataInput                                      = array();
        $dataInput['contract_capacity']                 = Input::get('contract_capacity');
        $dataInput['additional_capacity']               = Input::get('additional_capacity');
        $dataInput['select_date']                       = Input::get('select_date');
        $dataInput['start_year']                        = Input::get('start_year');
        $dataInput['start_month']                       = Input::get('start_month');
        $dataInput['start_day']                         = Input::get('start_day');
        $dataInput['payment_method']                    = Input::get('payment_method');
        $dataInput['payment_credit']                    = Input::get('payment_credit');
        $dataInput['contract_furigana']                 = Input::get('contract_furigana');
        $dataInput['contract_name']                     = Input::get('contract_name');
        $dataInput['organization_name']                 = Input::get('organization_name');
        $dataInput['dept_name']                         = Input::get('dept_name');
        $dataInput['title']                             = Input::get('title');
        $dataInput['zipcode']                           = Input::get('zipcode');
        $dataInput['address']                           = Input::get('address');
        $dataInput['tel']                               = Input::get('tel');
        $dataInput['fax']                               = Input::get('fax');
        $dataInput['email']                             = Input::get('email');
        $dataInput['remark']                            = Input::get('remark');

        Session::put('app_data_session', $dataInput);
        return redirect()->route('frontend.application.confirm');
    }

    /*
    |-----------------------------------
    | get confirm application
    |-----------------------------------
    */
    public function getConfirm() {
        if(!Session::has('app_data_session')){
            return redirect()->route('frontend.application.input');
        }

        $data                    = array();
        $data['dataInput']       = (Object) Session::get('app_data_session');
        return view('frontend.application.confirm');
    }

    /*
    |-----------------------------------
    | get complete application
    |-----------------------------------
    */
    public function getComplete() {
        return view('frontend.application.complete');
    }
}