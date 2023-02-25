<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uname extends Model
{
    use HasFactory;

    protected $table = 'unames';
    protected $primaryKey = 'id';

}
