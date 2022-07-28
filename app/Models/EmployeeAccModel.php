<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeAccModel extends Model
{
    use HasFactory;
    public $table='employeeacc';
    public $fillable=['user_id','employee_id','details','amount','date','status'];

}
