<div>
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"><h3>Comments Form</h3></div>
                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif
                            <div class="card-body" wire:poll>
                                <h2>{{$post->title}}</h2>

                                <p>{{$post->description}}</p>
                                    <div>
                                     
                                        <h4 style="color:green;">Total: </b><i>{{ $post->AllCommentsCount()}} Comments</i></b></h4>
                                        <h3>Comments</h3>
                                            @foreach ($comments as $comment)
                                                <div style="margin-bottom: 10px">
                                                    <b>{{$comment->user->name}} <span style="color:blue;">{{ $comment->created_at->diffForHumans() }}</span></b>
                                                    <br/>
                                                        {{$comment->comment}}
                                                    <br/>
                                                    <a  wire:click.prevent="addreplycmt({{ $comment->id }})" href="#" style="text-decoration: underline; font-size: 12px">Reply
                                                        to this comment</a>

                                                            <!-- @if ($addreply == true && $comment->id === $replyCmt )
                                                            
                                                                    
                                                              
                                                                     
                                                                    <form wire:submit.prevent="reply({{ $comment->id }})">
                                                                        <div class="form-group">
                                                                            reply text*:
                                                                            <br/>
                                                                         
                                                                            <textarea wire:model.defer="comment"   placeholder="reply here..." rows="3" class="form-control" maxlength="500"></textarea>
                                                                        </div>
                                                                        <button type="submit" class="btn btn-primary">Reply</button>
                                                                    </form>
                                                            @else
                                            
                                                            @endif -->

                                                        @if ($comment->replies->count() ?? '')
                                                            <a href="" wire:click.prevent="view({{ $comment->id }})">{{ $comment->replies->count() }} : Replies<b> View </b></a>
                                                            @if ($view == true &&  $viewId === $comment->id )
                                                                @foreach ($comment->replies as $reply)
                                                                
                                                                        <div style="margin-left: 50px">
                                                                            <b>{{$reply->user->name}} <span style="color:blue;">{{ $reply->created_at->diffForHumans() }}</span></b>
                                                                            <br/>
                                                                        
                                                                            {{$reply->comment}}
                                                                            <br/>
                                                                        </div>
                                                            
                                                                @endforeach
                                                            @endif                                                                 
                                                        @endif
                                                </div>
                                            @endforeach
                                        
                                        <hr/>
                                    @if ($replyCmt)

                                        <h3>Reply to this comment</h3>
                                            <form wire:submit.prevent="reply({{ $replyCmt }})">
                                                <div class="form-group">
                                                    reply text*:
                                                    <br/>
                                                                  
                                                    <textarea wire:model.defer="comment"   placeholder="reply here..." rows="3" class="form-control" maxlength="500"></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Reply</button>
                                            </form>
                                    @else

                                        <h3>Add a comment</h3>
                                            <form wire:submit.prevent="addComment">
                                                <div class="form-group">
                                                    Comment text*:
                                                    <br/>
                                                    <textarea wire:model.defer="comment" placeholder="comment here..." rows="3" class="form-control" maxlength="500"></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Post Comment</button>
                                            </form>
                                        
                                    @endif
                                        <!-- <h3>Add a comment</h3>
                                            <form wire:submit.prevent="addComment">
                                                <div class="form-group">
                                                    Comment text*:
                                                    <br/>
                                                    <textarea wire:model.defer="comment" placeholder="comment here..." rows="3" class="form-control" maxlength="500"></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Post Comment</button>
                                            </form> -->
                                    </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


<script>

</script>