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
            'kelas' => $row[0],
            'name' => $row[1],
            'username' => $row[2],
            'no_tlp' => $row[3],
            'reguler' => $row[4],

        ]);
    }
}
