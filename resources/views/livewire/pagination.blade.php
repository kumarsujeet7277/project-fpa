<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Countries Name</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($countries as $country)
                            <tr>
                                <th scope="row">{{ $loop->iteration  }}</th>
                                <td>{{ $country->name }}</td>
                            </tr>
                        @endforeach
                          
                    
                    </tbody>
                </table>
                <a wire:click.prevent="load" href="" class="btn btn-primary">Load more...</a>
                    
            </div>
        </div>
    </div>
</div>


