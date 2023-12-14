<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    use HasFactory;
    public function section()
    {
        return $this->belongsToMany(section::class, 'photos_sections',
            'photos_id', 'sections_id');
    }
}
