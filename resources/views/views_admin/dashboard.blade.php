@extends('layouts.layouts_admin')

@section('content')
<!-- Dashboard Content-->
<div class="row">
	<div class="col-lg-8">
		<div class="col-lg-4">
			<!-- Members online -->
			<div class="panel bg-teal-400">
				<div class="panel-body">
					<div class="heading-elements">
						<ul class="icons-list">
	                		<li><a data-action="reload"></a></li>
	                	</ul>
                	</div>
					<h3 class="no-margin">3,450</h3>
					Pelanggan
					<div class="text-muted text-size-small">489 avg</div>
				</div>
			</div>
			<!-- /members online -->
		</div>

		<div class="col-lg-4">
			<!-- Current server load -->
			<div class="panel bg-pink-400">
				<div class="panel-body">
					<div class="heading-elements">
						<ul class="icons-list">
	                		<li><a data-action="reload"></a></li>
	                	</ul>
                	</div>
					<h3 class="no-margin">49.4%</h3>
					Current server load
					<div class="text-muted text-size-small">34.6% avg</div>
				</div>
				<div id="server-load"></div>
			</div>
			<!-- /current server load -->
		</div>

		<div class="col-lg-4">
			<!-- Today's revenue -->
			<div class="panel bg-blue-400">
				<div class="panel-body">
					<div class="heading-elements">
						<ul class="icons-list">
	                		<li><a data-action="reload"></a></li>
	                	</ul>
                	</div>

					<h3 class="no-margin">$18,390</h3>
					Today's revenue
					<div class="text-muted text-size-small">$37,578 avg</div>
				</div>

				<div id="today-revenue"></div>
			</div>
			<!-- /today's revenue -->
		</div>		
	</div>


	<div class="col-lg-4">
		<!-- Sales stats -->
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h6 class="panel-title">Sales statistics</h6>
			</div>
			<div class="container-fluid">
				<div class="row text-center">
					<div class="col-md-6">
						<div class="content-group">
							<h5 class="text-semibold no-margin"><i class="icon-calendar5 position-left text-slate"></i> 5,689</h5>
							<span class="text-muted text-size-small">orders weekly</span>
						</div>
					</div>

					<div class="col-md-6">
						<div class="content-group">
							<h5 class="text-semibold no-margin"><i class="icon-calendar52 position-left text-slate"></i> 32,568</h5>
							<span class="text-muted text-size-small">orders monthly</span>
						</div>
					</div>

				</div>
			</div>

			<div class="content-group-sm" id="app_sales"></div>
			<div id="monthly-sales-stats"></div>
		</div>
		<!-- /sales stats -->
	</div>
	
	<!-- sales stats -->
	<div class="col-lg-12">
		<!-- Marketing campaigns -->
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h6 class="panel-title">Pesanan Pelanggan</h6>
			</div>

			<div class="table-responsive">
				<table class="table text-nowrap">
					<thead>
						<tr>
							<th class="col-md-2">Order ID</th>
							<th class="col-md-2">Pelanggan</th>
							<th class="col-md-2">Tgl Order</th>
							<th class="col-md-2">Status</th>
							<th class="col-md-2">Total</th>
							<th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
						</tr>
					</thead>
					<tbody>
						<tr class="active border-double">
							<td colspan="5">Hari ini</td>
							<td class="text-right">
								<span class="progress-meter" id="today-progress" data-progress="30"></span>
							</td>
						</tr>
						@for($i=1;$i<=3;$i++)
						<tr>
							<td>{{$i}}</td>
							<td><span class="text-muted">Muhammad Yusuf</span></td>
							<td>{{date('d/m/Y')}}</td>
							<td><span class="label bg-success-400">Belum Bayar</span></td>
							<td><h6 class="text-semibold">Rp. 123.000</h6></td>
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
						<tr class="active border-double">
							<td colspan="5">Kemarin</td>
							<td class="text-right">
								<span class="progress-meter" id="yesterday-progress" data-progress="65"></span>
							</td>
						</tr>
						@for($i=1;$i<=3;$i++)
						<tr>
							<td>{{$i}}</td>
							<td><span class="text-muted">Muhammad Yusuf</span></td>
							<td>{{date('d/m/Y')}}</td>
							<td><span class="label bg-success-400">Belum Bayar</span></td>
							<td><h6 class="text-semibold">Rp. 123.000</h6></td>
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
		<!-- /marketing campaigns -->
	</div>
	<!-- /sales stats -->
</div>
<!-- /Dashboard content -->
@endsection