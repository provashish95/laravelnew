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
            <table class="table table-responsive">
                 <tr>
                     <th>SL</th>
                     <th>Category Name</th>
                     <th>Slug Name</th>
                     <th>Created At</th>
                     <th>Action</th>
                 </tr>
                @foreach($category as $row)
                  <tr>
                         <td>{{$row->id}}</td>
                         <td>{{$row->name}}</td>
                         <td>{{$row->slug}}</td>
                         <td>{{$row->created_at}}</td>
                         <td>
                             <a href="{{URL::to('edit/category'.$row->id)}}" class="btn btn-sm btn-info">Edit</a>
                             <a href="{{URL::to('delete/category'.$row->id)}}" class="btn btn-sm btn-danger">Delete</a>
                             <a href="{{URL::to('view/category'.$row->id)}}" class="btn btn-sm btn-success">view</a>
                         </td>
                 </tr>
                @endforeach
            </table>


            </div>
        </div>
    </div>

@endsection

