<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Unit;
use App\Models\Seksi;
use App\Models\Privillage;
use App\Models\Workstation;
use App\Models\UserDetails;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userData   = UserDetails::where('np_user',Auth::user()->np)->first();

        $unit   = Unit::where('id',$userData->value('id_unit'))->value('unit');
        $seksi  = Seksi::where('id',$userData->value('id_seksi'))->value('seksi');
        $workstation = Workstation::where('id',$userData->value('id_workstation'))->value('workstation');

        return view('Profile',[
            'userData' => $userData,
            'unit'     => $unit,
            'seksi'    => $seksi,
            'workstation' => $workstation,
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
        //
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
        $request->validate([
            'namaUser'   => 'required|required|regex:/^[\pL\s\-]+$/u',
            'contactUser'=> 'required|numeric',
            'emailUser'  => 'required|email',
        ]);

        UserDetails::where('np_user',$id)->update([
            'nama'   => $request->namaUser,
            'contact'=> $request->contactUser,
            'alamat' => $request->alamatUser == null ? "-" : $request->alamatUser,
        ]);

        return back();
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
