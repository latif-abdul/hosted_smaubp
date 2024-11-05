<?php

namespace App\Exports;

use App\Models\Daful;
use Maatwebsite\Excel\Concerns\FromCollection;

class DafulExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Daful::all();
    }
}
