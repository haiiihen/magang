<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UserExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::all();
    }

    public function map($invoice): array
    {
        return[
            $invoice->name,
            $invoice->email,
            $invoice->gender,
            $invoice->tanggalLahir,
            $invoice->alamat,
            $invoice->instansi,
            $invoice->instagram,
            $invoice->noHandphone,
        ];
    }

    public function headings():array 
    {
        return[
            'NAMA LENGKAP',
            'EMAIL',
            'GENDER',
            'TANGGAL LAHIR',
            'ALAMAT',
            'INSTANSI',
            'INSTAGRAM',
            'NO HANDPHONE',
        ];
    }
}
