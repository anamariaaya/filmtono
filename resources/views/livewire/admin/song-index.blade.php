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
    
            @if ($songs->count())
                <div class=card-body>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Title</td>
                                <td>Video url</td>
                                <td>Status</td>
                                <td colspan="2">Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($songs as $song)
                                <tr>
                                    <td>{{$song->id}}</td>
                                    <td>{{$song->title}}</td>
                                    <td>{{$song->video_url}}</td>
                                    <td>
                                        @if ($song->status)
                                            Active
                                        @else
                                            Inactive
                                        @endif
                                    </td>
                                    <td width="10px">
                                        <a class="btn btn-primary btn-sm" href="{{route('admin.songs.edit', $song)}}">Edit</a>
                                    </td>
                                    <td width="10px">
                                        <form action="{{route('admin.songs.destroy', $song)}}" method="POST">
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
                    {{$songs->links()}}
                </div>
            @else
                <div class="card-body">
                    <strong>No information was found that meets the given conditions</strong>
                </div>
            @endif
        </div>
    </div>
</div>
