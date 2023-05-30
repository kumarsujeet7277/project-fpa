<div>
<!-- File Upload with Filepond -->
<main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header"><h3>File Upload with Filepond</h3></div>
                            <div class="card-body" >
                                            <form wire:submit.prevent="postSubmited" enctype="multipart/form-data">
                                                <div class="form-group col-md-12" >
                                                 
                                                        <br/>
                                                <div class="form-group col-md-12 d-flex" >
                                                    <div class="form-group col-md-12">
                                                     
                                                      
                                                            <input type="text"  wire:model.defer="title" name="title"  class="form-control col-md-8" placeholder="Enter title">                            
                                                            @error('title')
                                                                <div role="alert" class="text-danger">{{$message}}</div>
                                                            @enderror
                                                            <br/>

                                                               
                                                            <div  wire:ignore>
                                                                <input type="file" wire:model.defer="image" name="image" id="image" class="filepond">
                                                                @error('image')
                                                                    <div role="alert" class="text-danger">{{$message}}</div>
                                                                @enderror
                                                                @if ($image)
                                                                    <img src="{{$image->temporaryUrl()}}" alt="" width="50">    
                                                                @endif
                                                            </div>
                            
                                                            <button type="submit" class="btn btn-dark m-4">Save Post</button>
                                                    
                                                    </div>
                                                </div>
                                                 
                                                    
                                                </div>
                                            </form>                                        
                                    </div>    
                                    
                                    <div class="container" style="margin-top:20px;">
                                <div class="row">
                                    <div class="col-md-12">

                                <h3>Latest Post</h3>

                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>image</th>
                                    
                                    </tr>
                                    </thead>
                                
                                    <tbody>

                            @foreach ($posts as $post)
                             
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td><img src="storage/images/{{$post->image}}" width="50" alt=""></td>
                                    
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
<!--End File Upload with Filepond -->
</div>

@section('script')
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script>
        const inputElement = document.querySelector('input[type="file"]');
        const pond = FilePond.create( inputElement );
        FilePond.setOptions({
                    server: {
                        url: '/file-upload',
                        process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                            @this.upload('image', file, load, error, progress)
                        },
                    }
                });
   
    </script>
@endsection