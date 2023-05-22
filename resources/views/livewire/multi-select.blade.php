<div>
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                            
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">
                                    Product name
                                </label>
                                <div class="col-md-6">
                                    <input  type="text" wire:model="product_name" class="form-control "/>
                                    @error('product_name') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="categories" class="col-md-4 col-form-label text-md-right">
                                    Categories
                                </label>
                                <div class="col-md-6">

                                        <div wire:ignore>
                                            <select id="tags" wire:model="tags" class="form-control" multiple>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @error('tags[]') <p class="text-danger">{{$message}}</p> @enderror
                                            @endforeach
                                            </select>
                                        </div>
                                    
                                   
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button wire:click="submit" type="submit" class="btn btn-primary">
                                            Add Product
                                    </button>
                                </div>
                            </div>
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


@push('scripts')
    <script>
        $(document).ready(function () {
            $('#tags').select2();
            $('#tags').on('change', function (e) {
                let data = $(this).val();
                 @this.set('category', data);
            });
            window.livewire.on('productStore', () => {
                $('#tags').select2();
            });
        });  
    </script>
@endpush