@extends("layouts.app")

@section("content")

    <div class="panel panel-default">
        <table class="table table-responsive table-striped">
            <thead>
            <th>
                VDCs
            </th>
            <th colspan="2">
                Actions
            </th>

            </thead>

            <tbody>

            @foreach($vdcList as $listVdc)
                <tr>
                    <td>
                        {{ $listVdc->vdcName }}
                    </td>
                    <td>
                        <a href="{{route ('vdcs.edit', ['id'=>$listVdc->id])}}" class="btn btn-info">Edit</a>
                    </td>
                    <td>
                        <a href="{{route ('vdcs.delete', ['id'=>$listVdc->id])}}" class="btn btn-danger">Delete</a>

                    </td>

                </tr>


            @endforeach

            </tbody>
        </table>
@stop



