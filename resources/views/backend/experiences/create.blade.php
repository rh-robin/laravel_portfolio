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
                                <strong>Add Degree</strong>
                            </div>
                            <div class="card-body card-block">
                                <form id="categoryForm" action="{{ route('experiences.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    @csrf
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="designation" class=" form-control-label">Designation</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" value="{{ old('designation')}}" id="designation" name="designation" placeholder="Designation" class="form-control">
                                            @error('designation')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="company" class=" form-control-label">Company</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" value="{{ old('company')}}" id="company" name="company" placeholder="Company" class="form-control">
                                            @error('company')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="description" class=" form-control-label">Description</label></div>
                                        <div class="col-12 col-md-9">
                                            <textarea name="description" id="description" placeholder="Description" class="form-control" cols="30" rows="5">{{ old('description')}}</textarea>
                                            @error('description')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="duration" class=" form-control-label">Duration</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" value="{{ old('duration')}}" id="duration" name="duration" placeholder="Duration" class="form-control">
                                            @error('duration')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group" id="Submit">
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

@endsection