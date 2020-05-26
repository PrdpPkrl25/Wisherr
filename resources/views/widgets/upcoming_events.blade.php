@foreach($events as $event)

    <div class="col-md-6">
        <div class="card bg-info" onclick="location.href='{{route('events.show',$event->id)}}';" style="cursor: pointer;margin-top: 10px" >
            <div class="card-body">
                <h2 class="card-title">{{$event->event_name}}</h2>
             </div>
        </div>
    </div>
@endforeach
