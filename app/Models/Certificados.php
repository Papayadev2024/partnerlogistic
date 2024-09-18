<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificados extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'botontext1', 'link1', 'url_image', 'name_image', 'url_archive', 'name_archive', 'status', 'visible'];
    
}
