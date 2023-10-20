<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    
    protected $fillable = [
        'artist_name',
        'description',
        'art_type',
        'media_link',
        'cover_img'
    ];
}