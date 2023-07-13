<?php

namespace App\Exports;

use App\Models\pengaduanModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class UserExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return pengaduanModel::all();
    }
}
