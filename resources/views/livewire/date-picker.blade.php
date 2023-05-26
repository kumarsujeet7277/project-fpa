<div>
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header"><h3>Date Picker Pikaday</h3></div>
                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif
                            <div class="card-body" >
                                      
                                            <form wire:submit.prevent="saveProject">
                                                <div class="form-group col-md-12">
                                                 
                                                        <br/> 
                                                        <label for="" class="control-label"> Project Name</label>
                                                    <input type="text" wire:model.defer="project_name"  class="form-control col-md-8"  placeholder="Enter Project name">                            
                                                    @error('project_name') <p class="text-danger">{{$message}}</p> @enderror

                                                    <br/> 
                                                        <label for="" class="control-label"> Project Due_Date</label>
                                                    <input type="date" id="pickday"  wire:model="due_date" class="form-control col-md-8" placeholder="MM-DD-YYYY">                            
                                                    @error('due_date') <p class="text-danger">{{$message}}</p> @enderror

                                           
                                                    <button type="submit"  class="btn btn-primary mt-2" >Save Project</button>
                                                </div>
                                               
                                               
                                            </form>                                        
                                    </div>      

                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@section('script')

    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
   
        <script>
            new Pikaday({
                field:document.getElementById('pickday'),
                'format': 'MM/DD/YYYY'   
            })
           
        </script>
      
@endsection


