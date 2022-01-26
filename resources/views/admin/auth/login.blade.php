
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Gurudatta Mess</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
		@include('admin.layout.styles')
	</head>
	<body id="kt_body" class="bg-body">
		<div class="d-flex flex-column flex-root">
			<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(assets/media/illustrations/sketchy-1/14.png">
				<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
					<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
						<form class="form w-100" method="POST" action="{{ route('login') }}">
							@csrf
							<div class="text-center mb-10">
								<h1 class="text-dark mb-3">Sign In to cPanel</h1>
							</div>
							<div class="fv-row mb-10">
								<label class="form-label fs-6 fw-bolder text-dark">Email</label>
								<input class="form-control form-control-lg form-control-solid" type="text" name="email" autocomplete="off" />
							</div>
							<div class="fv-row mb-10">
								<div class="d-flex flex-stack mb-2">
									<label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
									<a href="/admin/reset-password" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
								</div>
								<input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" />
							</div>
							<button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
                                Continue
                            </button>
						</form>
					</div>
				</div>
			</div>
		</div>
		@include('admin.layout.scripts')
	</body>
</html>