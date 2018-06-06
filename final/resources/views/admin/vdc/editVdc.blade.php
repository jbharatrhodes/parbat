@extends("layouts.app")

@section("content")

    @include('admin.includes.errors')

    <div class="panel panel-default">

        <div class="panel-heading">
            Edit {{$vdc->vdcName}}
        </div>
        <div class="panel-body">
            <form class="edit" onsubmit = "return ConfirmDelete()" action="{{route('vdcs.update', ['id'=>$vdc->id])}}" method="post">

                {{ csrf_field() }}
                <div class="form-group">
                    <label for ="title">Name</label>
                    <input type="text" name="vdcName" class="form-control" value="{{$vdc->vdcName}}">
                </div>
                <div class="form-group">
                    <label for ="title">Desc</label>
                <textarea class="form-control" name="vdcDesc" >{{$vdc->vdcInfo}}</textarea>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="button btn-success">Edit Vdc</button>
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



