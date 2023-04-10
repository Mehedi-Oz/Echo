@extends('admin.master')

@section('title')
    Manage Category
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12 table-responsive">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center"><b>Manage Category Form</b></h3>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover bg-light-success text-center">
                    <tr>
                        <th>Sl</th>
                        <th>Category Name</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Update</th>
                    </tr>
                    @php $i=1 @endphp
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$category->category_name}}</td>
                            <td>
                                <img src="{{asset($category->image)}}" height="80px" width="80px" class="img-fluid">
                            </td>
                            <td>
                                {{$category->status==1? 'Published':'Unpublished'}}</td>
                            <td class="btn-group">
                                <a href="{{route('update.category')}}" class="btn btn-primary btn-sm">Edit</a>

                                @if($category->status==1)
                                    <a href="" class="btn-warning btn-sm mx-1">Unpublish</a>
                                @else
                                    <a href="" class="btn-success btn-sm mx-1">Publish</a>
                                @endif


                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>

@endsection
