<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq_Model extends Model
{
    use HasFactory;
    protected $table = 'faq_models';
    protected $fillable = [
        'question',
        'answer'
    ];
}
