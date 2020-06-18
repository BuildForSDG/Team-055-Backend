<?php

namespace App\Services\MentalConditionPoint;

use App\Enum\MentalIllnessDescription;
use App\Models\Answer;
use App\Models\MentalCondition;

class MentalConditionPointService
{
    protected $mentalCondition;
    protected $answer;

    public function __construct(MentalCondition $mentalCondition, Answer $answer)
    {
        $this->mentalCondition = $mentalCondition;
        $this->answer = $answer;
    }

    public function run()
    {
        $point = $this->answer->answer_logs->sum('mental_condition_question_option.mark');
        switch ($point) {
            case $point < 14 :
                $description = MentalIllnessDescription::$levels['low_level'];
                $level = 'Low Level';
                break;
            case $point >= 15 && $point <=23 :
                $description = MentalIllnessDescription::$levels['mid_level'];
                $level = 'Medium Level';
                break;
            default :
                $description = MentalIllnessDescription::$levels['high_level'];
                $level = 'High Level';
                break;
        }
        $this->answer->scored_point = $point;
        $this->answer->possible_ailment = $description;
        $this->answer->level = $level;
        $this->answer->save();
        return $this->answer;
    }
}
