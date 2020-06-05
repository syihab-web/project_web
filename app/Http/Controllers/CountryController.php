<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Continent;
use Illuminate\Support\Facades\Auth;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware('Admin');
    // }

    public function index()
    {
        $country = Country::paginate(10);
        if(Auth::user()->roles == '1'){
            return view('country.index', compact('country'));
        }
        else{
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $continent = Continent::all();
        return view('country.create', compact('continent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $country = Country::when($request->search, function ($query) use ($request) {
            $query->where('nama_negara', 'like', "%{$request->search}%")
                ->orWhere('benua', 'like', "%{$request->search}%");
        })->paginate(10);

        return view('country.index', compact('country'));
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rule = [
            'nama_negara' => 'unique:country',
            'jml_positif' => 'numeric',
            'jml_sembuh' => 'numeric',
            'jml_meninggal' => 'numeric'
        ];
        $this->validate($request, $rule);
        $status = Country::create($request->all());

        if($status){
            return redirect('/country')->with('status', 'Data Berhasil Ditambahkan');
        }
        else{
            return redirect('/country/create')->with('error', 'Data Gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        return view('country.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        Country::where('id', $country->id)
        ->update([
            'jml_positif' => $request->jml_positif,
            'jml_sembuh' => $request->jml_sembuh,
            'jml_meninggal' => $request->jml_meninggal,
            'tanggal' => $request->tanggal
        ]);

        return redirect('/country');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Country::destroy($id);
        return redirect('/country')->with('delete', 'Data Berhasil dihapus!');
    }


}
