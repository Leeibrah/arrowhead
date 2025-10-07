<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class FrontendController extends Controller
{
    /**
     * Retrieves the view for the index page of the frontend.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(){

        $page_title = "Home";
        $page_description = "This is the Home page";
        
        return view('frontend.index', compact('page_title', 'page_description'));
    }

    public function about(){

        $page_title = 'About Us';
        $page_description = "This is the about us page";

        return view('frontend.pages.about', compact('page_title', 'page_description'));
    }

    public function contact(){

        $page_title = 'Contact Us';
        $page_description = "This is the contact us page";

        return view('frontend.pages.contact', compact('page_title', 'page_description'));
    }

    public function postContacts(Request $request)
    {

        $page_title = 'success Page';
        $page_description = "This is the success page";
        $message = "Message send Successfully. We will get back to you. Thank You.";

        // dd($request);

        if($request['answer'] === '99'){
            $name = "N/A";
            if ($request->has('name')) {
                $fromName = $request['name'];
            }
            if ($request->has('email')) {
                $fromEmail = $request['email'];
            }
            if ($request->has('phone')) {
                $fromPhone = $request['phone'];
            }
            if ($request->has('subject')) {
                $theSubject = $request['subject'];
            }
            if ($request->has('message')) {
                $theMessage = $request['message'];
            }

            $data = array('email' => $fromEmail, 'phone'  => $fromPhone, 'name' => $fromName, 'subject' => $theSubject, 'linemessage' => $theMessage);

            // try {
            //     print $response->statusCode() . "\n";
            //     print_r($response->headers());
            //     print $response->body() . "\n";
            // } catch (Exception $e) {
            //     echo 'Caught exception: '. $e->getMessage() ."\n";
            // }


            Mail::send('emails.contact', $data, function($message) use ($data) {
                $message->to('info@mdigital.co.ke');
                $message->subject($data['subject']);
            });
            
            // return redirect(route('success'));
            return view('contact', compact('page_title', 'page_description', 'message'));

        }else{
            // return view('pages.notification', ['message' => 'Error: Please go back and fill in the correct answer to the captcha question. Thank You.']);
            return redirect(route('contact'))->with('message', 'Message not send.  ');

            // return view('contact', compact('page_title', 'page_description', 'message'));
        }
        
    }
}
