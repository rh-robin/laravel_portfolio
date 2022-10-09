@extends('backend.backend_layouts')
@section('content')
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">{{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <strong class="card-title">All Experiences</strong>
                    </div>
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th style="width:5%" class="serial 5%">#</th>
                                    <th style="width:17%">Designations</th>
                                    <th style="width:19%">Company</th>
                                    <th style="width:28%">Description</th>
                                    <th style="width:12%">Duration</th>
                                    <th style="width:19%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($experiences as $experience)
                                <tr>
                                    <td class="serial">{{ $loop->iteration }}</td>
                                    <td><span class="name">{{ $experience->designation }}</span> </td>
                                    <td><span class="name">{{ $experience->company }}</span> </td>
                                    <td><span class="name">{{ $experience->description }}</span> </td>
                                    <td><span class="name">{{ $experience->duration }}</span> </td>
                                    <td >
                                        <a href="{{ route('experiences.edit',['experience'=>$experience->id]) }}" class="btn btn-info btn-sm text-white"><i class="fa fa-edit"></i></a>
                                        <form class="d-inline" method="POST" action="{{ route('experiences.destroy',['experience'=>$experience->id]) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-sm text-white"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> <!-- /.table-stats -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection