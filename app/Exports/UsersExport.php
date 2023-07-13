<?php

namespace App\Exports;

use App\Models\pengaduanModel;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return pengaduanModel::select("nama","lokasi","lpr","tgl")->get();
    }
    public function headings():array
    {
       return ["Nama","Lokasi","Pengaduan","Tanggal"];
    }
}
