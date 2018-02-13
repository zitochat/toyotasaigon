<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SEO;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    // index.html
    public function getIndex()
    {
        SEO::setTitle('Toyota Đông Sài Gòn');
        
        $installment= DB::table('posts')->where('parent', 'tra-gop')->get();
        $sliders= DB::table('sliders')->get();
        $news_list= DB::table('posts')->where('parent', 'tin-tuc')->get();

        return view('frontend.home.index', compact(['installment', 'sliders', 'news_list']));
    }

    // login
    public function showLogin()
    {
        return view('aut.login');
    }

    public function doLogin(Request $request)
    {
        $rules = array(
            'email'    => 'required|email',
            'password' => 'required|alphaNum|min:3'
        );
        $validator = \Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return \Redirect::to('login_user')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            $userdata = array(
                'email'     => $request->input('email'),
                'password'  => $request->input('password')
            );

            if (\Auth::attempt($userdata)) {
                return \Redirect::to('cpanel_admin');
        
            } else {        
                return \Redirect::to('login_user');
        
            }
        }
    }

    //logout
    public function doLogout()
    {
        \Auth::logout(); // log the user out of our application
        return Redirect::to('login_user'); // redirect the user to the login screen
    }

}
