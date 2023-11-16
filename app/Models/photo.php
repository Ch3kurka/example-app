<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    use HasFactory;
    public function photo()
    {
        return $this->belongsToMany(Photo::class, 'photos_sections',
            'photos_id', 'sections_id');
    }
}
