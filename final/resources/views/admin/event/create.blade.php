@extends("layouts.app")

@section("content")

    @if(count($errors) > 0)
        <ul class="list-group">
            @foreach($errors ->all() as $error)

                <li class="list-group text-danger">{{$error}}</li>
            @endforeach
        </ul>

     @endif

  <div class="panel panel-default">

      <div class="panel-heading">
          Add an Event
      </div>
      <div class="panel-body">
          <form action="{{route('event.store')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                  <label for ="title">Title</label>
                  <input type="text" name="title" class="form-control" />
              </div>

              <div class="form-group">
                  <label for="country">Country</label>
                  <select id="country" name="country" class="form-control">
                      <option value="0">पर्बत भित्र</option>
                      <option value="1">पर्बत बाहिर </option>
                  </select>
              </div>
              <div class="form-group" id ="vdc">
                  <label for ="newsDesc">Select Vdc</label>
                  <select class="form-control" name="vdc_id">
                      @foreach($vdc as $vdcs)

                          <option value="{{$vdcs->id}}">{{$vdcs->vdcName}}</option>
                      @endforeach
                  </select>
              </div>
              <div class="form-group" id ="prabash" style="display: none;">
                  <label for ="newsDesc">Country</label>
                  <select class="form-control" name="overseas_id">
                      @foreach($overseas as $oversea)

                          <option value="{{$oversea->id}}">{{$oversea->ocountry}}</option>
                      @endforeach
                  </select>
              </div>
              {{--<div class="form-group">--}}
              {{--<label for ="category">Category</label>--}}
              {{--<input type="text" name="category" class="form-control">--}}
              {{--</div>--}}

              <div class="form-group">
                  <label for ="eventDesc">event Desc</label>
                  <textarea class="form-control" name="eventDesc" id="summernote" ></textarea>
              </div>

              <div class="form-group">
                  <label for="feature">Image</label>
                  <input type="file" name="feature" class="form-control">
              </div>
              <div class="form-group">
                  <label for ="contact">Contact Person</label>
                  <input type="text" name="contact" class="form-control">
              </div>
              <div class="form-group">
                  <label for ="location">Place</label>
                  <input type="text" name="location" class="form-control">
              </div>
              <div class="form-group">
                  <label for ="time">Time</label>
                  <input type="text" name="time" class="form-control">
              </div>

              <div class="form-group">
                  <label for ="datepicker">Date</label>
                  <div class='input-group date' id='datepicker1' name='datepicker1'>
                      <input type='text' class="form-control" name='datepicker1' />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                  </div>
              </div>
              <div class="form-group">
                  <div class="text-center">
                      <button type="submit" class="button btn-success">Submit Event</button>
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
            $( "#datepicker1" ).datepicker({
                'formatDate': 'Y-m-d H:i:s'
            });
        });
        $("#country").change(function(){
            const catId = $("#country").val();
            if(catId==1){
                $("#vdc").hide();
                $("#prabash").show();
            }
            else{
                $("#vdc").show();
                $("#prabash").hide();
            }
        });
    </script>
    @stop



