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
        $jmlRetur = $request->blobor
                    + $request->plooi
                    + $request->blanko
                    + $request->minyak
                    + $request->terlipat
                    + $request->diecut
                    + $request->blur
                    + $request->hologram
                    + $request->noda
                    + $request->missReg
                    + $request->tipis
                    + $request->sobek
                    + $request->terpotong
                    + $request->tercampur
                    + $request->botak;

        $request->validate([
            'tglCek' => 'required|date',
            'npUser' => 'required|max:4|alpha_num',
            'jProduk'=> 'required|max:4|alpha',
            'blobor' => 'nullable|numeric',
            'plooi'  => 'nullable|numeric',
            'blanko'  => 'nullable|numeric',
            'minyak'  => 'nullable|numeric',
            'terlipat'  => 'nullable|numeric',
            'diecut'  => 'nullable|numeric',
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
            [
                'tgl_ck3' => $request->tglCek,
                'np_user' => $request->npUser,
                'waktu' => $request->waktu,
            ],
            [
            'nama_user' => $namaUser,
            'terpotong' => $request->terpotong == null ? 0 : $request->terpotong,
            'tercampur' => $request->tercampur == null ? 0 : $request->tercampur,
            'hologram'  => $request->hologram == null ? 0 : $request->hologram,
            'miss_reg'  => $request->missReg == null ? 0 : $request->missReg,
            'gradasi'   => $request->gradasi == null ? 0 : $request->gradasi,
            'jenis' => $request->jProduk == null ? 0 : $request->jProduk,
            'blobor'=> $request->blobor == null ? 0 : $request->blobor,
            'plooi' => $request->plooi == null ? 0 : $request->plooi,
            'blur'  => $request->blur == null ? 0 : $request->blur,
            'noda'  => $request->noda == null ? 0 : $request->noda,
            'tipis' => $request->tipis == null ? 0 : $request->tipis,
            'sobek' => $request->sobek == null ? 0 : $request->sobek,
            'botak' => $request->botak == null ? 0 : $request->botak,
            'blanko' => $request->blanko == null ? 0 : $request->blanko,
            'minyak' => $request->minyak == null ? 0 : $request->minyak,
            'terlipat' => $request->terlipat == null ? 0 : $request->terlipat,
            'diecut' => $request->diecut == null ? 0 : $request->diecut,
            'jml_retur' => $jmlRetur,
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
