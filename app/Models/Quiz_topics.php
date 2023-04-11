<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz_topics extends Model
{
    use HasFactory;
    protected $fillable = [
        'subject',
        'topics'
    ];
    public function category(){
        return $this->belongsTo(Quiz_category::class, 'category_id');
    }
    public function quest(){
        return $this->hasMany(Question::class, 'subjectId');
    }
}
