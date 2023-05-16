



<div>
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h3>Muiti-Form</h3></div>
                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif



                         

                            <div class="card-body">
                                <div >
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link active" wire:click.prevent="nextStep(0)">
                                                From
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link disabled" wire:click.prevent="nextStep(1)">
                                                To
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link disabled" wire:click.prevent="nextStep(2)">
                                                Passengers
                                            </a>
                                        </li>
                                    </ul>
                                    <form class="mt-2" wire:submit.prevent="nextStep">
                                        
                                        @if ($step == 0)                                         
                                            <div class="form-group">
                                                <label for="from-country">From Country</label>
                                                <select id="from-country" class="form-control " wire:model="from_country">
                                                    <option value="">--Choose Country--</option>
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                    @endforeach
                                                    @error('from_country') <p class="text-danger">{{$message}}</p> @enderror
                                                </select>
                                            </div>
                                
                                            <div class="form-group">
                                                <label for="from-city">From City</label>
                                                
                                                <select id="from-city" class="form-control " wire:model="from_city">
                                           
                                                @if ($cities->count() == 0)
                                                    <option value="">-- choose country first --</option>
                                                @endif
                                                
                                                @foreach ($cities as $city)
                                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                                @endforeach
                                                    @error('from_city') <p class="text-danger">{{$message}}</p> @enderror
                                                </select>
                                            </div>

                                        @endif

                                        @if ($step == 1)
                                            <div class="form-group">
                                                <label for="to-country">To Country</label>
                                                <select id="to-country" class="form-control " wire:model="to_country">
                                                <option value="">--Choose Country--</option>
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                    @endforeach
                                                    @error('from_country') <p class="text-danger">{{$message}}</p> @enderror
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="to-city">To City</label>
                                                <select id="to-city" class="form-control " wire:model="to_city">
                                                @if ($cities->count() == 0)
                                                    <option value="">-- choose country first --</option>
                                                @endif
                                                
                                                @foreach ($cities as $city)
                                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                                @endforeach
                                                    @error('from_city') <p class="text-danger">{{$message}}</p> @enderror
                                                </select>
                                            </div>
                                            
                                        @endif

                                        @if ($step == 2)
                                            <div class="form-group">
                                                <label for="adults" class="col-md-6 control-label">Adults</label>
                                                <div class="col-md-4">
                                                <input type="number" placeholder="How many Adults" class="form-control input-md" wire:model="adults">
                                                    @error('adults') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="children" class="col-md-6 control-label">Children</label>
                                                <div class="col-md-4">
                                                <input type="number" placeholder="How many children" class="form-control input-md" wire:model="children">
                                                    @error('children') <p class="text-danger">{{$message}}</p> @enderror
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="children" class="col-md-6 control-label">Total Value :Rs.   </label>
                                                <div class="col-md-4" >
                                                    <!-- <button type="submit" wire:click="price" class="btn btn-primary">Calculate Price</button> -->
                                                    {{ $price }}
                                                </div>
                                            </div>
                                            
                                        @endif
                                        
                                        @if ($step <= 2)
                                            <div class="form-group">
                                            <label for="" class="col-md-6 control-label"></label>
                                                <div class="col-md-4">
                                                <button type="submit" class="btn btn-primary">Next</button>
                                                </div>
                                            </div>
                                        @endif

                                        
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>