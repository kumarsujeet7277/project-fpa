<div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"><h3> Posts</h3></div>
                    
                        <div class="card-body">
                            
                                @foreach ($posts as $post)
                        
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-2">
                                            <div class="text-center">
                                                <a wire:click.prevent="vote(1, {{$post->id}})" href="#" class="btn btn-primary"><i class="fa fa-2x fa-sort-asc" aria-hidden="true">Like</i></a>
                                            
                                                    
                                             
                                                    <h3 class="mb-0 mt-0">{{  $post->votes->vote ?? $vote = 0}}</h3>
                                         
                                               
                                                <a wire:click.prevent="vote(-1, {{$post->id}})" href="#" class="btn btn-danger"><i class="fa  fa-sort-desc" aria-hidden="true">unlike</i></a>
                                            </div>

                                        </div>
                                        <div class="col-md-10">
                                            <h3>{{ $post->title }}</h3>
                                            <p class="mb-1">{{ $post->description }}</p>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                    
                                @endforeach
                            
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
