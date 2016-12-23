<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
use App\Http\Models\ContactModel;
use Input;
use Session;
use Validator;
use Mail;


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
        $data = array();
        if ( Session::has('contact') ) {
            $data['contact'] = Session::get('contact');
        }

        return view('frontend.contact.input', $data);
    }

    /*
    |-----------------------------------
    | post input contact
    |-----------------------------------
    */
    public function postInput() {
        $clsContact             = new ContactModel();
        $dataInsert             = Input::all();

        $validator  = Validator::make($dataInsert, $clsContact->rules(), $clsContact->messages());
        if ($validator->fails()) {
            return redirect()->route('frontend.contact.input')->withErrors($validator)->withInput();
        }

        Session::put('contact', $dataInsert);

        return redirect()->route('frontend.contact.confirm');
    }

    /*
    |-----------------------------------
    | get confirm contact
    |-----------------------------------
    */
    public function getConfirm() {
        if ( !Session::has('contact') ) {
            return redirect()->route('frontend.contact.input');
        }

        $data['contact'] = Session::get('contact');
        return view('frontend.contact.confirm', $data);
    }

    /*
    |-----------------------------------
    | get complete contact
    |-----------------------------------
    */
    public function getComplete() {
        if ( !Session::has('contact') ) {
            return redirect()->route('frontend.contact.input');
        }

        $contact = Session::get('contact');
        // send manager
        $mailManager = Mail::send(['html' => 'frontend.email.contact.contact_receive'], array('contact' => $contact), function($message) use ($contact){
            $message->from(MAIL_FROM_ADDRESS, MAIL_FROM_NAME);
            $message->to(MAIL_TO_ADDRESS_MANAGER)->subject(SUBJECT_CONTACT_MANAGER);
        });
        // send guest
        $mailGuest = Mail::send(['html' => 'frontend.email.contact.contact_sent'], array('contact' => $contact), function($message) use ($contact){
            $message->from(MAIL_FROM_ADDRESS, MAIL_FROM_NAME);
            $message->to($contact['email'])->subject(SUBJECT_CONTACT_USER);
        });

        if ( $mailManager && $mailGuest ) {
            Session::forget('contact');
            return view('frontend.contact.complete');
        }

        return view('frontend.contact.input');
    }
}