@extends('layouts.layout_admin')

@section('content')
	<!-- Basic initialization -->
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h5 class="panel-title">Daftar Produk</h5>
			<a href="/admin/tambah barang" class="btn btn-default btn-sm">Tambah Produk</a>
			<div class="heading-elements">
				<ul class="icons-list">
            		<li><a data-action="reload"></a></li>
            	</ul>
        	</div>
		</div>

		<div class="panel-body">
			<table class="table datatable-basic">
				<thead>
					<tr>
						<th>No</th>
						<th>ID Produk</th>
						<th>Nama Produk</th>
						<th>Kategori</th>
						<th>Harga</th>
						<th>Stok</th>
						<th class="text-center">Aksi</th>
					</tr>
				</thead>
				<tbody>
					@for($i=1;$i<=3;$i++)
					<tr>
						<td>{{$i}}</td>
						<td>PSO{{$i}}</td>
						<td>Lemari</td>
						<td>Organizer</td>
						<td>Rp.320.000</td>
						<td><span class="label label-info">20</span></td>
						<td class="text-center">
							<a href="" class="btn btn-info btn-sm"><i class="icon-pencil7"></i> Update</a>
							<a href="" class="btn btn-danger btn-sm"><i class="icon-trash"></i> Hapus</a>
						</td>
					</tr>
					@endfor
				</tbody>
			</table>
		</div>
	</div>
	<!-- /basic initialization -->
@endsection