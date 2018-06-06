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
          Add an article
      </div>
      <div class="panel-body">
          <form action="{{route('article.store')}}" method="post" enctype="multipart/form-data">

              {{ csrf_field() }}
              <div class="form-group">
                  <label for ="title">Title</label>
                  <input type="text" name="articleTitle" class="form-control" />
              </div>

              <div class="form-group">
                  <label for ="title">Writer</label>
                  <input type="text" name="articleWriter" class="form-control" />
              </div>

              <div class="form-group">
                  <label for ="title">Writer Description</label>
                  <input type="text" name="articleWriterInfo" class="form-control" />
              </div>


              <div class="form-group">
                  <label for ="newsDesc">Article Desc</label>
                  <textarea class="form-control" name="articleDesc" id="summernote" ></textarea>
              </div>

              <div class="form-group">
                  <label for="feature">Featured image</label>
                  <input type="file" name="feature" class="form-control">
              </div>


              <div class="form-group">
                  <div class="text-center">
                      <button type="submit" class="button btn-success">Submit Article</button>
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
        });
    </script>
    @stop



