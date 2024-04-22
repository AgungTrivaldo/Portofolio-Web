<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillCard extends Model
{
    use HasFactory;

    protected $table = "skill_cards";
    protected $fillable = ['title', 'description','image'];
}
