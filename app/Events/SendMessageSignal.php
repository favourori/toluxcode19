<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class SendMessageSignal implements ShouldBroadCast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $message_stream;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($message_stream)
    {
        $this->message_stream = $message_stream;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return ['message-'.$this->message_stream->message_id];
    }
}
