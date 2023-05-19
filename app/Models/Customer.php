<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $tabel = 'customers';
    protected $primaryKey = 'u_id';

    public function setUserNameAttribute($value)
    {
        $this->attributes['u_name'] = ucwords($value);
    }
}
