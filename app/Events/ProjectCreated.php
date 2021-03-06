<?php

namespace App\Events;

use App\Project;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ProjectCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    
    /**
     * new created project
     *
     * @var object
     */
    public $project;
    
    
    
    /**
     * Create a new event instance.
     *
     * @param object $project
     * @return void
     */
    public function __construct(Project $project)
    {
        $this->project = $project;
    }
}
