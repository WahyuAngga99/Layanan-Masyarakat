<?php

namespace App\Http\Controllers;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Illuminate\Foundation\Auth\User;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    public function index()
    {
        $users = User::get();

        return view('admin.index',compact('users'));
    }
    public function import()
    {
        Excel::import(new UsersImport,request()->file('file'));
        return redirect()->back();
    }
    public function export()
    {
       return Excel::download(new UsersExport,'Data-Pengaduan.csv');
    }
    use AuthorizesRequests, ValidatesRequests;
}
