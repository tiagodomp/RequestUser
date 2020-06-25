<?php

namespace App\Listeners;

use App\Events\CheckReqresEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CheckReqresListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CheckReqresEvent  $event
     * @return void
     */
    public function handle(CheckReqresEvent $event)
    {
        //
    }
}
