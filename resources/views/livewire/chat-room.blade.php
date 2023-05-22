<div>
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"><h3>Chat Room</h3></div>
                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif
                            <div class="card-body" wire:poll>
                                    @foreach ($allMessage as $message)
                                        [{{ $message->created_at->format(' H:i ')}}] <b>{{$message->user->name}} : </b> {{$message->message}}<br/>
                                    @endforeach

                                      
                                            <form  wire:submit.prevent="sendMsg">
                                                <div class="form-group col-md-12 ">
                                                 
                                                        <br/> <br/> <br/>
                                                    <input type="text" wire:model.defer="message" class="form-control col-md-6" placeholder="New Message...">                            
                                                    <button type="submit"  class="btn btn-primary" style="margin-left:40%; margin-top:10px;">Send Message</button>
                                                </div>
                                               
                                               
                                            </form>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
