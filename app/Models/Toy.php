<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toy extends Model
{
    protected $table = "toys";
    protected $primary_key = "id";
    protected $fillable = ["name", "amount", "price", "brand"];
    use HasFactory;
}
