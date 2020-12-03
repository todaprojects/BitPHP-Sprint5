<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model {
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question_list',
        'score',
        'user_id',
    ];

    protected $casts = [
        'question_list' => 'array',
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
    
}
