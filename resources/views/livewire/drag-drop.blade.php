<div>
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h3>Drag-Drop-Table</h3></div>
                            <div class="container" style="margin-top:20px;">
                                <div class="row">
                                    <div class="col-md-12">

                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>name</th>
                                        <th>email</th>
                                        <th>Action</th>
                                    
                                    </tr>
                                    </thead>
                                
                                    <tbody wire:sortable="updateOrder">

                           @foreach ($details as $key=>$detail)
                               
                         
                                    
                                    <tr wire:sortable.item=" {{ $detail->id }}" wire:key="detail-{{ $detail->id }}" wire:sortable.handle>
                                        <td>{{ $detail->id }}</td>
                                        <td>{{ $detail->name }}</td>
                                        <td>{{ $detail->email }}</td>
                                        <td>
                                            <a href="" class="btn btn-danger">Delete</a>
                                            <a href="" class="btn btn-primary">Edit</a>
                                        </td>
                                    </tr>    
                      
                            @endforeach        
                                </tbody>
                            </table>
                            {{$details->links()}}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
