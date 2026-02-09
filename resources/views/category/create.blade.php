@extends('admin.admin')
@section('heading')
    <div class="col-lg-12">
        <h1 class="page-header">Category</h1>
    </div>
@endsection

@section('content')
    <form method="post" action="">
        @csrf
        Name: <input type="text" required name="name" style="border:solid #337ab7 2px">
        description: <input type="text" required name="description" style="border:solid #337ab7 2px">
        parent_id: <input type="text" required name="parent_id" style="border:solid #337ab7 2px">

        <button>Add New</button>
    </form>
@endsection
