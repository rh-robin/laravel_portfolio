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
                                <strong>Edit About</strong>
                            </div>
                            <div class="card-body card-block">
                                <form id="categoryForm" action="{{ route('about.update') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    @csrf
                                    <input type="hidden" name="old_image" value="{{ $about->image }}">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="title" class=" form-control-label">Title</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" value="{{ old('title') ?? $about->title }}" id="title" name="title" placeholder="Title" class="form-control">
                                            @error('title')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="description" class=" form-control-label">Description</label></div>
                                        <div class="col-12 col-md-9">
                                            <textarea class="form-control" name="description" id="" cols="30" rows="5" placeholder="Description">{{ old('description') ?? $about->description }}</textarea>
                                            @error('description')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="name" class=" form-control-label">Name</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" value="{{ old('name') ?? $about->name }}" id="name" name="name" placeholder="Name" class="form-control">
                                            @error('name')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="birthday" class=" form-control-label">Birthday</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="date" value="{{ old('birthday') ?? $about->birthday }}" id="birthday" name="birthday" placeholder="Birthday" class="form-control">
                                            @error('birthday')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="degree" class=" form-control-label">Degree</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" value="{{ old('degree') ?? $about->degree }}" id="degree" name="degree" placeholder="Degree" class="form-control">
                                            @error('degree')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="experience" class=" form-control-label">Experience</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" value="{{ old('experience') ?? $about->experience }}" id="experience" name="experience" placeholder="Experience" class="form-control">
                                            @error('experience')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="phone" class=" form-control-label">Phone</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" value="{{ old('phone') ?? $about->phone }}" id="phone" name="phone" placeholder="Phone" class="form-control">
                                            @error('phone')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email" class=" form-control-label">Email</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" value="{{ old('email') ?? $about->email }}" id="email" name="email" placeholder="Email" class="form-control">
                                            @error('email')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="address" class=" form-control-label">Address</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" value="{{ old('address') ?? $about->address }}" id="address" name="address" placeholder="Address" class="form-control">
                                            @error('address')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="freelance" class=" form-control-label">Freelance</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" value="{{ old('freelance') ?? $about->freelance }}" id="freelance" name="freelance" placeholder="Freelance" class="form-control">
                                            @error('freelance')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="image" class=" form-control-label">About Image</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="file" value="{{ old('image') ?? $about->image }}" id="image" name="image" placeholder="About Image" class="form-control">
                                            @error('image')
                                            <small style="color:red;">{{ $message }}</small>
                                            @endError
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"></div>
                                        <div class="col-12 col-md-9">
                                            <img src="{{ asset($about->image) }}" alt="" style="width:100px">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="hire_link" class=" form-control-label">Hire link</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" value="{{ old('hire_link') ?? $about->hire_link }}" id="hire_link" name="hire_link" placeholder="Hire link" class="form-control">
                                            @error('hire_link')
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

@endsection