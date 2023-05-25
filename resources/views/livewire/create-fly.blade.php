<div>
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"><h3>Dropdown Option: Dynamic "On-the-fly"</h3></div>
                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif
                            <div class="card-body" >
                                      
                                            <form wire:submit.prevent="addProduct">
                                                <div class="form-group col-md-12 ">
                                                 
                                                        <br/> 
                                                        <label for="" class="control-label"> Product Name</label>
                                                    <input type="text" wire:model="product_name" class="form-control col-md-6" placeholder="Enter Product name">                            
                                                    @error('name') <p class="text-danger">{{$message}}</p> @enderror

                                                        <label for="" class="control-label mt-2">Categories</label>
                                                    <div class="form-group col-md-12">
                                                        <div class="form-group col-md-6 ">
                                                            <select name="" id="" class="form-control" wire:model="category_id">
                                                                <option value="" >--SELECT CATEGORY--</option>
                                                                    @foreach ($categories as $category)
                                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                                    @endforeach                                                                
                                                            </select>
                                                            @error('category_id') <p class="text-danger">{{$message}}</p> @enderror
                                                        </div>
                                                        <div class="form-group col-md-4" style="float:right;">
                                                            <a href="" wire:click.prevent="$emit('openModel')" class="btn btn-outline-info">Add New Category</a>
                                                        </div>
                                                    </div>


                                                    <button type="submit"  class="btn btn-primary mt-2" >Add Product</button>
                                                </div>
                                               
                                               
                                            </form>                                            
                            @livewire('category-create')
                            </div>
                           

                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


