<?php

namespace App\Exports;
use App\ViewsModel as Views;

class ViewsExport implements FromCollection
{
    public function collection()
    {
        return Views::all();
    }
}

?>