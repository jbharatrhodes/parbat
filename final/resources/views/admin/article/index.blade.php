@extends("layouts.app")

@section("content")

    <div class="panel panel-default">

        <table class="table table-responsive table-striped">
            <thead>
            <th>
               Article
            </th>

            <th>
                Writer
            </th>
            <th colspan="2">
                Actions
            </th>

            </thead>

            <tbody>

            @foreach($article as $newsdisplay)
                <tr>
                    <td>
                        {{ $newsdisplay->articleTitle }}
                    </td>

                    <td>
                        {{$newsdisplay->articleWriter}}
                    </td>

                    <td>
                        <a href="{{route('article.edit', ['id'=>$newsdisplay->id])}}" class="btn btn-info">Edit</a>
                    </td>
                    <td>
                        <a href="{{route('article.delete', ['id'=>$newsdisplay->id])}}" class="btn btn-danger">Delete</a>

                    </td>

                </tr>


            @endforeach

            </tbody>
        </table>
    </div>
    {{--{{ $article->links() }}--}}
@stop



