<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advantages;
use App\Models\About;
use App\Models\Message;
use App\Models\Partner;
use App\Models\Review;
use App\Models\Service;

class PageController extends Controller
{
    public function index(){

        $advantag=Advantages::first();
        $abouts=About::all();
        $services=Service::all();
        $reviews=Review::all();
        $partners=Partner::all();


        return view('welcome', compact('advantag', 'abouts', 'services', 'reviews', 'partners'));
    }


    public function about(){

        $abouts=About::all();
        $reviews=Review::all();

        return view('about', compact('abouts', 'reviews'));
    }


    public function service(){

        $services=Service::all();

        return view('services', compact('services'));

    }


    public function project(){
        
        $partners=Partner::all();

        return view('project', compact('partners'));

    }

    
    public function contact(Request $request){
        if ($request->isMethod('GET')) {
            return view('contact');
        }else{
            Message::create($request->all());
            return back();
        }
    }
}
