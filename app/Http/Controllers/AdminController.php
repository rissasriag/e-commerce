<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
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
        $user = DB::table('users')->where('email', session('email'))->first();
        return view('admin.index', [
            'title' => 'DnG Store | Dashboard',
            'user' => $user,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function product()
    // {
    //     $user = DB::table('users')->where('email', session('email'))->first();
    //     return view('admin.product', [
    //         'title' => 'DnG Store | Product',
    //         'user' => $user,
    //         'products' => Product::all()
    //     ]);
    // }

    // public function productCreate()
    // {
    //     $user = DB::table('users')->where('email', session('email'))->first();
    //     return view('admin.create-product', [
    //         'title' => 'DnG Store | Create Product',
    //         'user' => $user,
    //     ]);
    // }

    // public function productStore(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'desc' => 'required',
    //         'price' => 'required',
    //         'photo' => 'mimes:jpg, jpeg, png, gif|max:8192'
    //     ]);
    //     $photo = $request->file('photo');
    //     $fileName = $photo->getClientOriginalName();
    //     Storage::put('storage/upload', $photo);
    //     DB::table('products')->insert([
    //         'name' => $request->name,
    //         'desc' => $request->desc,
    //         'price' => $request->price,
    //         'photo' => $fileName,
    //         'status' => 'tidak ready'
    //     ]);
    //     $session = [
    //         'message' => 'Berhasil menambahkan prodak baru!',
    //         'type' => 'Tambah Prodak',
    //         'alert' => 'Notifikasi Sukses!',
    //         'class' => 'success'
    //     ];
    //     return redirect()->intended('admin.product')->with($session);
    // }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
