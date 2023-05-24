<div>
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"><h3>Posts: Sweet alert</h3></div>
                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif
                            <div class="card-body" >
                                      
                                            <form  wire:submit.prevent="postCreated">
                                                <div class="form-group col-md-12 ">
                                                 
                                                        <br/> <br/> <br/>
                                                    <input type="text" wire:model.defer="title" class="form-control col-md-6 mb-4" placeholder="Enter Post title.....">                            
                                                    @error('title') <p class="text-danger">{{$message}}</p> @enderror

                                                        
                                                    <div class="form-group col-md-12 " wire:ignore>
                                                        <textarea wire:model="description" id="description" class="form-control col-md-6 mt-5  " col="40" placeholder="Enter Post description..." ></textarea>  
                                                        @error('description') <p class="text-danger">{{$message}}</p> @enderror
                                                    </div>


                                                    <button type="submit"  class="btn btn-primary" style="margin-left:40%; margin-top:10px;">Add Post</button>
                                                </div>
                                               
                                               
                                            </form>                                            
                            </div>
                            <div class="container" style="margin-top:20px;">
                                <div class="row">
                                    <div class="col-md-12">

                                <h3>Latest Five Post</h3>

                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    
                                    </tr>
                                    </thead>
                                
                                    <tbody>

                            @foreach ($posts as $post)
                                    
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{!! $post->description !!}</td>
                                        <td>
                                            <a href="" wire:click.prevent="confrimDelete({{  $post->id  }})" onclick="" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>    
                            @endforeach
                                    
                                </tbody>
                            </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


@section('script')

    <script>
        ClassicEditor
            .create( document.querySelector( '#description' ) )
            .then(editor => {
            editor.model.document.on('change:data', () => {
                @this.set('description', editor.getData());
            })
        })
            .catch( error => {
                console.error( error );
            } );
    </script>


    
@endsection