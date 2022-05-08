<?php

namespace App\Policies;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Auth\Access\HandlesAuthorization;

class JobPolicy
{
    use HandlesAuthorization;

    public function deleteOrUpdate(Employer $employer, Job $job)
    {
        return $employer->id === $job->employer_id;
    }
}
