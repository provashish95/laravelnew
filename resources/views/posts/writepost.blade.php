@extends('welcome')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p>
                    <a href="{{route('add.category')}}" class="btn btn-danger">Add category</a>
                    <a href="{{route('all.category')}}" class="btn btn-info">All category</a>
                </p>
                <hr>
                <form action="{{route('store.post')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Post Title</label>
                            <input type="text" class="form-control" placeholder="Post Title"  required  name="title">

                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Category</label>
                            <select class="form-control" name="category_id">
                                @foreach($category as $row)
                                <option value="{{$row->id}}">{{$row->name}}</option>
                                    @endforeach


                            </select>

                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Post Image</label>
                            <input type="file" class="form-control" placeholder="Insert Your Image" required name="img" >

                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Post Details</label>
                            <textarea rows="5" class="form-control" placeholder="Post details"  required  name="details"></textarea>

                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
