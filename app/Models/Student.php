<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // if table name is different then add this following line.
    // protected $table = "college_students"; 
    function testFun() {
        echo 'this is dummy function';
    }
}
