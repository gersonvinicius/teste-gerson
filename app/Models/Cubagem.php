<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cubagem extends Model
{
    use HasFactory;

    protected $table = 'cubagems';

    protected $fillable = ['valor'];
}
