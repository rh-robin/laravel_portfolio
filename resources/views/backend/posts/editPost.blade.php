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
                        <strong>Edit Post: {{ $post->name }}</strong>
                    </div>
                    <div class="card-body card-block">
                        <form id="productForm" action="{{ route('posts.update',['post' => $post->id]) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            @method('put')
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="name" class=" form-control-label">Post Name</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" value="{{ old('name') ?? $post->name }}" id="name" name="name" placeholder="Post Name" class="form-control">
                                    @error('name')
                                    <small style="color:red;">{{ $message }}</small>
                                    @endError
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="slug" class=" form-control-label">Post Slug</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" value="{{ old('slug') ?? $post->slug }}" id="slug" name="slug" placeholder="Post Slug" class="form-control">
                                    @error('slug')
                                    <small style="color:red;">{{ $message }}</small>
                                    @endError
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="image" class=" form-control-label">Product Image</label></div>
                                <div class="col-12 col-md-9">
                                    
                                    <img class="mb-2" style="border-radius:5px;" src="{{ asset($post->image) }}" width="200px" alt="">
                                    <input type="file" value="{{ old('image') ?? $post->image }}" id="image" name="image" placeholder="Post Image" class="form-control">
                                    @error('image')
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
                                        <option value="{{ $allCategory->id }}" {{ $post->category==$allCategory->id ? 'selected' : '' }}>{{ $allCategory->name }}</option>
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
                                        <option value="{{ $allSubCategory->id }}" {{ $post->subcategory==$allSubCategory->id ? 'selected' : '' }}>{{ $allSubCategory->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('subcategory')
                                    <small style="color:red;">{{ $message }}</small>
                                    @endError
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="description" class=" form-control-label">Post Description</label></div>
                                <div class="col-12 col-md-9">
                                    <textarea name="description" placeholder="Post Description" class="form-control" id="description" cols="30" rows="10">{{ old('description') ?? $post->description }}</textarea>
                                    @error('description')
                                    <small style="color:red;">{{ $message }}</small>
                                    @endError
                                </div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="tags" class=" form-control-label">Post Tags</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" value="{{ old('tags') ?? $post->tags }}" id="tags" name="tags" placeholder="Post Tags" class="form-control">
                                    @error('tags')
                                    <small style="color:red;">{{ $message }}</small>
                                    @endError
                                </div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="select" class=" form-control-label">Status</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="status" id="select" class="form-control">
                                        <option value="">Please select</option>
                                        <option value="1" {{ $post->status==1? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ $post->status==0? 'selected' : '' }}>In Active</option>
                                        
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
    
    

    
</script>
@endsection