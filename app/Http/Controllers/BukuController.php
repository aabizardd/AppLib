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
    public function show($id)
    {

        $book = M_Buku::find($id);
        $book_detail = DetailBuku::where('id_buku', $id)->first();
        
        $data = [
            'book' => $book,
            'book_detail' => $book_detail
        ];

        return view('edit_buku', $data); 
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
    public function update(Request $request)
    {
        
        $data = $request->except(['_token', 'id_buku_lama']);

        // dd($data);

        if($request->id_buku_lama != $request->id_buku){

            $book = M_Buku::where('id_buku',$request->id_buku)->get()->count();

            if($book > 0){
                
                return redirect()->back()->with('danger', 'Data Buku Gagal Diubah, ID Buku Telah Digunakan!'); 
            
            }
        
        }

        $book = M_Buku::find($request->id_buku_lama);

        $book->update($data);

        return redirect('/buku')->with('success', 'Data Buku Berhasil Diubah!'); 
    }


    public function update_detail(Request $request)
    {
        
        $data = $request->except(['_token','nama_buku']);

        

        $book = DetailBuku::find($request->id_detail_buku);

        $book->update($data);

        return redirect('/buku')->with('success', 'Data Detail Buku Berhasil Diubah!'); 
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