<?php

namespace App\Http\Controllers;

use App\Models\Addname;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddnameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $name = Auth::user();
        $addnames = Addname::paginate(5);
        $nums = 1;

        return view("addName.main", compact("addnames", "nums", "name"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $dataAddname =  [
            "firstname" => $request->firstname,
            "lastname" => $request->lastname,
        ];
        
        Addname::create($dataAddname);

        return redirect()->route("indexAddname");
    }

    /**
     * Display the specified resource.
     */
    public function show(Addname $addname)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $addname = Addname::findOrFail($id);

        return view("addname.edit", compact("addname"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $addname = Addname::findOrFail($id);
        
        $dataAddname = [
            "firstname" => $request->firstname,
            "lastname" => $request->lastname,
        ];

        $addname->update($dataAddname);
        return redirect()->route('indexAddname');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $addname = Addname::findOrFail($id);
        $addname->delete();
        
        return redirect()->route('indexAddname');
    }
}
