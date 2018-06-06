@extends("layouts.app")

@section("content")

    <div class="panel panel-default">
        <div class="panel panel-body">
            <a href="{{route('tags.create')}}" class="btn btn-toolbar">Add New tags</a>
        </div>
        <table class="table table-responsive table-striped">
            <thead>
            <th>
                Tags
            </th>
            <th colspan="2">
                Actions
            </th>

            </thead>

            <tbody>

            @foreach($tag as $tags)
                <tr>
                    <td>
                        {{ $tags->tags }}
                    </td>
                    <td>
                        <a href="{{route ('tags.edit', ['id'=>$tags->id])}}" class="btn btn-info">Edit</a>
                    </td>
                    <td>
                        <a href="{{route ('tags.delete', ['id'=>$tags->id])}}" class="btn btn-danger">Delete</a>

                    </td>

                </tr>


            @endforeach

            </tbody>
        </table>
@stop



