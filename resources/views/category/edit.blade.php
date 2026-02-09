@extends('admin.admin')
@section('heading')
    <div class="col-lg-12">
        <h1 class="page-header">Category</h1>
    </div>
@endsection

@section('content')
    <form method="post" action="">
        @csrf
        @method('PUT')
            Name: <input type="text" required name="name" value="{{$categories->name}}" style="border:solid #337ab7 2px">
            description: <textarea
            name="description"
            required
            style="border:solid #337ab7 2px"
        >{{ $categories->description }}</textarea>

        parent_id:
            <input type="text"  name="parent_id" value="{{$categories->parent_id}}" style="border:solid #337ab7 2px">
{{--        @@foreach($category as $categories)--}}
{{--            @if($categories->parent_id == null)--}}
{{--                <option value="none">none</option>--}}
{{--            @else()--}}
{{--                <--}}
{{--            @endif--}}
{{--        @endforeach--}}

        <button>update</button>
    </form>
@endsection
