@extends('backend.backend_layouts')
@section('content')
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
                        <strong class="card-title">Category List</strong>
                    </div>
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th style="width:5%" class="serial 5%">#</th>
                                    <th style="width:13%">Name</th>
                                    <th style="width:10%">Slug</th>
                                    <th style="width:28%">Description</th>
                                    <th style="width:15%">Status</th>
                                    <th style="width:12%">Type</th>
                                    <th style="width:17%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td class="serial">{{ $loop->iteration }}</td>
                                    <td><span class="name">{{ $category->name }}</span> </td>
                                    <td><span class="name">{{ $category->slug }}</span> </td>
                                    <td><span class="name">{{ $category->description }}</span> </td>
                                    <td><span class="name">{{ $category->status }}</span> </td>
                                    <td><span class="name">@if($category->type==1)Category @elseif($category->type==2)Sub Category  @endif </span> </td>
                                    <td >
                                        <a href="{{ route('categories.edit',['category'=>$category->id]) }}" class="btn btn-info btn-sm text-white"><i class="fa fa-edit"></i></a>
                                        <form class="d-inline" method="POST" action="{{ route('categories.destroy',['category'=>$category->id]) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-sm text-white"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pl-3">{{ $categories->links() }}</div>
                    </div> <!-- /.table-stats -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection