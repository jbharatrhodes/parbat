@extends("layouts.app")

@section("content")

    @include('admin.includes.errors')

  <div class="panel panel-default">

      <div class="panel-heading">
          Add a tag
      </div>
      <div class="panel-body">
          <form action="{{route('overseas.store')}}" method="post">

              {{ csrf_field() }}
              <div class="form-group">
                  <label for ="title">Country</label>
                  <input type="text" name="country" class="form-control">
              </div>

              <div class="form-group">
                  <label for ="newsDesc">Information</label>
                  <textarea class="form-control" name="oinfo" id="summernote" ></textarea>
              </div>

              <div class="form-group">
                  <div class="text-center">
                      <button type="submit" class="button btn-success">Submit Tags</button>
                  </div>
              </div>


          </form>
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
            $( "#datetimepicker1" ).datepicker();
        });
    </script>
@stop




