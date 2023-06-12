<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\M_Buku; 
use App\Models\DetailBuku; 
use App\User; 

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
     {
         $this->middleware('auth');
     }
 

    public function index()
    {   
        $data = [
            'books' => M_Buku::all()
        ];

        
        return view('list_buku', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except(['_token']);

        $book = M_Buku::where('id_buku',$request->id_buku)->get()->count();

        // dd($book);

        if($book > 0){

            return redirect('/buku')->with('danger', 'Data Buku Gagal Ditambahkan, ID Buku Telah Digunakan!'); 
        }

        // if($request->id_buku)

        M_Buku::insert($data); 

        $data_detail = [
            'id_buku' => $request->id_buku
        ];

        DetailBuku::create($data_detail);

        return redirect('/buku')->with('success', 'Data Buku Berhasil Ditambahkan!'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        

        $data = M_Buku::find($id);

        $data->delete();

        return redirect()->back()->with('success', 'Data Buku Berhasil dihapus');

    }
}