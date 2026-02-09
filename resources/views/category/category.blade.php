@extends('admin.admin')
{{--@section('heading')--}}
{{--    <div class="col-lg-12">--}}
{{--        <h1 class="page-header">Category</h1>--}}
{{--    </div>--}}
{{--@endsection--}}

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <button class="btn btn-primary">
                <a href="{{route('category.create')}}" style="text-decoration: none; color: white">Add Category</a>
            </button>
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                        <th>Category ID</th>
                        <th>Category name</th>
                        <th>description</th>
                        <th>image</th>
                        <th>active</th>
                        <th>created_at</th>
                        <th>updated_at</th>


                    </tr>
                    </thead>
                    <tbody>

                    @foreach($categories as $category)
                        <tr class="odd gradeX">
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->description}}</td>
                            <td>{{$category->image}}</td>
                            <td>@if($category->is_active == 1)
                                    active
                                @else
                                    no active
                            @endif</td>
                            <td>{{$category->created_at}}</td>
                            <td>{{$category->updated_at}}</td>
{{--                            <td>--}}
{{--                                <form action="">--}}
{{--                                    <button class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></button>--}}
{{--                                </form>--}}
{{--                            </td>--}}
{{--                            <td>--}}
{{--                                <form method="post" action="">--}}
{{--                                    @csrf--}}
{{--                                    @method('DELETE')--}}
{{--                                    <button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>--}}
{{--                                </form>--}}
{{--                            </td>--}}
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
            <!-- /.category-responsive -->
        </div>
    </div>
@endsection
