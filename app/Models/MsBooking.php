<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MsBooking extends Model
{
    protected $guarded = [];

    // Untuk relasi ke tb ms_tables
    public function jnstable(){
        return $this->belongsTo(MsTable::class,'number_table_rel','id');
    }

    // Untuk relasi ke tb ms_tables
    public function menubookingorder(){
        return $this->belongsTo(MsBookingOrder::class,'rendome_booking_rel','rendome_booking_order');
    }

}
