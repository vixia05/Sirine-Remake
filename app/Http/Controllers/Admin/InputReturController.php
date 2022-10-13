<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\UserDetails;
use App\Models\ReturPikai;

class InputReturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $npUser = UserDetails::pluck('np_user')->sort();
        return view('Admin.Input-Retur',[
            'npUser' => $npUser,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $namaUser = UserDetails::where('np_user',$request->npUser)->value('nama');
        $request->validate([
            'tglCek' => 'required|date',
            'npUser' => 'required|max:4|alpha_num',
            'jProduk'=> 'required|max:4|alpha',
            'blobor' => 'nullable|numeric',
            'plooi'  => 'nullable|numeric',
            'blur'   => 'nullable|numeric',
            'hologram'  => 'nullable|numeric',
            'noda'   => 'nullable|numeric',
            'missReg'=> 'nullable|numeric',
            'tipis'  => 'nullable|numeric',
            'gradasi'=> 'nullable|numeric',
            'sobek'  => 'nullable|numeric',
            'terpotong' => 'nullable|numeric',
            'tercampur' => 'nullable|numeric',
            'botak' => 'nullable|numeric',
        ]);
        // dd($namaUser);

        ReturPikai::updateOrCreate(
            ['tgl_cek' => $request->tglCek, 'np_user' => $request->npUser],
            [
            'nama_user' => $namaUser,
            'jenis'  => $request->jProduk,
            'blobor'=> $request->blobor,
            'plooi'  => $request->plooi,
            'blur'   => $request->blur,
            'hologram' => $request->hologram,
            'noda'    => $request->noda,
            'miss_reg'=> $request->missReg,
            'tipis'   => $request->tipis,
            'gradasi' => $request->gradasi,
            'sobek'   => $request->sobek,
            'terpotong' => $request->terpotong,
            'tercampur' => $request->tercampur,
            'botak'   => $request->botak,
            ]
            );

        return redirect()->back()->withSuccess('notif');

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
