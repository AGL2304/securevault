<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'file_id',
        'action', // upload, modification, suppression, téléchargement
        'ip_address',
    ];

    // Relation avec l'utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation avec le fichier
    public function file()
    {
        return $this->belongsTo(File::class);
    }
}
