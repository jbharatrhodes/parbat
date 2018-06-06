@extends("layouts.app")

@section("content")

  <div class="panel panel-default">
      <div class="panel panel-heading">
          <a href="{{route('newsCategory.create')}}">Add News Category</a>
      </div>
    <table class="table table-responsive table-striped">
    <thead>
    <th>
        News Category
    </th>
    <th colspan="2">
        Actions
    </th>

    </thead>

    <tbody>

    @foreach($categories as $newsCategories)
        <tr>
            <td>
                {{ $newsCategories->categoryName }}
            </td>
            <td>
        <a href="{{route ('newsCategory.edit', ['id'=>$newsCategories->id])}}" class="btn btn-info">Edit</a>
            </td>
            <td>
                <a href="{{route ('newsCategory.delete', ['id'=>$newsCategories->id])}}" class="btn btn-danger">Delete</a>

            </td>

        </tr>


        @endforeach

    </tbody>
    </table>
    </div>
    @stop



