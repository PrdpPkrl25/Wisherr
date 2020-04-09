@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create message for '{{$event->event_name}}' event.</div>

                    <div class="card-body">

                        <form method="post" action="{{route('messages.store')}}" id="createMessage">
                            @csrf
                             <div class="card">
                                <div class="card-header">Enter Receiver Detail:</div>

                                <div class="card-body">

                                    <div class="form-group row">
                                        <label for="receiver_name" class="col-md-4 col-form-label text-md-right">{{__('Receiver Name')}}</label>

                                        <div class="col-md-6">
                                            <input type="text" id="receiver_name" class="form-group form-control" name="name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="receiver_email" class="col-md-4 col-form-label text-md-right">{{__('Receiver Email')}}</label>

                                        <div class="col-md-6">
                                            <input type="email" id="receiver_email" class="form-group form-control" name="email">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="receiver_phone" class="col-md-4 col-form-label text-md-right">{{__('Receiver Phone')}}</label>

                                        <div class="col-md-6">
                                            <input type="text" id="receiver_phone" class="form-group form-control" name="phone">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="receiver_detail" class="col-md-4 col-form-label text-md-right">{{__('Or, Select Receiver From Your Existing Contact:')}}</label>

                                        <div class="col-md-6">
                                            <select id="receiver_detail" name="contact_id" class="form-control">
                                                <option value="">Choose Contact</option>
                                                @foreach($contacts as $contact)
                                                    <option value="{{$contact->id}}">{{$contact->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="card" style="margin-top: 10px" >
                                <div class="card-header">Enter Message Detail:</div>

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="message_content" class="col-md-4 col-form-label text-md-right">{{__('Message Content')}}</label>

                                        <div class="col-md-6">
                                            <textarea name="message_content" class="form-group form-control" id="message_content"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="template" class="col-md-4 col-form-label text-md-right">{{__('Or, Select Message Content From Available Template:')}}</label>

                                        <div class="col-md-6">
                                            <select id="template" name="template" class="form-control" >
                                                <option value="">Choose Template</option>
                                                @foreach($templates as $template)
                                                    <option value="{{$template->id}}">{{$template->template_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="datetimepicker" class="col-md-4 col-form-label text-md-right">{{__('Message Time:')}}</label>

                                        <div class="col-md-6">
                                            <input type='datetime-local'  class=" form-control" name="message_time" id='datetimepicker'  />

                                        </div>
                                    </div>



                                </div>
                            </div>

                            <div class="form-group row mb-0" style="margin-top: 20px">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create') }}
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        jQuery(document).ready(function(){
            jQuery('#receiver_detail').change(function(e){
                e.preventDefault();
                jQuery.ajax({
                    url: "{{ url('/ajax/getcontact') }}",
                    method: 'get',
                    data: {
                        contact_id: jQuery('#receiver_detail').val(),
                    },
                    success: function(result){
                        $(function () {
                            console.log(result);
                        });
                    }});
            });
            jQuery('#template').change(function(e){
                e.preventDefault();
                jQuery.ajax({
                    url: "{{ url('/ajax/gettemplate') }}",
                    method: 'get',
                    data: {
                        template_id: jQuery('#template').val(),
                    },
                    success: function(result){
                        $(function () {
                            $("#message_content").val(result);
                        });
                    }});
            });
        });


    </script>
@endsection
