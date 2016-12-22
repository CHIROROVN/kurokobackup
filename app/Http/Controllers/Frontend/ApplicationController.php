<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
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
        return view('frontend.application.input');
    }

    /*
    |-----------------------------------
    | post input application
    |-----------------------------------
    */
    public function postInput() {
        
    }

    /*
    |-----------------------------------
    | get confirm application
    |-----------------------------------
    */
    public function getConfirm() {
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