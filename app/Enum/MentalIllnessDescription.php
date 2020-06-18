<?php

namespace App\Enum;

class MentalIllnessDescription
{
    public static $levels = [
        'low_level' => 'You may not necessarily need medical attention but can be advised to talk to someone close
                        and look up more about the mental illness',
        'mid_level' => 'You may be currently experiencing symptoms of moderate illness. The results doesn’t mean 
                        that the user is sick but this symptoms could be causing difficulties managing relationships 
                        and even everyday task',
        'high_level' => 'You need urgent medical attention and could be Suicidal at this point'
    ];
}
