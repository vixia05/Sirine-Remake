<?php

namespace App\Http\Controllers\SuperUser;

use App\Models\User;
use App\Models\Unit;
use App\Models\Seksi;
use App\Models\Workstation;
use App\Models\Privillage;
use App\Models\UserDetails;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data   = UserDetails::orderBy('np_user')->paginate(15);
        return view('superUser.list-users',[
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listUnit = Unit::get()
                        ->sortBy('unit');

        $listSeksi = Seksi::get()
                          ->sortBy('seksi');

        $listWorkstation = Workstation::get()
                                      ->sortBy('workstation');

        return view('superUser.create-user',[
            'listUnit'  => $listUnit,
            'listSeksi' => $listSeksi,
            'listWorkstation' => $listWorkstation
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validator
        $validator = $request->validate([
            'np'    => 'required|max:4',
            'name'  => 'required',
            'seksi' => 'required',
            'unit'  => 'required',
            'workstation' => 'required',
            'password'  => 'required|min:8',
            'passwordConfirmation' => 'required|same:password',
            'privillage' => 'required',
            'email' => 'required',
            'birthDate' => 'required',
        ]);

        // 1.0 Insert Account Untuk Login

        User::updateOrCreate(
            ['np'    => $request->np],
            [
                'email'    => $request->email,
                'password' => hash::make($request->password),
            ]
        );

        // 2.0 Insert Profile

        UserDetails::updateOrCreate(
            ['np_user' => $request->np],
            [
                'foto'    => 'default.jpg',
                'nama'    => $request->name,
                'alamat'  => $request->address,
                'contact' => $request->contact,
                'tgl_lahir' => $request->birthDate,
                'id_unit'   => $request->unit,
                'id_seksi'  => $request->seksi,
                'id_workstation' => $request->workstation
            ]
            );

        // 3.0 Insert Privillage

        Privillage::updateOrCreate(
            ['np_user' => $request->np],
            ['level'   => $request->privillage]
        );

        return redirect()->back();
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
