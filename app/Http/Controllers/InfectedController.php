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
        $eropa = Country::where('benua', '=', 'Eropa')->orderBy('jml_positif', 'desc')->paginate(20);
        $asia = Country::where('benua', '=', 'Asia')->orderBy('jml_positif', 'desc')->paginate(20);
        $amerika = Country::where('benua', '=', 'Amerika')->orderBy('jml_positif', 'desc')->paginate(20);
        $afrika = Country::where('benua', '=', 'Afrika')->orderBy('jml_positif', 'desc')->paginate(20);
        $australia = Country::where('benua', '=', 'Australia')->orderBy('jml_positif', 'desc')->paginate(20);

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
        })->orderBy('jml_positif', 'desc')->paginate(2);
        $asia = Country::where('benua', '=', 'Asia')->orderBy('jml_positif', 'desc')->paginate(2);
        $amerika = Country::where('benua', '=', 'Amerika')->orderBy('jml_positif', 'desc')->paginate(2);
        $afrika = Country::where('benua', '=', 'Afrika')->orderBy('jml_positif', 'desc')->paginate(2);
        $australia = Country::where('benua', '=', 'Australia')->orderBy('jml_positif', 'desc')->paginate(2);
        return view('infected', compact('eropa', 'asia', 'amerika', 'afrika', 'australia'));
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchAmerica(Request $request)
    {
        $amerika = Country::where('benua', '=', 'Amerika')->when($request->searchAmerica, function ($query) use ($request) {
            $query->where('nama_negara', 'like', "%{$request->searchAmerica}%");
        })->orderBy('jml_positif', 'desc')->paginate(2);
        $asia = Country::where('benua', '=', 'Asia')->orderBy('jml_positif', 'desc')->paginate(2);
        $eropa = Country::where('benua', '=', 'Eropa')->orderBy('jml_positif', 'desc')->paginate(2);
        $afrika = Country::where('benua', '=', 'Afrika')->orderBy('jml_positif', 'desc')->paginate(2);
        $australia = Country::where('benua', '=', 'Australia')->orderBy('jml_positif', 'desc')->paginate(2);
        return view('infected', compact('eropa', 'asia', 'amerika', 'afrika', 'australia'));
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchAfrica(Request $request)
    {
        $afrika = Country::where('benua', '=', 'Afrika')->when($request->searchAfrica, function ($query) use ($request) {
            $query->where('nama_negara', 'like', "%{$request->searchAfrica}%");
        })->paginate(2);
        $asia = Country::where('benua', '=', 'Asia')->orderBy('jml_positif', 'desc')->paginate(2);
        $amerika = Country::where('benua', '=', 'Amerika')->orderBy('jml_positif', 'desc')->paginate(2);
        $eropa = Country::where('benua', '=', 'Eropa')->orderBy('jml_positif', 'desc')->paginate(2);
        $australia = Country::where('benua', '=', 'Australia')->orderBy('jml_positif', 'desc')->paginate(2);
        return view('infected', compact('eropa', 'asia', 'amerika', 'afrika', 'australia'));
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchAsia(Request $request)
    {
        $asia = Country::where('benua', '=', 'Asia')->when($request->searchAsia, function ($query) use ($request) {
            $query->where('nama_negara', 'like', "%{$request->searchAsia}%");
        })->orderBy('jml_positif', 'desc')->paginate(2);
        $eropa = Country::where('benua', '=', 'Eropa')->orderBy('jml_positif', 'desc')->paginate(2);
        $amerika = Country::where('benua', '=', 'Amerika')->orderBy('jml_positif', 'desc')->paginate(2);
        $afrika = Country::where('benua', '=', 'Afrika')->orderBy('jml_positif', 'desc')->paginate(2);
        $australia = Country::where('benua', '=', 'Australia')->orderBy('jml_positif', 'desc')->paginate(2);
        return view('infected', compact('eropa', 'asia', 'amerika', 'afrika', 'australia'));
    }

}
