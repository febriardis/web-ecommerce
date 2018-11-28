@extends('layouts.layout')

@section('content')
<div class="content" style="min-height: 400px">
	<div class="container-fluid">
		<div class="panel panel-white">
			<div class="panel-wizard-me">
				<div class="wizard-me">
					<img src="/assets/images/icon1.png" width="100%" height="100%">	
					<div style="border:1px solid black; width: 100px; margin:30px 0px 0px -20px">
						<span>Pesanan Dibuat</span>
						<span>{{date('d M Y')}}</span>
					</div>
				</div>				
				<hr>
				<div class="wizard-me">
					<img src="/assets/images/icon1.png" width="100%" height="100%">	
					<div style="border:1px solid black; width: 100px; margin:30px 0px 0px -20px">
						<p>Pesanan Dikirim</p>
					</div>
				</div>				
				<hr>
				<div class="wizard-me">
					<img src="/assets/images/icon1.png" width="100%" height="100%">	
				</div>				
				<hr>
				<div class="wizard-me">
					<img src="/assets/images/icon1.png" width="100%" height="100%">	
				</div>	
				<hr>
				<div class="wizard-me">
					<img src="/assets/images/icon1.png" width="100%" height="100%">	
				</div>		
				<div class="clear"></div>
			</div>
		</div>
	</div>
</div>
@endsection