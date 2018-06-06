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
            Edit {{$news->newsTitle}}
        </div>
        <div class="panel-body">
            <form action="{{route('news.update', ['id'=>$news->id])}}" method="post">

                {{ csrf_field() }}
                <div class="form-group">
                    <label for ="title">Title</label>
                    <input type="text" name="title" class="form-control" value="{{$news->newsTitle}}">
                </div>
                <div class="form-group">
                    <label for ="newsDesc">Select Vdc</label>
                    <select class="form-control" name="vdc_id">
                        @foreach($vdc as $vdcs)
                            @if($news->vdcInfo_id==$vdcs->id)
                                <option value="{{$vdcs->id}}">{{$vdcs->vdcName}} (Currently selected)</option>
                            @else
                                <option value="{{$vdcs->id}}">{{$vdcs->vdcName}}</option>
                             @endif
                        @endforeach
                    </select>
                </div>
                {{--<div class="form-group">--}}
                {{--<label for ="category">Category</label>--}}
                {{--<input type="text" name="category" class="form-control">--}}
                {{--</div>--}}

                <div class="form-group">
                    <label for ="newsDesc">News Desc</label>
                    <textarea class="form-control" name="newsDesc" id="summernote" >{{$news->newsDesc}}</textarea>
                </div>
                <div class="form-group">
                    <label for ="newsDesc">Select Category</label>
                    <select class="form-control" name="category_id">
                        @foreach($category as $categories)
                            @if($categories->id==$news->category_id)

                            <option value="{{$categories->id}}">{{$categories->categoryName}} (currently selected)</option>
                            @else
                                <option value="{{$categories->id}}">{{$categories->categoryName}}</option>
                            @endif

                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="button btn-success">Edit News</button>
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



