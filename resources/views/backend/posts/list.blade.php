@extends('backend.backend_layouts')
@section('content')
<?php use App\Models\Category; ?>
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        @if(session()->has('delete-success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">{{ session('delete-success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <strong class="card-title">All Post</strong>
                    </div>
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    
                                    <th style="width:5%" class="serial 5%">#</th>
                                    <th style="width:10%">Image</th>
                                    <th style="width:10%">Name</th>
                                    <th style="width:10%">Category</th>
                                    <th style="width:10%">Sub Category</th>
                                    <th style="width:10%">Tags</th>
                                    <th style="width:10%">Status</th>
                                    <th style="width:17%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $post)
                                <tr>
                                    <td class="serial">{{ $loop->iteration }}</td>
                                    <td><span class="name"><img src="{{ asset($post->image) }}" alt=""></span> </td>
                                    <td><span class="name">{{ $post->name }}</span> </td>
                                    <td><span class="name">
                                        @foreach($categories as $category)
                                        @if($post->category == $category->id){{ $category->name }}@endif
                                        @endforeach
                                    </span> </td>
                                    <td><span class="name">
                                        @foreach($categories as $category)
                                        @if($post->subcategory == $category->id){{ $category->name }}@endif
                                        @endforeach
                                    </span> </td>
                                    <td><span class="name">{{ $post->tags }}</span> </td>
                                    <td><span class="name">{{ $post->status }}</span> </td>
                                    
                                    <td >
                                        <a href="{{ route('posts.edit',['post'=>$post->id]) }}" class="btn btn-info btn-sm text-white"><i class="fa fa-edit"></i></a>
                                        <form class="d-inline" method="POST" action="{{ route('posts.destroy',['post'=>$post->id]) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-sm text-white"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pl-3">{{ $posts->links() }}</div>
                    </div> <!-- /.table-stats -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection