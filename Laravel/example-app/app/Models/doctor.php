<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    use HasFactory;
    protected $fillable = ['FirstName', 'MiddleName', 'LastName','Sex', 'BirthDate', 'Address', 'ContactNumber', 'Specialization'];

}

