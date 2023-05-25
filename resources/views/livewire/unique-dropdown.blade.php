<div>
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header"><h3>Dropdowns Set with Unique Values</h3></div>
                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif
                            <div class="card-body" >
                                      
                                            <form wire:submit.prevent="savePosition">
                                                <div class="form-group col-md-12">
                                                 
                                                        <br/> 
                                                        <label for="" class="control-label"> Tournament Name</label>
                                                    <input type="text" wire:model="name" class="form-control col-md-8" value="" placeholder="Enter Tournament name">                            
                                                    @error('name') <p class="text-danger">{{$message}}</p> @enderror


                                            @for ($position=1; $position <= $maxPosition; $position++)
                                                
                                                    <label for="" class="control-label mt-2">Place no. {{ $position }}</label>
                                                    <div class="form-group col-md-12">
                                                        <div class="form-group col-md-12">
                                                            <select name="" id="" class="form-control" wire:model="positions.{{$position}}">
                                                                <option value="">--choose country--</option>
                                                                    @foreach ($countries as $country)
                                                                        @if (!in_array($country->id, $positions) || isset($positions[$position]) && $positions[$position] ==  $country->id)
                                                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                                        @endif
                                                                    @endforeach                                                               
                                                            </select>
                                                            @error('country_id') <p class="text-danger">{{$message}}</p> @enderror
                                                        </div>
                                                    </div>
                                                <br/>   
                                            @endfor



                                                    <button type="submit"  class="btn btn-primary mt-2" >Save Positions</button>
                                                </div>
                                               
                                               
                                            </form>                                            
                            </div>
                            <hr/>
                        <h3 style="text-align:center; color:blue;">Latest Tournaments</h3>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Tournament</th>
                                    <th>Places</th>
                                </tr>
                                </thead>
                                <tbody>
                            @foreach ($tournaments as $tournament)  
                                    <tr>
                                        <td>{{ $tournament->name }}</td>
                                        @foreach ($tournament->countries as $country)
                                       
                                            <td>{{ $country->pivot->position }} . {{ $country->name }}</td>
                                        @endforeach
                                    </tr>
                            @endforeach
                                </tbody>
                            </table>

                           

                    </div>
                </div>
            </div>
        </div>
    </main>
</div>


