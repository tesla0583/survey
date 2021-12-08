<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumUserSurveysAnswer extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function forum_survey()
    {
        return $this->belongsTo(ForumSurvey::class, 'survey_id', 'id');
    }

    public function forum_survey_answers()
    {
        return $this->belongsTo(ForumSurveysAnswer::class, 'answer_id', 'id');
    }

    public function creator_user()
    {
        return $this->belongsTo(User::class, 'creator_id', 'id');
    }

    public function updater_user()
    {
        return $this->belongsTo(User::class, 'updater_id', 'id');
    }
}
