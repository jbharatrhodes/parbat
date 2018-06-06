@extends("layouts.app")

@section("content")

    <div class="panel panel-default">

        <table class="table table-responsive table-striped">
            <thead>
            <th>
                News Title
            </th>
            <th>
                VDC
            </th>
            <th>
                News Type
            </th>
            <th colspan="3">
                Actions
            </th>

            </thead>

            <tbody>

            @foreach($news as $newsdisplay)
                <tr>
                    <td>
                        {{ $newsdisplay->newsTitle }}
                    </td>
                    <td>
                        {{ $newsdisplay->vdcName }}
                    </td>
                    <td>
                        {{$newsdisplay->categoryName}} @if($newsdisplay->isLatest) <span class="badge badge-info">Latest news </span> @endif
                        @if($newsdisplay->isSlider) <span class="badge badge-info">Slider news </span> @endif
                    </td>
                    <td>
                        @if($newsdisplay->published==1)
                            <a href="{{route('news.unpublish', ['id'=>$newsdisplay->id])}}" class="btn btn-warning">Unpublish</a>
                         @else
                            <a href="{{route('news.unpublish', ['id'=>$newsdisplay->id])}}" class="btn btn-warning">publish</a>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('news.edit', ['id'=>$newsdisplay->id])}}" class="btn btn-info">Edit</a>
                    </td>
                    <td>
                        <a href="{{route('news.delete', ['id'=>$newsdisplay->id])}}" class="btn btn-danger">Delete</a>

                    </td>

                </tr>


            @endforeach

            </tbody>
        </table>
    </div>
    {{ $news->links() }}
@stop



