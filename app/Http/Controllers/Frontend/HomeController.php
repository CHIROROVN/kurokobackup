<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
use Input;
use Session;
use Validator;


class HomeController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }

    /*
    |-----------------------------------
    | get view home
    |-----------------------------------
    */
    public function index() {
        return view('frontend.home.index');
    }
}