@extends('backend.backend_layouts')
@section('content')
<div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Add Products</strong>
                            </div>
                            <div class="card-body card-block">
                                <form id="productForm" action="{{ route('products.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    @csrf
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="name" class=" form-control-label">Product Name</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" value="{{ old('name') }}" id="name" name="name" placeholder="Product Name" class="form-control">
                                            @error('name')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="slug" class=" form-control-label">Product Slug</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" value="{{ old('slug') }}" id="slug" name="slug" placeholder="Product Slug" class="form-control">
                                            @error('slug')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="sku" class=" form-control-label">Product SKU</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" value="{{ old('sku') }}" id="sku" name="sku" placeholder="Product SKU" class="form-control">
                                            @error('sku')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="image" class=" form-control-label">Product Image</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="file" value="{{ old('image') }}" id="image" name="image" placeholder="Product Image" class="form-control">
                                            @error('image')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Brand</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="brand" id="select" class="form-control">
                                                <option value="">Please select</option>
                                                <option value="1">Active</option>
                                                <option value="0">In Active</option>
                                                
                                            </select>
                                            @error('brand')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group" id="selectCategory">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Select Category</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="category" value="{{ old('category') }}" id="select" class="form-control">
                                                <option value="">Please select</option>
                                                @foreach($allCategories as $allCategory)
                                                <option value="{{ $allCategory->id }}">{{ $allCategory->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('category')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group" id="selectSubCategory">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Select Sub Category</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="subcategory" value="{{ old('subcategory') }}" id="select" class="form-control">
                                                <option value="">Please select</option>
                                                @foreach($allSubCategories as $allSubCategory)
                                                <option value="{{ $allSubCategory->id }}">{{ $allSubCategory->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('subcategory')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="purchase_price" class=" form-control-label">Purchase Price</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="number" value="{{ old('purchase_price') }}" id="purchase_price" name="purchase_price" placeholder="Purchase Price" class="form-control">
                                            @error('purchase_price')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="sell_price" class=" form-control-label">Sell Price</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="number" value="{{ old('sell_price') }}" id="sell_price" name="sell_price" placeholder="Sell Price" class="form-control">
                                            @error('sell_price')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="quantity" class=" form-control-label">Product Quantity</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="number" value="{{ old('quantity') }}" id="quantity" name="quantity" placeholder="Product Quantity" class="form-control">
                                            @error('quantity')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="description" class=" form-control-label">Product Description</label></div>
                                        <div class="col-12 col-md-9">
                                            <textarea name="description" placeholder="Product Description" class="form-control" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
                                            @error('description')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Status</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="status" id="select" class="form-control">
                                                <option value="">Please select</option>
                                                <option value="1">Active</option>
                                                <option value="0">In Active</option>
                                                
                                            </select>
                                            @error('status')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="row form-group" id="categorySubmit">
                                        <div class="col-12">
                                            <input type="submit" value="Add" class="btn btn-info mt-4 mx-auto d-block">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .animated -->
</div>
<script>
    /* const types = document.getElementsByClassName("type");
    const selectCategory = document.getElementById("selectCategory");
    const categoryForm = document.getElementById("categoryForm");
    const categorySubmit = document.getElementById("categorySubmit");
    selectCategory.remove();
    for(let type of types){
        type.addEventListener("click",function(){
            if(types[1].checked){
                categoryForm.insertBefore(selectCategory, categorySubmit);
                console.log("checked");
            }else{
                selectCategory.remove();
            }
        });
    }; */
    $(document).ready(function(){
        $(document).on('change','.menu',function(){
            let menuId= $(this).val();
            $.ajax({
                type:'GET',
                url : '/backend/menu-wise-categories/' + menuId,
                data : {},
                success : function(response){
                    let categories='';
                    categories+='<select class="form-control" name="category">';
                    $.each(response,function(index, data){
                        console.log(data.id,data.name);
                        categories+=`<option value="${data.id}">${data.name}</option>`;

                    });
                    categories+='</select>';
                    $('#categories').html(categories);
                    console.log(categories);
                },
                error : function(error){}
            });
        });
    });
    
    

    
</script>
@endsection