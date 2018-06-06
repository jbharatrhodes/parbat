@extends("layouts.app")

@section("content")

@include('admin.includes.errors')

    <div class="panel panel-default">

        <div class="panel-heading">
            Edit {{$category->dcName}}
        </div>
        <div class="panel-body">
            <form class="edit" onsubmit = "return ConfirmDelete()" action="{{route('dCategory.update', ['id'=>$category->id])}}" method="post">

                {{ csrf_field() }}
                <div class="form-group">
                    <label for ="title">Title</label>
                    <input type="text" name="dcName" class="form-control" value="{{$category->dcName}}">
                </div>

                {{--<div class="form-group">--}}
                {{--<label for ="category">Category</label>--}}
                {{--<input type="text" name="category" class="form-control">--}}
                {{--</div>--}}

                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="button btn-success">Edit Category</button>
                    </div>
                </div>


            </form>
            <script>
                function ConfirmDelete() {
                    $(".edit").on("submit", function () {
                        return confirm("Do you want to Edit this item?");
                    });
                }
            </script>
        </div>
    </div>

@stop



