<?php

namespace App\Listeners;

use App\User;
use Illuminate\Support\Facades\Mail;
use App\MAil\ProjectCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProjectCreatedListener
{

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $user = User::find($event->project->user_id);
        Mail::to($user)->send(new ProjectCreated());
    }
}
