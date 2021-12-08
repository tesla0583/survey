<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumSurveysAnswer extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function forum_survey()
    {
        return $this->belongsTo(ForumSurvey::class, 'survey_id', 'id');
    }

    public function forum_user_survey_answer()
    {
        return $this->hasMany(ForumUserSurveysAnswer::class, 'answer_id', 'id');
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
