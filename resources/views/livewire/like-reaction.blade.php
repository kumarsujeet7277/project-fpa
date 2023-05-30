<div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"><h3> Like-Reaction-Bookmark</h3></div>
                        <div style="margin-left:80%;">
                            <i><b> has {{$bookmarkCount}} Bookmarks</b></i>
                        </div>
                        <div class="card-body">
                            
                                
                        
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-10">
                                            <h3>{{ $post->title }}</h3>
                                            <p class="mb-1">{{ $post->description }}</p>
                                            <div class="d-flex">
                                                <div class="col-md-2">
                                                    <a href="" wire:click.prevent="$emit('likePost')"  class="btn btn-primary"><i class="fa-solid fa-thumbs-up"></i> {{$like ? 'Unlike':'Like'}} {{$likeCount}}</a>
                                                </div>
                                                <div class="col-md-3">
                                                    <a href="" wire:click.prevent="$emit('bookmarkedPost')" class="btn btn-primary"><i class="fa-regular fa-bookmark"></i> {{$bookmark ? 'Bookmarked':'Bookmark'}} </a>
                                                </div>
                                                <div class="col-md-1 d-flex">
                                                    <a href="" wire:click.prevent="$emit('btn')" @if ($btn)
                                                        class="btn btn-info"
                                                    @else
                                                        class="btn"
                                                    @endif ><i class="fa-solid fa-heart" style="color:red;"></i></a>
                                                    <a href="" wire:click.prevent="$emit('btn2')" @if ($btn2)
                                                        class="btn btn-info"
                                                    @else
                                                        class="btn"
                                                    @endif  class="btn "><i class="fa-solid fa-trophy" style="color:gold;"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                    
                            
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
