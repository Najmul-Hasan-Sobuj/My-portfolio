<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'clients_statement', 'name', 'country', 'icon', 'number', 'icon_name']; // backend testimonials page 
}
