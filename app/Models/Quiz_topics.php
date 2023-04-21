<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Quiz_topics extends Model
{
    use Searchable;
    use HasFactory;
    protected $fillable = [
        'subject',
        'topics'
    ];
    public function toSearchableArray(){
        return[
            'subject'=>$this->subject,
        'topics'=>$this->topics
        ];
    }
    public function category(){
        return $this->belongsTo(Quiz_category::class, 'category_id');
    }
    public function quest(){
        return $this->hasMany(Question::class, 'subjectId');
    }
}
