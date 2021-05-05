<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController
{
    public function homePage(){
        return view('homePage');
    }

    public function contactPage(){
        return view('contactPage');
    }

    public function contactForm(Request $request){
        $user = $request->input('userName');
        $donut = $request->input('donutName');
        $error = false;
        if(trim($user) == "" || trim($donut) == ""){
            $error = "U haven't entered name and donut 😰";
        }
        return view('contactPage', ['user' => $user, 'donut'=> $donut, 'error'=> $error, 'submitted' => true]);
    }
}
