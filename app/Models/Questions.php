<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;
    protected $fillable = [
        'subject',
        'topic',
        'questions',
        'option_a',
        'option_b',
        'option_c',
        'option_d',
        'answer',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    protected $table = 'questions';
   
}
