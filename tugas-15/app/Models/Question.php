<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'profile_id', 'title', 'content', 'created_at', 'updated_at', 'answer_id'
    ];
    public function profile(){
        return $this->belongsTo(Profile::class);
    }
}
