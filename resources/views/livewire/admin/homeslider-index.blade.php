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

        @if ($homesliders->count())
            <div class=card-body>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Title</td>
                            <td>Subtitle</td>
                            <td>Status</td>
                            <td colspan="2">Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($homesliders as $homeslider)
                            <tr>
                                <td>{{$homeslider->id}}</td>
                                <td>{{$homeslider->title}}</td>
                                <td>{{$homeslider->subtitle}}</td>
                                <td>
                                    @if ($homeslider->status)
                                        Active
                                    @else
                                        Inactive
                                    @endif
                                </td>
                                <td width="10px">
                                    <a class="btn btn-primary btn-sm" href="{{route('admin.homesliders.edit', $homeslider)}}">Edit</a>
                                </td>
                                <td width="10px">
                                    <form action="{{route('admin.homesliders.destroy', $homeslider)}}" method="POST">
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
                {{$homesliders->links()}}
            </div>
        @else
            <div class="card-body">
                <strong>No information was found that meets the given conditions</strong>
            </div>
        @endif
    </div>
</div>