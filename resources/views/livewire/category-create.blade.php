
    
<div @if(!$showModal)  hidden @endif>
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"><h3>Add Category</h3></div>
                            <div class="card-body" >
                                      
                                            <form  wire:submit.prevent="save">
                                                <div class="form-group col-md-12 ">
                                                 
                                                        <br/> 
                                                        <label for="" class="control-label"> Category Name</label>
                                                    <input type="text" wire:model="name"  class="form-control col-md-6" placeholder="Enter Product name">                            
                                                    @error('name') <p class="text-danger">{{$message}}</p> @enderror
                                                        <br/>
                                                        <label for="" class="control-label"> Category slug</label>
                                                    <input type="text" wire:model="slug"  class="form-control col-md-6" placeholder="Enter Product slug">                            
                                                    @error('slug') <p class="text-danger">{{$message}}</p> @enderror

                                                    <button type="submit"  class="btn btn-primary mt-2" >Add Category</button>
                                                    <button wire:click.prevent="closeModal"  class="btn btn-primary mt-2" >Close</button>
                                                </div>
                                               
                                               
                                            </form>                                            
                            </div>
                           

                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


