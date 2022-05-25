<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Laravel\Scout\Searchable;

class Teacher extends Model
{
    use HasFactory, Sluggable, Searchable;

    protected $fillable = [
        'first_name', 'last_name', 'email', 'gender', 'core_skills',
        'qualification', 'phone_number', 'location', 'contact_address', 'slug', 'image_path'
    ];

    public function searchableAs()
    {
        return 'teachers_data';
    }

    public function sluggable(): array {
         
        return [
            'slug' => [
                'source' => 'first_name'
            ]
        ];

    }

    public $table = 'teachers_data';
    
}
