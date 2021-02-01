<?php

namespace App\Imports;

use App\Models\Forwardkey;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ForwardkeyImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        //
    }
}
