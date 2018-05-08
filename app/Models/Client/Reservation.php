<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = "reservation_tables";

    public static function rtNo() {

        $reservation = Reservation::orderBy('reservation_no', 'DESC')->first();

        if ($reservation == null) {

            $reservation = new Reservation;
            $reservation->reservation_no = 0;
        }

        return ((int) str_replace('R', ' ', $reservation->reservation_no)) + 1;
    }
}
