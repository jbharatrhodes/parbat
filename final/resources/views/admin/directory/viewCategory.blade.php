@extends("layouts.app")

@section("content")

  <div class="panel panel-default">
      <div class="panel panel-heading">
          <a href="{{route('dCategory.create')}}">Add Directory Category</a>
      </div>
    <table class="table table-responsive table-striped">
    <thead>
    <th>
      Directory Category
    </th>
    <th colspan="2">
        Actions
    </th>

    </thead>

    <tbody>

    @foreach($categories as $dCategories)
        <tr>
            <td>
                {{ $dCategories->dcName }}
            </td>
            <td>
        <a href="{{route ('dCategory.edit', ['id'=>$dCategories->id])}}" class="btn btn-info">Edit</a>
            </td>
            <td>
                <a href="{{route ('dCategory.delete', ['id'=>$dCategories->id])}}" class="btn btn-danger">Delete</a>

            </td>

        </tr>


        @endforeach

    </tbody>
    </table>
    </div>
    @stop



