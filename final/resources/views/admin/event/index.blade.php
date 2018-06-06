@extends("layouts.app")

@section("content")

    <div class="panel panel-default">

        <table class="table table-responsive table-striped">
            <thead>
            <th>
                Event Title
            </th>
            <th>
                VDC /Country
            </th>
            <th colspan="3">
                Actions
            </th>

            </thead>

            <tbody>

            @foreach($event as $newsdisplay)
                <tr>
                    <td>
                        {{ $newsdisplay->eventName }}
                    </td>


                    <td>

                    </td>
                    <td>
                        <a href="{{route('event.edit', ['id'=>$newsdisplay->id])}}" class="btn btn-info">Edit</a>
                    </td>
                    <td>
                        <a href="{{route('event.delete', ['id'=>$newsdisplay->id])}}" class="btn btn-danger">Delete</a>

                    </td>

                </tr>


            @endforeach

            </tbody>
        </table>
    </div>
    {{ $event->links() }}
@stop



