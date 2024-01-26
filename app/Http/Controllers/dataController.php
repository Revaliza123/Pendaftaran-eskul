<?php

namespace App\Http\Controllers;
use App\Models\data;
use App\Models\viewData;
use App\Models\eskuls;
use Illuminate\Database\Eloquent\Builder;
use App\Models\jurusan;
use App\Models\classroom;
use Illuminate\Http\Request;

class dataController extends Controller
{
        /**
         * Display a listing of the resource.
         * 
         */
     
        public function index(request $request)
        {
            $Search = $request->Search;
            $items = viewData::where('nama','LIKE','%'.$Search.'%')
                     ->orwhere('kelas',$Search)
                    ->paginate();
            $data = data::with('classes')->get();
            return view('/data', compact('items','data','Search'));
        }
    
        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            $data = data::all();
            return view('/data-add',['data'=>$data]);
        }
        public function jurusan(){
            $jurusan = new jurusan;
            $eskul = new eskuls;
            $kelas = new classroom;
            $jurusan = jurusan::all();
            $eskul = eskuls::all();
            $kelas = classroom::all();
            return view('/data-add',compact('jurusan','eskul','kelas'));
        }
    
        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
            $invalidated = $request->validate([
                'id' => 'unique:data'
            ]);
            $data = new data;
            $data->create($request->all());
            return redirect('/data'); 
        }
    
        /**
         * Display the specified resource.
         */
        public function show()
        {
            
        }
    
        /**
         * Show the form for editing the specified resource.
         */
        public function edit(request $request, $id)
        {
            $data = data::findOrFail($id);
            $kelas = classroom::findOrFail($id);
            return view("/data-edit",compact('data','kelas'));
        }
        
        public function __construct()
        {
            $this->middleware('auth');
        }
    
    
        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request,$id )
        {
            $data = data::findOrFail($id);
            $data->update($request->all());
            return redirect('/data');   
        }

        public function delete($id)
        {
            $data = data::findOrFail($id);
            return view('/data-delete', ['data'=>$data]);
        }
        /**
         * Remove the specified resource from storage.
         */
        public function destroy( $id)
        {
            $deletedata = data::findOrFail($id);
            $deletedata->delete();
            return redirect('/data');
        }
    
}
