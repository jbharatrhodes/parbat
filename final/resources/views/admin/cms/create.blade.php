@extends("layouts.app")

@section("content")

    @include('admin.includes.errors')

  <div class="panel panel-default">

      <div class="panel-heading">
          Add Content
      </div>
      <div class="panel-body">
          <form action="{{route('cms.store')}}" method="post">

              {{ csrf_field() }}
              <div class="form-group">
                  <label for ="name">Content Name</label>
                  <input type="text" name="name" class="form-control">
              </div>

              <div class="form-group">
                  <label for ="desc">Information</label>
                  <textarea class="form-control" name="desc" id="summernote" ></textarea>
              </div>
              <div class="form-group">
                  <label for ="desc">Type</label>
                  <select id="type" name="type" class="form-control">
                      <option value="0">Content Only</option>
                      <option value="1">VDC</option>
                      <option value="2">Pardesh</option>
                  </select>
              </div>
              <div class="form-group" id="vdcplace" style="display: none;">
                  <label for ="newsDesc">Select Vdc</label>
                  <select class="form-control" name="vdc">
                      @foreach($vdc as $vdcs)

                          <option value="{{$vdcs->id}}">{{$vdcs->vdcName}}</option>
                      @endforeach
                  </select>
              </div>
              <div class="form-group" id="overseasplace" style="display: none;">
                  <label for ="newsDesc">Select Country</label>
                  <select class="form-control" name="overseas">
                      @foreach($overseas as $os)

                          <option value="{{$os->id}}">{{$os->ocountry}}</option>
                      @endforeach
                  </select>
              </div>
              <div class="form-group">
                  <label for ="kyword">Keywords (for SEO purpose)</label>
                  <input type="text" name="kyword" class="form-control">
              </div>
              <div class="form-group">
                  <label for ="metadesc">SEO decsription</label>
                  <input type="text" name="metadesc" class="form-control">
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
            $("#type").change(function(){
                var type = $("#type").val();
                if(type==1){
                    $("#vdcplace").show();
                    $("#overseasplace").hide();
                }
                else if(type==2){
                    $("#overseasplace").show();
                    $("#vdcplace").hide();
                }
            });

        });
    </script>
@stop




