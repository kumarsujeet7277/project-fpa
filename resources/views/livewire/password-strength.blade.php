<div>
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header"><h3>Password Strength Indicator</h3></div>
                            <div class="card-body" >
                                      
                                            <form >
                                                <div class="form-group col-md-12" >
                                                 
                                                        <br/>
                                                <div class="form-group col-md-12 d-flex" >
                                                    <div class="form-group col-md-8">
                                                            <label for="" class="control-label"> Password</label>
                                                      
                                                            <input type="password" id="id_password"  wire:model="password"  class="form-control col-md-8" placeholder="Enter your password">                            
                                                            <br/>
                                                            <span class="text-sm"> 
                                                                <span class="font-semibold">Password strength:</span> {{ $strengthLevels[$strengthScore] ?? 'Weak' }}
                                                            </span>
                                                    
                                                        <progress value="{{ $strengthScore }}" max="4" class="w-full"></progress> 
                                                           
                                                    
                                                    </div>
                                                </div>
                                                 
                                                    
                                                </div>
                                            </form>                                        
                                    </div>      

                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
