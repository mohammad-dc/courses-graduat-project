<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'messages';
    protected $timestamp = true;
    use HasFactory;
}
