<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
use Input;
use Session;
use Validator;


class ContactController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }

    /*
    |-----------------------------------
    | get input contact
    |-----------------------------------
    */
    public function getInput() {
        return view('frontend.contact.input');
    }

    /*
    |-----------------------------------
    | post input contact
    |-----------------------------------
    */
    public function postInput() {
        
    }

    /*
    |-----------------------------------
    | get confirm contact
    |-----------------------------------
    */
    public function getConfirm() {
        return view('frontend.contact.confirm');
    }

    /*
    |-----------------------------------
    | get complete contact
    |-----------------------------------
    */
    public function getComplete() {
        return view('frontend.contact.complete');
    }
}