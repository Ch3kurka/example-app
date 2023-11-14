<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    protected $fillable = [
    'first_text',
    'second_text',
    'file_path',
];
    use HasFactory;
}
