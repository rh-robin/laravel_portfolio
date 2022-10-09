@extends('backend.backend_layouts')
@section('content')
<div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                @if(session()->has('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">{{ session('success') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                <strong>Edit Home Texts</strong>
                            </div>
                            <div class="card-body card-block">
                                <form id="categoryForm" action="{{ route('hometexts.update') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    @csrf
                                    <input type="hidden" name="old_image" value="{{ $hometext->image }}">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="short_title" class=" form-control-label">Short Title</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" value="{{ old('short_title') ?? $hometext->short_title }}" id="short_title" name="short_title" placeholder="Short Title" class="form-control">
                                            @error('short_title')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="main_title" class=" form-control-label">Main Title</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" value="{{ old('main_title') ?? $hometext->main_title }}" id="main_title" name="main_title" placeholder="Main Title" class="form-control">
                                            @error('main_title')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="designations" class=" form-control-label">Designations</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" value="{{ old('designations') ?? $hometext->designations }}" id="main_title" name="designations" placeholder="Designations" class="form-control">
                                            @error('designations')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="image" class=" form-control-label">Home Image</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="file" value="{{ old('image') ?? $hometext->image }}" id="main_title" name="image" placeholder="Home Image" class="form-control">
                                            @error('image')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"></div>
                                        <div class="col-12 col-md-9">
                                            <img src="{{ asset($hometext->image) }}" alt="" style="width:100px">
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

@endsection