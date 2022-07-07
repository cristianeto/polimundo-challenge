<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        "origin_city",
        "destination_city",
        "return_date",
        "price",
        "airline",
        "number_scales",
        "flight_duration",
        "user_id",
    ];

    /**
     * Get the user that owns the Ticket
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function person()
    {
        return $this->belongsTo(User::class);
    }
}
