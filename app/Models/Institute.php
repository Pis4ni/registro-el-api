<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student; 

class Institute extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'id',
        'code',
    ];
    public function students()
    {
        return $this->hasMany(Student::class); 
    }
}
