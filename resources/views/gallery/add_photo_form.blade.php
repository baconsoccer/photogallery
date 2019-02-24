@extends ('layouts.master')



@section('content')
    <h1>Photo Gallery</h1>
    <h1>Upload form</h1>

    <form action="{{route('gallery.save_photo')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="title">Title</label><br>
            <input type="text" name="title" value="{{old('title')}}" placeholder="Enter title">
            @if($errors->has('title'))
                <p class="text-danger">{{$errors->first('title')}}</p>
            @endif
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <textarea name="description" class="form-control:" placeholder="Enter description">{{old('description')}}</textarea>
            @if($errors->has('description'))
                <p class="text-danger">{{$errors->first('description')}}</p>
            @endif
        </div>
        <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" name="photo" >
            @if($errors->has('photo'))
                <p class="text-danger">{{$errors->first('photo')}}</p>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
@endsection
