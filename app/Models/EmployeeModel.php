<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeModel extends Model
{ 
    use HasFactory;
    public $table='employee';
    public $fillable=['user_id','name','email','phone','address','image','position','basic_salary'];

} 
