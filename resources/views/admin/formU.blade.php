@extends('layouts/back')

@section('title')
    update
@endsection

@section('content')

<form action="{{url('/update',$prod->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">title</label>
            <input type="text" class="form-control" value="{{$prod->title}}" name="title" placeholder="type title">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">description</label>
            <input type="text" class="form-control" value="{{$prod->description}}" name="description" placeholder="Enter your phone">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">text</label>
            <textarea type="text" class="form-control" name="text">{{$prod->text}}</textarea>
        </div>
        
        <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="pic" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>


@endsection