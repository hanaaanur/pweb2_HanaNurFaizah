<?php

namespace App\Http\Controllers;

use App\Models\organisasi;
use Illuminate\Http\Request;

class OrganisasiController extends Controller
{
    public function index(){
        // $data = organisasi::all();
        // return view('organisasi')->with('data', $data);
        // $data = organisasi::all();
        // return view('organisasi')->with('data', $data);
        $data = organisasi::all();
        return view('organisasi', compact(['data']));
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        // dd($request->except(['_token']));
        organisasi::create($request->except(['_token']));
        return redirect('/organisasi');
    }

    // public function update(Request $request, $id)
    // {
    //     // dd($request->except(['_token']));
    //     $data= organisasi::find($id);
    //     Organisasi::create($request->except(['_token']));
    //     return redirect('/organisasi');
    // }
    public function update(Request $request, $id)
    {
        // dd($request->except(['_token']));
        $data= organisasi::find($id);
        $data->update($request->except(['_token']));
        return redirect('/organisasi');
    }

    // public function edit()
    // {
    //     return 'abc';
    // }

    public function destroy($id){
        $data= organisasi::find($id);
        $data->delete();
        return redirect('/organisasi');
    }

    public function edit($id){
        $data= organisasi::find($id);
        return view('edit', compact(['data']));
    }
    // public function edit($id){
    //     $data= organisasi::find($id);
    //     return view('edit', compact(['data']));
    // }
    // public function edit($id){
    //     $data= organisasi::find($id);
    //     return view('edit')->with(['data'=>organisasi::find($id)]);
    // }

    
    

}
