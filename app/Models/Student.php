<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'stu_id',
        'name',
        'image_id',
        'age',
        'status',
    ];
    public function images(){
        return $this->hasOne(Image::class, 'id', 'image_id');
    }

}
