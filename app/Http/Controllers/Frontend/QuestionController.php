<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
use Input;
use Session;
use Validator;


class QuestionController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }

    /*
    |-----------------------------------
    | get index question
    |-----------------------------------
    */
    public function index() {
        return view('frontend.function.index');
    }

}