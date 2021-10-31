<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    //terkait classes 
    protected $table = "classes";

    public function students()
    {
        //sebuah kelas memiliki banyak students. (hasmany)
        return $this->hasMany(Student::class);
    }

}
