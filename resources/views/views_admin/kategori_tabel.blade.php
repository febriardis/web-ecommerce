@extends('layouts.layout_admin')

@section('content')
<div class="row">
	<div class="col-sm-4">
		<form action="" method="">
			<div class="panel panel-flat">
				<div class="panel-heading">
					<h5 class="panel-title">Tambah Data Kategori</h5>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<input type="text" name="nm_kategori" placeholder="masukan nama kategori" class="form-control">
					</div>
					<div class="form-group right">
						<input type="submit" value="Tambahkan" class="btn btn-info">
					</div>
				</div>
			</div>
		</form>
	</div>

	<div class="col-sm-8">
		<!-- Basic initialization -->
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title">Daftar Kategori</h5>
				<div class="heading-elements">
					<ul class="icons-list">
		        		<li><a data-action="reload"></a></li>
		        	</ul>
		    	</div>
			</div>

			<div class="panel-body">
				<table class="table">
					<thead>
						<tr>
							<th>No</th>
							<th>ID Kategori</th>
							<th>Nama Kategori</th>
							<th class="text-center">Aksi</th>
						</tr>
					</thead>
					<tbody>
						@for($i=1;$i<=3;$i++)
						<form action="" method="">
						<tr>
							<td>{{$i}}</td>
							<td>KSO{{$i}}</td>
							<td><input type="text" value="nama kategori" name="nm_kategori" class="form-control"></td>
							<td class="text-center">
								<button type="submit" class="btn btn-info btn-sm"><i class="icon-pencil7"></i> Update</button>
								<a href="" class="btn btn-danger btn-sm"><i class="icon-trash"></i> Hapus</a>
							</td>
						</tr>
						</form>
						@endfor
					</tbody>
				</table>
			</div>
		</div>
		<!-- /basic initialization -->	
	</div>
	
</div>
@endsection