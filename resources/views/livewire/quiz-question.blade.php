<div>



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header " style="text-size; 50px;" ><b>Quiz Metro Fashion</b></div>


                        <form wire:submit.prevent="submit">
                            @foreach ($questions as $question)
                    
                                    <div class="card-body  ">
                                            <div class="card">
                                                <div class="card-header">{{ $question->question }}</div>
                            
                                                <div class="card-body">
                                                    @foreach ($question->options as $option)
                                                        <div class="form-check">
                                                            <input  type="radio" wire:model="questions.{{$question->id}}" name="questions.{{$question->id}}"  value="{{ $option->id }}" >
                                                                {{ $option->option }}
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                    </div>
                            @endforeach
                            
                            <button type="submit"  class="btn btn-primary">Submit</button>
                        </form>
        
                </div>
            </div>
        </div>
    </div>

</div>
