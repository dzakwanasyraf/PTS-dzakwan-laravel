<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\KaryawanExport;
use App\Imports\KaryawanImport;

class KaryawanController extends Controller
{
    public function index()
    {
        $data = Karyawan::get();
        return view ('home', compact ('data'));
    }
    public function addData()
    {
        return view('addData');
    }



    public function saveData(Request $request)
    {
        $data = new Karyawan;
        $data->namaKaryawan = $request->namaKaryawan;
        $data->hadirMasuk = $request->hadirMasuk;
        $data->izinMasuk = $request->izinMasuk;
        $data->bolosMasuk = $request->bolosMasuk;
        $data->telatMasuk = $request->telatMasuk;
        $data->save();
        return redirect('/home')->with('success', 'Task Add Data Successfully!');
    }




    public function editData($id)
    {
        $data = Karyawan::where('id', $id)->first();
        return view('editData', compact('data'));
    }




    public function updateData(Request $request)
    {
        $data = Karyawan::where('id', $request->id)->first();
        $data->namaKaryawan = $request->namaKaryawan;
        $data->hadirMasuk = $request->hadirMasuk;
        $data->izinMasuk = $request->izinMasuk;
        $data->bolosMasuk = $request->bolosMasuk;
        $data->telatMasuk = $request->telatMasuk;
        $data->save();
        return redirect('/home')->with('success', 'Task Edit Data Successfully!');
    }
    public function deleteData($id)
    {
       $data = Karyawan::where('id',$id)->first();
       $data->delete();
       return redirect('/home')->with('success', 'Task Deleted Successfully!');
    }





    public function exportXL()
    {
        return Excel::download(new KaryawanExport,'Karyawan.xlsx');
    }

    public function exportCSV()
    {
        return Excel::download(new KaryawanExport,'Karyawan.csv');
    }

    public function exportPDF()
    {
        return Excel::download(new KaryawanExport,'Karyawan.pdf');
    }




    public function upload()
    {
        return view('uploadData');
    }
    
    public function uploadData(Request $request)
    {
        excel::import(new KaryawanImport, $request->file('file')->store('temp'));

        return redirect('/home');
    }
    
}
