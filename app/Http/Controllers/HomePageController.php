<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Guest;

class HomePageController extends Controller
{
    public function homepage(){
        return view('homepage');
    }
    public function addGuest(Request $request){
        $guest = $request->all();
        Guest::create($guest);
        return view('homepage');
    }
}
