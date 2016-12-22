<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
use Input;
use Session;
use Validator;


class PriceController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }

    /*
    |-----------------------------------
    | get index price
    |-----------------------------------
    */
    public function index() {
        return view('frontend.price.index');
    }

}