<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disctrict extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_district';
    protected $table = 'districts';
}