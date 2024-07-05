<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    // Proprietà del modello
    protected $fillable = [
        'name', // Nome
        'surname', // Cognome
        'date_of_birth', // Data di nascita
        'class', // Classe
        'section', // Sezione
        'institute_id' // ID istituto
    ];

    protected $hidden = [
        'created_at', // Creato il
        'updated_at', // Aggiornato il
        'deleted_at' // Eliminato il
    ];

    public function Institute()
    {
        return $this->belongsTo(Institute::class);
    }

}