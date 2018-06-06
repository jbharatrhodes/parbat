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
          Add a directory
      </div>
      <div class="panel-body">
          <form action="{{route('directory.store')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                  <label for ="title">Title</label>
                  <input type="text" name="dTitle" class="form-control">
              </div>
              <div class="form-group">
                  <label for="dType">Type</label>
                  <select id="dType" name="dType" class="form-control">
                      <option value="0">वर्गीकृत Classified</option>
                      <option value="1">डाइरेक्टरी Advertise</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="dpaid">Paid</label>
                  <select id="dpaid" name="dpaid" class="form-control">
                      <option value="0">फ्री  Free</option>
                      <option value="1">Paid</option>

                  </select>
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
              <div class="form-group">
                  <label for ="newsDesc">Select Category</label>
                  <select class="form-control" name="category_id">
                      @foreach($category as $categories)

                          <option value="{{$categories->id}}">{{$categories->dcName}}</option>
                      @endforeach
                  </select>
              </div>
              <div class="form-group">
                  <label for ="duration">Duration</label>
                  <select class="form-control" name="duration">
                      <option value="7"> 1 week </option>
                      <option value="15">2 Weeks</option>
                      <option value="30">1 Month</option>
                      <option value="60">2 Month</option>
                      <option value="180">Half Year</option>
                      <option value="365">1 Year</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for ="email">Email</label>
                  <input type="text" name="email" class="form-control">
              </div>
              <div class="form-group">
                  <label for ="facebook">Facebook</label>
                  <input type="text" name="facebook" class="form-control">
              </div>
              <div class="form-group">
                  <label for ="website">Website</label>
                  <input type="text" name="website" class="form-control">
              </div>
              <div class="form-group">
                  <label for ="contact">Contact Person</label>
                  <input type="text" name="contact" class="form-control">
              </div>
              <div class="form-group">
                  <label for ="mobile">Mobile</label>
                  <input type="text" name="mobile" class="form-control">
              </div>
              <div class="form-group">
                  <label for ="dphone">Phone</label>
                  <input type="text" name="dphone" class="form-control">
              </div>
              <div class="form-group">
                  <label for ="dplace">Address</label>
                  <input type="text" name="dplace" class="form-control">
              </div>

              {{--<div class="form-group">--}}
              {{--<label for ="category">Category</label>--}}
              {{--<input type="text" name="category" class="form-control">--}}
              {{--</div>--}}

              <div class="form-group">
                  <label for ="newsDesc">Describe</label>
                  <textarea class="form-control" name="newsDesc" id="summernote" ></textarea>
              </div>

              <div class="form-group">
                  <label for="feature">Featured image</label>
                  <input type="file" name="feature" class="form-control">
              </div>

              <div class="form-group">
                  <div class="text-center">
                      <button type="submit" class="button btn-success">Submit Advertise</button>
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



