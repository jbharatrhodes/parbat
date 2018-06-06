@extends("layouts.app")

@section("content")

    @include('admin.includes.errors')

  <div class="panel panel-default">

      <div class="panel-heading">
          Add a category
      </div>
      <div class="panel-body">
          <form action="{{route('newsCategory.store')}}" method="post">

              {{ csrf_field() }}
              <div class="form-group">
                  <label for ="title">Title</label>
                  <input type="text" name="CategoryTitle" class="form-control">
              </div>


              {{--<div class="form-group">--}}
              {{--<label for ="category">Category</label>--}}
              {{--<input type="text" name="category" class="form-control">--}}
              {{--</div>--}}

              <div class="form-group">
                  <div class="text-center">
                      <button type="submit" class="button btn-success">Submit Category</button>
                  </div>
              </div>


          </form>
      </div>
  </div>

    @stop



