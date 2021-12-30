<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new User([
            'name' => $row[0],
            'nim' => $row[1],
            'no_tlp' => $row[2],
            'kelas' => $row[3],
            'reguler' => $row[4],

        ]);
    }
}