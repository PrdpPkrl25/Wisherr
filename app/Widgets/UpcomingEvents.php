<?php

namespace App\Widgets;

use App\Model\Event;
use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\Auth;

class UpcomingEvents extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [
        'count'=>6,
    ];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $events=Event::where('user_id','=',Auth::id())->orderby('event_date','asc')->take($this->config['count'])->get();

        return view('widgets.upcoming_events', [
            'config' => $this->config,
            'events'=>$events,
        ]);
    }
}
