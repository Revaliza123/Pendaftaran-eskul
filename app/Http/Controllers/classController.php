<?php

namespace App\Http\Controllers;
use App\Models\classroom;
use Illuminate\Http\Request;   

class classController extends Controller
{
    public function index()
    {
        $class = classroom::all();
        return view('/classroom', ['class'=>$class]);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $invalidated = $request->validate([
        //     'id' => 'unique:data'
        // ]);
        // $data = new data;
        // $data->create($request->all());
        // return redirect('/data'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(request $request, $id)
    {
        // $data = data::findOrFail($id);
        // return view("data-edit",['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(siswa $siswa)
    {
        //
    }

}
