<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $tabel = 'customers';
    protected $primaryKey = 'u_id';

    public function setUserNameAttribute($value)
    {
        $this->attributes['u_name'] = ucwords($value);
    }
}
