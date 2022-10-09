@extends('backend.backend_layouts')
@section('content')
<div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                @if(session()->has('update-success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">{{ session('update-success') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                <strong>Edit Category {{ $category->name }}</strong>
                            </div>
                            <div class="card-body card-block">
                                <form id="categoryForm" action="{{ route('categories.update',['category' => $category->id]) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    @csrf
                                    @method('put')
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="name" class=" form-control-label">Category Name</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" value="{{ old('name') ?? $category->name }}" id="categoryName" name="name" placeholder="Category Name" class="form-control">
                                            @error('name')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="slug" class=" form-control-label">Category Slug</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" value="{{ old('slug') ?? $category->slug }}" id="slug" name="slug" placeholder="Category Slug" class="form-control">
                                            @error('slug')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="description" class=" form-control-label">Category Description</label></div>
                                        <div class="col-12 col-md-9">
                                            <textarea name="description" placeholder="Category Description" class="form-control" id="description" cols="30" rows="10">{{ old('description') ?? $category->description }}</textarea>
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
                                                <option value="1" {{ $category->status=='Active' ? 'selected' : '' }}>Active</option>
                                                <option value="0" {{ $category->status=='In Active' ? 'selected' : '' }}>In Active</option>
                                            </select>
                                            @error('status')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Select Type</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check pl-0">
                                                <div class="radio">
                                                    <label for="radio1" class="form-check-label ">
                                                        <input class="type" {{ $category->type==1 ? 'checked' : '' }}  type="radio" name="type" value="1" class="form-check-input"> Category
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="radio2" class="form-check-label ">
                                                        <input class="type" {{ $category->type==2 ? 'checked' : '' }} type="radio" name="type" value="2" class="form-check-input"> Sub Category
                                                    </label>
                                                </div>
                                            </div>
                                            @error('type')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group" id="selectCategory">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Select Parent Category</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="category" value="{{ old('category') }}" id="select" class="form-control">
                                                <option value="">Please select</option>
                                                @foreach($allCategories as $allCategory)
                                                <option value="{{ $allCategory->id }}" {{ $category->category==$allCategory->id ? 'selected' : '' }}>{{ $allCategory->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('category')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group" id="categorySubmit">
                                        <div class="col-12">
                                            <input type="submit" value="UPDATE" class="btn btn-info mt-4 mx-auto d-block">
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
    const types = document.getElementsByClassName("type");
    const selectCategory = document.getElementById("selectCategory");
    const categoryForm = document.getElementById("categoryForm");
    const categorySubmit = document.getElementById("categorySubmit");
    selectCategory.remove();
    if(types[1].checked){
        categoryForm.insertBefore(selectCategory, categorySubmit);
        console.log("checked");
    }else{
        selectCategory.remove();
    }
    for(let type of types){
        type.addEventListener("click",function(){
            if(types[1].checked){
                categoryForm.insertBefore(selectCategory, categorySubmit);
                console.log("checked");
            }else{
                selectCategory.remove();
            }
        });
    };

    
    

    
</script>
@endsection