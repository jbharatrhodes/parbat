@extends("layouts.app")

@section("content")

    @include('admin.includes.errors')

    <div class="panel panel-default">

        <div class="panel-heading">
            Edit {{$overseas->ocountry}}
        </div>
        <div class="panel-body">
             <form class="edit" onsubmit = "return ConfirmDelete()" action="{{route('overseas.update', ['id'=>$overseas->id])}}" method="post">

                {{ csrf_field() }}
                <div class="form-group">
                    <label for ="title">Name</label>
                    <input type="text" name="ocountry" class="form-control" value="{{$overseas->ocountry}}">
                </div>

                <div class="form-group">
                    <label for ="newsDesc">Information</label>
                    <textarea class="form-control" name="oinfo" id="summernote" >{{$overseas->oinfo}}</textarea>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="button btn-success">Edit Country</button>
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
@section('style')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">

@stop

@section('script')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
            //$('#datetimepicker1').datetimepicker();

        });
    </script>
@stop



