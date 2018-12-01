@extends('layouts.layout_login_admin')

@section('content')
<div style="margin-top: 100px">
	<!-- Advanced login -->
	<form action="/admin/dashboard">
		<div class="login-form">
			<div class="text-center">	
				<img src="/assets/images/logo_dark.png" alt="" width="200px" height="30px">	
				<h5 class="content-group-lg">Login to your account <small class="display-block">Enter your credentials</small></h5>
			</div>

			<div class="form-group has-feedback has-feedback-left">
				<input type="text" class="form-control input-lg" placeholder="Username">
				<div class="form-control-feedback">
					<i class="icon-user text-muted"></i>
				</div>
			</div>

			<div class="form-group has-feedback has-feedback-left">
				<input type="password" class="form-control input-lg" placeholder="Password">
				<div class="form-control-feedback">
					<i class="icon-lock2 text-muted"></i>
				</div>
			</div>

			<div class="form-group">
				<button type="submit" class="btn bg-blue btn-block btn-lg">Login <i class="icon-arrow-right14 position-right"></i></button>
			</div>
		</div>
	</form>
	<!-- /advanced login -->
</div>
@endsection