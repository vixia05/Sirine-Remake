<?php

namespace App\Http\Controllers\SuperUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\OrderPcht;
use App\Model\OrderMmea;
use App\Imports\UpdatePcht;
use App\Imports\UpdateMmea;
use Maatwebsite\Excel\Facades\Excel;

class UpdateOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('SuperUser.Update-Order');
    }

    public function updatePcht(Request $request)
    {
        // validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);

		// menangkap file excel
		$file = $request->file('file');

		// membuat nama file unik
		$nama_file = $file->getClientOriginalName();

		// upload ke folder file_siswa di dalam folder public
		$file->move('excel',$nama_file);

		// import data
		Excel::import(new UpdatePcht, public_path('/excel/'.$nama_file));

		// notifikasi dengan session

		// alihkan halaman kembali
		return redirect()->back();

    }

    public function updateMmea(Request $request)
    {
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);

		// menangkap file excel
		$file = $request->file('file');

		// membuat nama file unik
		$nama_file = $file->getClientOriginalName();

		// upload ke folder file_siswa di dalam folder public
		$file->move('excel',$nama_file);

		// import data
		Excel::import(new UpdateMmea, public_path('/excel/'.$nama_file));

		// notifikasi dengan session
		// Session::flash('sukses','Data Siswa Berhasil Diimport!');

		// alihkan halaman kembali
		return redirect()->back();

    }
}
