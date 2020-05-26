<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Country;
use App\Continent;

class InfectedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eropa = Country::where('benua', '=', 'Eropa')->paginate(2);
        $asia = Country::where('benua', '=', 'Asia')->paginate(2);
        $amerika = Country::where('benua', '=', 'Amerika')->paginate(2);
        $afrika = Country::where('benua', '=', 'Afrika')->paginate(2);
        $australia = Country::where('benua', '=', 'Australia')->paginate(2);

        return view('infected', compact('eropa', 'asia', 'amerika', 'afrika', 'australia'));
    }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchEurope(Request $request)
    {
        $eropa = Country::where('benua', '=', 'Eropa')->when($request->searchEurope, function ($query) use ($request) {
            $query->where('nama_negara', 'like', "%{$request->searchEurope}%");
        })->paginate(2);
        $asia = Country::where('benua', '=', 'Asia')->paginate(2);
        $amerika = Country::where('benua', '=', 'Amerika')->paginate(2);
        $afrika = Country::where('benua', '=', 'Afrika')->paginate(2);
        $australia = Country::where('benua', '=', 'Australia')->paginate(2);
        return view('infected', compact('eropa', 'asia', 'amerika', 'afrika', 'australia'));
    }
}
