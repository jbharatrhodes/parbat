@extends("layouts.app")

@section("content")

    <div class="panel panel-default">
        <div class="panel panel-body">
            <a href="{{route('cms.create')}}" class="btn btn-toolbar">Add New Content</a>
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

            @foreach($cms as $list)
                <tr>
                    <td>
                        {{ $list->cmsName }}
                    </td>
                    <td>
                        <a href="{{route ('cms.edit', ['id'=>$list->id])}}" class="btn btn-info">Edit</a>
                    </td>
                    <td>
                        <a href="{{route ('cms.delete', ['id'=>$list->id])}}" class="btn btn-danger">Delete</a>

                    </td>

                </tr>


            @endforeach

            </tbody>
        </table>
@stop



