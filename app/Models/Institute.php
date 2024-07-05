<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student; // Importa il modello Studente

class Institute extends Model
{
    use HasFactory;

    // Proprietà del modello
    protected $fillable = [
        'name', // Nome istituto
        'id' // Codice identificativo univoco (o ID)
    ];

    // Relazione con il modello Studente
    public function students()
    {
        return $this->hasMany(Student::class); // Relazione uno-a-molti
    }
}
