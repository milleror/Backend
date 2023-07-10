<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class useremp extends Model
{
    use HasFactory;
    protected $table = "useremp";
    protected $primaryKey = "id";
    protected $fillable = ["nombre","apellido","tipodoc","documento","cargo"];
     
}