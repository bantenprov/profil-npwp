@extends('layouts.admin-page')

@section('content')
<div class="container">
    <div class="row">    	
        <div class="col-md-12"> 
	 <a href="{{ route('admin') }}" class="btn btn-sm btn-primary">Back</a>
	 <div>
	 	<br>
	 	<br>seacrh :
	 		{!! Form::open(['route' => 'profil-npwp.index','method' => 'get']) !!}
	 			<div class="input-group">
					<input type="text" name="search" value="{{ Request::get('search') }}" class="form-control input-sm" placeholder="Search for...">
					<span class="input-group-btn">
						<button class="btn btn-default btn-sm" type="submit"><i class="fa fa-search"></i></button>
					</span>
				</div><!-- /input-group -->
			{!! Form::close() !!}
			<br>
            <div class="panel panel-default">
                <div class="panel-heading">                	
                	Profil Npwp                	
					<span class="pull-right">						
						<a href="{{ route('profil-npwp.create') }}" class="bnt btn-sm btn-success"><i class="fa fa-plus"></i> Add</a>
					</span>			
                </div>

                <div class="panel-body">
                	@if ($errors->any())
					    					        
			            @foreach ($errors->all() as $error)
			                <div class="alert alert-danger">{{ $error }}</div>
			            @endforeach					        
					    
					@endif
					@if(session()->has('message'))
					    <div class="alert alert-success">
					    	{{ session()->get('message') }}
					    </div>
					@endif
					<div class="table-responsive">
	                    <table class="table table-striped">
							<tr>
								<th>User</th>
								<th>Nomor Npwp</th>
								<th>Nama Terdaftar</th>
								<th>Tanggal Daftar</th>
								<th>Alamat Terdaftar</th>
								<th>Status</th>
								<th width="130px">Action</th>
							</tr>
							@foreach($profils as $profil)
							<tr>
								<td>{{ $profil->getUser->name}}</td>
								<td>{{ $profil->no_npwp }}</td>
								<td>{{ $profil->nama_terdaftar }}</td>
								<td>{{ $profil->tgl_daftar }}</td>
								<td>{{ $profil->alamat_terdaftar }}</td>
								<td>{{ $profil->status }}</td>
								<td>
									<a href="{{ route('profil-npwp.show',$profil->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
									<a href="{{ route('profil-npwp.edit',$profil->id) }}" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i></a>
									<a href="{{ route('profil-npwp.destroy',$profil->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>												
								</td>
							</tr>
							@endforeach
						</table>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection