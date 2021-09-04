<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class replay extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'replies';
    protected $timestamp = true;
    use HasFactory;
}
