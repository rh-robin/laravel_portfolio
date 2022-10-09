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
                        <strong class="card-title">Product List</strong>
                    </div>
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    
                                    <th style="width:5%" class="serial 5%">#</th>
                                    <th style="width:10%">Image</th>
                                    <th style="width:10%">Name</th>
                                    <th style="width:10%">SKU</th>
                                    <th style="width:10%">Category</th>
                                    <th style="width:10%">Sub Category</th>
                                    <th style="width:10%">Quantity</th>
                                    <th style="width:10%">Status</th>
                                    <th style="width:17%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td class="serial">{{ $loop->iteration }}</td>
                                    <td><span class="name"><img src="{{ asset($product->image) }}" alt=""></span> </td>
                                    <td><span class="name">{{ $product->name }}</span> </td>
                                    <td><span class="name">{{ $product->sku }}</span> </td>
                                    <td><span class="name">
                                        @foreach($categories as $category)
                                        @if($product->category == $category->id){{ $category->name }}@endif
                                        @endforeach
                                    </span> </td>
                                    <td><span class="name">
                                        @foreach($categories as $category)
                                        @if($product->subcategory == $category->id){{ $category->name }}@endif
                                        @endforeach
                                    </span> </td>
                                    <td><span class="name">{{ $product->quantity }}</span> </td>
                                    <td><span class="name">{{ $product->status }}</span> </td>
                                    
                                    <td >
                                        <a href="{{ route('products.edit',['product'=>$product->id]) }}" class="btn btn-info btn-sm text-white"><i class="fa fa-edit"></i></a>
                                        <form class="d-inline" method="POST" action="{{ route('products.destroy',['product'=>$product->id]) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-sm text-white"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pl-3">{{ $products->links() }}</div>
                    </div> <!-- /.table-stats -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection