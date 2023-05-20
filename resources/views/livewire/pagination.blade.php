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

                        {{ $countries->links() }}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


