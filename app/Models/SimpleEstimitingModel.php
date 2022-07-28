<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SimpleEstimitingModel extends Model
{
    use HasFactory;
    public $table='simple_estimiting';
    public $fillable=['user_id','project_id','name','quantaty'];
}
