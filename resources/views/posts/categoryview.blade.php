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
                <!--validation--> <!--validation--> <!--validation-->

            <!--validation--> <!--validation--> <!--validation-->
                <div>
                    <ol>
                        <li>Category Name: {{$cat->name}}</li>
                        <li>Category Slug: {{$cat->slug}}</li>
                        <li>Created At: {{$cat->created_at}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

@endsection

