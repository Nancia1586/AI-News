<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table = 'info';

    /**
     * @var array $fillable
     */
protected $guard=['updated_at','created_at'];
    protected $fillable = [
        'id',
        'date',
        'titre',
        'resume',
        'contenu',
        'image',
        'auteurid'
    ];
    use HasFactory;
}
