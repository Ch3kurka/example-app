<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class section extends Model
{
    use HasFactory;
    public function section()
    {

        return $this->belongsToMany(photo::class, 'photos_sections',
            'sections_id','photos_id' );
    }
}
