@extends("layouts.app")

@section("content")

    @include('admin.includes.errors')

  <div class="panel panel-default">

      <div class="panel-heading">
          Add a tag
      </div>
      <div class="panel-body">
          <form action="{{route('tags.store')}}" method="post">

              {{ csrf_field() }}
              <div class="form-group">
                  <label for ="title">Tag</label>
                  <input type="text" name="tags" class="form-control">
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



