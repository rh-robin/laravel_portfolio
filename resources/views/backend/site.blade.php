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
                        <strong>Edit Website: {{ $site->title }}</strong>
                    </div>
                    <div class="card-body card-block">
                        <form id="SiteForm" action="{{ route('siteSave',['site'=>$site->id]) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            @method('put')
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="title" class=" form-control-label">Site Title</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" value="{{ old('title') ?? $site->title }}" id="title" name="title" placeholder="Site Title" class="form-control">
                                    @error('title')
                                    <small style="color:red;">{{ $message }}</small>
                                    @endError
                                </div>
                            </div>
                            
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="favicon" class=" form-control-label">Site Favicon</label></div>
                                <div class="col-12 col-md-9">
                                    
                                    <img class="mb-2" style="border-radius:5px;" src="{{ asset($site->favicon) }}" width="50px" alt="">
                                    <input type="file" value="{{ old('favicon') ?? $site->favicon }}" id="favicon" name="favicon" placeholder="Site Favicon" class="form-control">
                                    @error('favicon')
                                    <small style="color:red;">{{ $message }}</small>
                                    @endError
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="logo" class=" form-control-label">Site Logo</label></div>
                                <div class="col-12 col-md-9">
                                    
                                    <img class="mb-2" style="border-radius:5px;" src="{{ asset($site->logo) }}" width="200px" alt="">
                                    <input type="file" value="{{ old('logo') ?? $site->logo }}" id="logo" name="logo" placeholder="Site logo" class="form-control">
                                    @error('logo')
                                    <small style="color:red;">{{ $message }}</small>
                                    @endError
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="location" class=" form-control-label">Location</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" value="{{ old('location') ?? $site->location }}" id="location" name="location" placeholder="Site Location" class="form-control">
                                    @error('location')
                                    <small style="color:red;">{{ $message }}</small>
                                    @endError
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="email" class=" form-control-label">Email</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" value="{{ old('email') ?? $site->email }}" id="email" name="email" placeholder="Product Name" class="form-control">
                                    @error('email')
                                    <small style="color:red;">{{ $message }}</small>
                                    @endError
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="phone" class=" form-control-label">Phone Number</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" value="{{ old('phone') ?? $site->phone }}" id="phone" name="phone" placeholder="Phone Number" class="form-control">
                                    @error('name')
                                    <small style="color:red;">{{ $message }}</small>
                                    @endError
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="working_hours" class=" form-control-label">Working Hourse</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" value="{{ old('working_hours') ?? $site->working_hours }}" id="working_hours" name="working_hours" placeholder="Working Hourse" class="form-control">
                                    @error('name')
                                    <small style="color:red;">{{ $message }}</small>
                                    @endError
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="facebook" class=" form-control-label">Facebook</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" value="{{ old('facebook') ?? $site->facebook }}" id="facebook" name="facebook" placeholder="Facebook" class="form-control">
                                    @error('facebook')
                                    <small style="color:red;">{{ $message }}</small>
                                    @endError
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="twitter" class=" form-control-label">Twitter</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" value="{{ old('twitter') ?? $site->twitter }}" id="twitter" name="twitter" placeholder="Twitter" class="form-control">
                                    @error('twitter')
                                    <small style="color:red;">{{ $message }}</small>
                                    @endError
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="linkedIn" class=" form-control-label">LinkedIn</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" value="{{ old('linkedIn') ?? $site->linkedIn }}" id="twitter" name="linkedIn" placeholder="LinkedIn" class="form-control">
                                    @error('linkedIn')
                                    <small style="color:red;">{{ $message }}</small>
                                    @endError
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="footer_text" class=" form-control-label">Footer Text</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" value="{{ old('footer_text') ?? $site->footer_text }}" id="footer_text" name="footer_text" placeholder="Footer Text" class="form-control">
                                    @error('footer_text')
                                    <small style="color:red;">{{ $message }}</small>
                                    @endError
                                </div>
                            </div>
                            
                            
                            <div class="row form-group" id="categorySubmit">
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
<script>
    
    

    
</script>
@endsection