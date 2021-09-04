<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'orders';
    protected $timestamp = true;
    use HasFactory;
}
