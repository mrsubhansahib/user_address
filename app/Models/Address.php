<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    use HasFactory;
    protected $table = 'addresses';
    protected $primaryKey = 'id';
    protected $fillable = [
        'house_number',
        'street',
        'state',
        'city',
        'address_line',
        'country_id',
        'postal_code',

    ];
    public function users()
    {
        return $this->belongsToMany(User::class, 'customer_locations')->withTimestamps();
    }
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
}
