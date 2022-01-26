
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
						<form class="form w-100">
							<div class="text-center mb-10">
								<h1 class="text-dark mb-3">Forgot Password ?</h1>
								<div class="text-gray-400 fw-bold fs-4">Enter your email to reset your password.</div>
							</div>
							<div class="fv-row mb-10">
								<label class="form-label fw-bolder text-gray-900 fs-6">Email</label>
								<input class="form-control form-control-solid" type="email" placeholder="" name="email" autocomplete="off" />
							</div>
							<div class="d-flex flex-wrap justify-content-center pb-lg-0">
								<button type="button" class="btn btn-lg btn-primary fw-bolder me-4">
									Submit
								</button>
								<a href="/admin/login" class="btn btn-lg btn-light-primary fw-bolder">Cancel</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		@include('admin.layout.scripts')
	</body>
</html>