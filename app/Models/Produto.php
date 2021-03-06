<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Produto extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tbl_produtos';
    protected $fillable = ['prod_name', 'description'];



}
