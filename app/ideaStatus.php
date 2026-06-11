<?php

namespace App;

enum ideaStatus: string
{
    case PENDING = "pending";
    case IN_PROGRESS = "in_progress";
    case COMPLETE = "complete";
}
