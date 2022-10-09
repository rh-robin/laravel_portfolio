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
                                <strong>Edit Skill</strong>
                            </div>
                            <div class="card-body card-block">
                                <form id="categoryForm" action="{{ route('skills.update',['skill' => $skill->id]) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    @csrf
                                    @method('put')
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="name" class=" form-control-label">Name</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" value="{{ old('name') ?? $skill->name }}" id="name" name="name" placeholder="Name" class="form-control">
                                            @error('name')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="percentage" class=" form-control-label">Percentage</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" value="{{ old('percentage') ?? $skill->percentage }}" id="percentage" name="percentage" placeholder="Percentage" class="form-control">
                                            @error('percentage')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="bar_color" class=" form-control-label">Progress Bar Color</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" value="{{ old('bar_color') ?? $skill->bar_color }}" id="bar_color" name="bar_color" placeholder="Progress Bar Color" class="form-control">
                                            @error('bar_color')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group" id="Submit">
                                        <div class="col-12">
                                            <input type="submit" value="Update" class="btn btn-info mt-4 mx-auto d-block">
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