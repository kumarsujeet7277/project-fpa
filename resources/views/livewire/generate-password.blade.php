<div>
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header"><h3>Generate Password</h3></div>
                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif
                            <div class="card-body" >
                                      
                                            <form >
                                                <div class="form-group col-md-12" >
                                                 
                                                        <br/>
                                                <div class="form-group col-md-12 d-flex" >
                                                    <div class="form-group col-md-8">
                                                            <label for="" class="control-label"> Password</label>
                                                        <div class="d-flex">
                                                            <input type="{{ $visible ? 'text' : 'password' }}" id="id_password"  wire:model.defer="password"  class="form-control col-md-8">                            
                                                            <i class="far fa-eye" id="togglePassword" style="cursor: pointer; margin-left:-30px; margin-block: auto;"></i>
                                                            @error('project_name') <p class="text-danger">{{$message}}</p> @enderror
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                        <button  class="btn btn-dark m-4" wire:click.prevent="generatePassword">GENERATE</button>
                                                    </div>
                                                </div>
                                                 
                                                    <div class="form-group col-md-8">
                                                        <label for="" class="control-label"> Confirm Password</label>
                                                        <input type="password" wire:model.defer="password_confirmation"  class="form-control col-md-8">                            
                                                        @error('project_name') <p class="text-danger">{{$message}}</p> @enderror
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
@section('script')
<script>
    const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#id_password');

        togglePassword.addEventListener('click', function (e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });
</script>


@endsection