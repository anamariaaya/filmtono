<div>
    <div>
        @if (session('info'))
            <div class="alert alert-success">
                <strong>{{session('info')}}</strong>
            </div>
        @endif
    
        <div class="card">   
            <div class="card-header">
                <input wire:model="search" class="form-control" placeholder="Enter text to search">
            </div>
    
            @if ($artists->count())
                <div class=card-body>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Status</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($artists as $artist)
                                <tr>
                                    <td>{{$artist->id}}</td>
                                    <td>{{$artist->name}}</td>
                                    <td>{{$artist->email}}</td>
                                    <td>
                                        @if ($artist->status)
                                            Active
                                        @else
                                            Inactive
                                        @endif
                                    </td>
                                    {{-- <td width="10px">
                                        <a class="btn btn-primary btn-sm" href="{{route('admin.artists.edit', $artist)}}">Edit</a>
                                    </td> --}}
                                    <td width="10px">
                                        <form action="{{route('admin.artists.destroy', $artist)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>                            
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
    
                <div class="card-footer">
                    {{$artists->links()}}
                </div>
            @else
                <div class="card-body">
                    <strong>No information was found that meets the given conditions</strong>
                </div>
            @endif
        </div>
    </div>
</div>
