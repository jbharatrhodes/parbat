@extends("layouts.app")

@section("content")

    <div class="panel panel-default">

        <table class="table table-responsive table-striped">
            <thead>
            <th>
                News Title
            </th>

            <th colspan="2">
                Actions
            </th>

            </thead>

            <tbody>

            @foreach($directory as $directory)
                <tr>
                    <td>
                        {{ $directory->dTitle }}
                    </td>

                    <td>
                        <a href="{{route('directory.edit', ['id'=>$directory->id])}}" class="btn btn-info">Edit</a>
                    </td>
                    <td>
                        <a href="{{route('directory.delete', ['id'=>$directory->id])}}" class="btn btn-danger">Delete</a>

                    </td>

                </tr>


            @endforeach

            </tbody>
        </table>
    </div>
    {{--{{ ->links() }}--}}
@stop



