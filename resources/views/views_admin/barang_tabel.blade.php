@extends('layouts.layouts_admin')

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
						<th>Nama Produk</th>
						<th>Kategori</th>
						<th>Harga</th>
						<th>Stok</th>
						<th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
					</tr>
				</thead>
				<tbody>
					@for($i=1;$i<=3;$i++)
					<tr>
						<td>{{$i}}</td>
						<td>Lemari</td>
						<td>Organizer</td>
						<td>Rp.320.000</td>
						<td><span class="label label-info">20</span></td>
						<td class="text-center">
							<ul class="icons-list">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-eye"></i> Lihat detail</a></li>
										<li><a href="#"><i class="icon-pencil7"></i> Update</a></li>
									</ul>
								</li>
							</ul>
						</td>
					</tr>
					@endfor
				</tbody>
			</table>
		</div>
	</div>
	<!-- /basic initialization -->
@endsection