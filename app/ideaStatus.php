<?php

namespace App;

enum ideaStatus: string
{
    case PENDING = "pending";
    case IN_PROGRESS = "in_progress";
    case COMPLETE = "complete";

public function labeL(): string
{
    return match($this){
        self::PENDING =>'Pending',
        self::IN_PROGRESS =>'In Progress',
        self::COMPLETE =>'Completed',
    };

}
}