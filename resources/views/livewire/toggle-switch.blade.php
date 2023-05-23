<div>
<div class="container" style="margin-top:20px;">
    <div class="row">
        <div class="col-md-12">

    <h3>Toggle Switch for Database Field</h3>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Active</th>
        </tr>
        </thead>
    
        <tbody>
            @foreach ($users as $user)
       
   
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <div class="form-check form-switch">
                        <input wire:click.prevent="activeUser({{ $user->id }})" wire:model="active"  class="form-check-input" role="switch" type="checkbox"  @if ($user->active == true) checked  @endif />
                    </div>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
        </div>
    </div>
</div>
</div>
