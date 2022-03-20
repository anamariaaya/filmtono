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
    
            @if ($playlists->count())
                <div class=card-body>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Name</td>
                                <td>Status</td>
                                <td>Order</td>
                                <td colspan="2">Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($playlists as $playlist)
                                <tr>
                                    <td>{{$playlist->id}}</td>
                                    <td>{{$playlist->name}}</td>
                                    <td>
                                        @if ($playlist->status)
                                            Active
                                        @else
                                            Inactive
                                        @endif
                                    </td>
                                    <td>{{$playlist->order}}</td>
                                    <td width="10px">
                                        <a class="btn btn-primary btn-sm" href="{{route('admin.playlists.edit', $playlist)}}">Edit</a>
                                    </td>
                                    <td width="10px">
                                        <form action="{{route('admin.playlists.destroy', $playlist)}}" method="POST">
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
                    {{$playlists->links()}}
                </div>
            @else
                <div class="card-body">
                    <strong>No information was found that meets the given conditions</strong>
                </div>
            @endif
        </div>
    </div>
</div>
