<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    // relasi pada model Student dengan Kelas
    protected $fillable = [ 'nim','class_id','name','department', 'phone_number'];
    
        public function kelas(){
            //satu Student memiliki satu Kelas. serta mendefinisikan foreign key
            return $this->belongsTo(Kelas::class, 'class_id');
        } 
        public function courses(){
            //BANYAK Student menempuk banyak matkul. 
            return $this->belongsToMany(Course::class)->withPivot('nilai');
        } 
}
