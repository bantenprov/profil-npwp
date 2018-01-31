@section('content')
<div class="container">
	<div class="row">		
		<div class="col-md-12">
			<a href="{{ route('profil.index') }}" class="btn btn-xs btn-primary">Back</a>
			<br>
			<br>
			<div class="panel panel-default">
				<div class="panel-heading">					
					Detail Profil Npwp
					<span class="pull-right">
						<a href="{{ route('profil.edit',$profil->id) }}" class="bnt btn-sm btn-success"><i class="fa fa-pencil"></i> Edit</a>
					</span>
					<div>
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
					</div> 
				</div>

				<div class="panel-body">
					<table>
						<tr>
							<td>User</td>
							<td width="20px">:</td>
							<td>{{ $profil->getUser->name }}</td>
						</tr>
						<tr>
							<td>Nomor Npwp</td>
							<td width="20px">:</td>
							<td>{{ $profil->no_npwp }}</td>
						</tr>
						<tr>
							<td>Nama Terdaftar</td>
							<td width="20px">:</td>
							<td>{{ $profil->nama_terdaftar }}</td>
						</tr>
						<tr>
							<td>Tgl Terdaftar</td>
							<td width="20px">:</td>
							<td>{{ $profil->tgl_daftar }}</td>
						</tr>
						<tr>
							<td>Alamat Terdaftar</td>
							<td width="20px">:</td>
							<td>{{ $profil->alamat_terdaftar }}</td>
						</tr>
					</table>
					<tr>
							<td>Status</td>
							<td width="20px">:</td>
							<td>{{ $profil->status }}</td>
						</tr>
				</div>
			</div>
		</div>
	</div>
</div>