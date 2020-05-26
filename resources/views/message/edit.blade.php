@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit message for '{{$event->event_name}}' event.</div>

                    <div class="card-body">

                        <form method="post" action="{{route('messages.edit',$message->id)}}">
                            @csrf
                            <div class="card">
                                <div class="card-header">Edit Receiver Detail:</div>

                                <div class="card-body">

                                    <div class="form-group row">
                                        <label for="contact_detail" class="col-md-4 col-form-label text-md-right">{{__('Select Receiver From Your Existing Contact:')}}</label>

                                        <div class="col-md-6">
                                            <select id="contact_detail" name="contact_detail" class="form-control">
                                                <option value="">Choose Contact</option>
                                                @foreach($contacts as $contact)
                                                    <option value="{{$contact->id}}">{{$contact->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="receiver_name" class="col-md-4 col-form-label text-md-right">{{__('Receiver Name')}}</label>

                                        <div class="col-md-6">
                                            <input type="text" id="receiver_name" class="form-group form-control" name="name" value="{{$receiver->name}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="receiver_email" class="col-md-4 col-form-label text-md-right">{{__('Receiver Email')}}</label>

                                        <div class="col-md-6">
                                            <input type="email" id="receiver_email" class="form-group form-control" name="email" value="{{$receiver->email}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="receiver_phone" class="col-md-4 col-form-label text-md-right">{{__('Receiver Phone')}}</label>

                                        <div class="col-md-6">
                                            <input type="text" id="receiver_phone" class="form-group form-control" name="phone" value="{{$receiver->phone}}">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="card" style="margin-top: 10px" >
                                <div class="card-header">Edit Message Detail:</div>

                                <div class="card-body">

                                    <div class="form-group row">
                                        <label for="template" class="col-md-4 col-form-label text-md-right">{{__('Select Message Content From Available Template:')}}</label>

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
                                        <label for="message_content" class="col-md-4 col-form-label text-md-right">{{__('Message Content')}}</label>

                                        <div class="col-md-6">
                                            <textarea name="message_content" class="form-group form-control" id="message_content">{{$message->message_content}}</textarea>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="message_time" class="col-md-4 col-form-label text-md-right">{{__('Message Time:')}}</label>

                                        <div class="col-md-6">
                                            <input type='datetime-local'  class=" form-control" name="message_time" id='message_time' value="{{$message->message_time}}"  />

                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group row mb-0" style="margin-top: 20px">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery('#contact_detail').change(function(e){
                e.preventDefault();
                jQuery.ajax({
                    url: "{{ url('/ajax/getcontact') }}",
                    method: 'get',
                    data: {
                        contact_id: jQuery('#contact_detail').val(),
                    },
                    success: function(result){
                        $(function () {
                            $("#receiver_name").val(result.name);
                            $("#receiver_email").val(result.email);
                            $("#receiver_phone").val(result.phone);
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

