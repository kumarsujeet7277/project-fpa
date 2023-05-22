<div>
<main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"><h3>Star Rating</h3></div>

                            <div class="card-body">
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                      
                                 
                                    <h2>{{ $post->title }}</h2>
                                    <p>{{ $post->description }}</p>
                                
                                  
                                        
                          
                                        <div class="mt-4 mb-4">
                                            Current rating: <b>{{ $avgRating}}/ 5 {{$count}} votes</b>
                                        </div>
                               
                                    <h3>Rate the post</h3>

                                    <div>
                                    <a wire:click.prevent="rating(1)" wire:model="rating" href="#"><img src="http://demo-star-rating.livewirekit.com/img/star-inactive.png"
                                                                            width="30"/></a>
                                    <a wire:click.prevent="rating(2)" wire:model="rating" href="#"><img src="http://demo-star-rating.livewirekit.com/img/star-inactive.png"
                                                                            width="30"/></a>
                                    <a wire:click.prevent="rating(3)" wire:model="rating" href="#"><img src="http://demo-star-rating.livewirekit.com/img/star-inactive.png"
                                                                            width="30"/></a>
                                    <a wire:click.prevent="rating(4)" wire:model="rating" href="#"><img src="http://demo-star-rating.livewirekit.com/img/star-inactive.png"
                                                                            width="30"/></a>
                                    <a wire:click.prevent="rating(5)" wire:model="rating" href="#"><img src="http://demo-star-rating.livewirekit.com/img/star-inactive.png"
                                                                            width="30"/></a>
                               
                        
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
