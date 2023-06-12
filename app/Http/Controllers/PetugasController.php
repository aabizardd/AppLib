<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class PetugasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        

        // dd(Auth::user()->id);

        $user = User::where('id' , '!=', Auth::user()->id)->get();
        
        $data = [
            'user' => $user,
        ];

        
        return view('list_petugas', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_petugas'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = $request->except(['_token']);

        $email = User::where('email',$request->email)->get()->count();

        // dd($email);

        if($email > 0){

            return redirect('/petugas')->with('danger', 'Data Petugas Gagal Ditambahkan, Email Telah Digunakan!'); 
        }


        $data = [

            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password),
        ];

        User::insert($data); 

        return redirect('/petugas')->with('success', 'Data Petugas Berhasil Ditambahkan!'); 
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

        $user = User::find($id);

        $data = [
            'user' => $user,
        ];

        return view('edit_petugas', $data); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        

        $user = User::find($request->id_user);

        if($request->email != $request->email_lama){

            $all_user = User::where('email', $request->email)->get()->count();

            if($all_user > 0){
                
                return redirect('/petugas')->with('danger', 'Data Petugas Gagal Diubah, Email Telah Digunakan!'); 
            }
            
        }

        $pass = "";

        if($request->password != $request->password_old){

            $pass = Hash::make($request->password);

        }else{

            $pass = $request->password_old;

        }

        $data = [
            'email' => $request->email,
            'name' => $request->name,
            'password' => $pass,
        ];


        $user->update($data);

        return redirect('/petugas')->with('success', 'Data Petugas Berhasil Diubah!'); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $data = User::find($id);

        $data->delete();

        return redirect()->back()->with('success', 'Data Petugas Berhasil dihapus');
    }
}