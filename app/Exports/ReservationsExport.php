<?php
namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ReservationsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        $reservations = DB::table('reservations')
            ->join('users', 'reservations.id_user', '=', 'users.id')
            ->select('reservations.id', 'reservations.date', 'reservations.id_user', 'users.name as user_name', 'users.email as user_email')
            ->get();

        return $reservations;
    }

    public function headings(): array
    {
        return [
            'ID',
            'Date',
            'User ID',
            'User Name',
            'User Email',
        ];
    }
}
