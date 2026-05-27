<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'exam5_db';
    protected $primarykey = 'id';
    protected $fillable = [
        'fname',
        'lname',
        'mname',
        'address',
        'dob',
    ];
}
