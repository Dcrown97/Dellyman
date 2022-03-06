<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact_Model extends Model
{
    use HasFactory;
    protected $table = 'contact_models';
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'message',
        'coupon'
    ];
}
