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
          Add a news
      </div>
      <div class="panel-body">
          <form action="{{route('news.store')}}" method="post" enctype="multipart/form-data">

              {{ csrf_field() }}
              <div class="form-group">
                  <label for ="title">Title</label>
                  <input type="text" name="title" class="form-control" />
              </div>
              <div class="form-group">
                  <label for ="newsDesc">Select Category</label>
                  <select class="form-control" name="category_id" id="category_id">
                      @foreach($category as $categories)

                          <option value="{{$categories->id}}">{{$categories->categoryName}}</option>
                      @endforeach
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
                  <label for ="newsDesc">News Desc</label>
                  <textarea class="form-control" name="newsDesc" id="summernote" ></textarea>
              </div>
              <div class="form-group">
                  <label for ="isLatest">Latest News</label>
                  <input type="checkbox" name="isLatest" value="latest" />
              </div>
              <div class="form-group">
                  <label for ="isSlider">Appear in Slider</label>
                  <input type="checkbox" name="isSlider" value="slider"/>
              </div>
              <div class="form-group">
                  <label for="feature">Featured image</label>
                  <input type="file" name="feature" class="form-control">
              </div>
              <div class="form-group">
                  <label for ="title">News Source</label>
                  <input type="text" name="source" class="form-control" />
              </div>
              <div class="form-group">
                  <label for ="newsBy">समाचारदाता </label>
                  <input type="text" name="newsBy" class="form-control"/>
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
                      <button type="submit" class="button btn-success">Submit News</button>
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
        $("#category_id").change(function(){
            const catId = $("#category_id").val();
            if(catId==13){
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



