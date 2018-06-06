@extends("layouts.app")

@section("content")

    <div class="panel panel-default">
        <div class="panel panel-body">
            <a href="{{route('overseas.create')}}" class="btn btn-toolbar">Add New Country</a>
        </div>
        <table class="table table-responsive table-striped">
            <thead>
            <th>
                Countries
            </th>
            <th colspan="2">
                Actions
            </th>

            </thead>

            <tbody>

            @foreach($overseas as $list)
                <tr>
                    <td>
                        {{ $list->ocountry }}
                    </td>
                    <td>
                        <a href="{{route ('overseas.edit', ['id'=>$list->id])}}" class="btn btn-info">Edit</a>
                    </td>
                    <td>
                        <a href="{{route ('overseas.delete', ['id'=>$list->id])}}" class="btn btn-danger">Delete</a>

                    </td>

                </tr>


            @endforeach

            </tbody>
        </table>
@stop



