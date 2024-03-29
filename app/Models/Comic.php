<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;

class Comic extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'thumb', 'type', 'sale_date', 'description',  'price', 'series', ];

}
