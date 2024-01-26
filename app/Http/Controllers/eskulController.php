<?php

namespace App\Http\Controllers;
use App\Models\eskuls;
use App\Models\vieweskul;
use App\Models\kategori;
use App\Models\pembina;
use Illuminate\Http\Request;

class eskulController extends Controller
{
    public function index()
    {
        $eskuls = vieweskul::all();
        return view('/eskuls', compact('eskuls'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $eskuls = eskuls::all();
        return view('/eskuls-add',['eskuls'=>$eskuls]);
    }
    public function kategori(){
        $kategori = new kategori;
        $pembina = new pembina;
        $kategori = kategori::all();
        $pembina = pembina::all();
        return view('/eskuls-add',compact('kategori','pembina'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $invalidated = $request->validate([
            'id' => 'unique:eskuls'
        ]);
        $eskuls = new eskuls;
        $eskuls->create($request->all());
        return redirect('/eskuls'); 
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(request $request,$id)
    {
        $eskuls = eskuls::findOrFail($id);
        return view("/eskuls-edit",compact('eskuls'));
    }
    
    public function update(Request $request,$id )
    {
        $eskuls = eskuls::findOrFail($id);
        $eskuls->update($request->all());
        return redirect('/eskuls');   
    }
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Update the specified resource in storage.
     */
    public function delete(Request $request,$id)
        {
            $eskuls= eskuls::findOrFail($id);
            return view('/eskuls-delete', ['eskuls'=>$eskuls]);
        }
        /**
         * Remove the specified resource from storage.
         */
        public function destroy($id)
        {
            $deleteeskul = eskuls::findOrFail($id);
            $deleteeskul->delete();
            return redirect('/eskuls');
        }
    
}
