@extends('index')

@section('content')
<!-- MAIN CONTENT -->

<div class="container">
	<div class="row">
		<div class="col-12 mt-2">
			<center><h2 class="tebal mb-2" style="color: #1b2a4e">Air Quality Monitoring System using Long Range Communication</h2></center>
			<hr>

			<div class="row mt-5">
				<div class="col-md-4 text-center" style="margin-left: auto; margin-right:auto;text-align: center">
					<div class="card text" style="width: 18rem; margin-left: auto; margin-right:auto;">
						<img class="card-img-top" src="{{ asset('images/Logo/logo.png') }}" alt="Card image cap">
						<div class="card-body">
							<p class="card-text" style="color: #1b2a4e font-size: 5px;">
								<b>Rizky mashudi</b><br>
								junior web developer
								<br><br>
								Web Designer - Web developer - Tester
							</p>
						</div>
					</div>
				</div>
			</div>

		</div> <!-- end col -->
	</div> <!-- end row -->

	<div class="row mt-1">
		<div class="col-12" style="color: #1b2a4e">
			<h3 class="text-center text-abu1 mt-4">"an astrophile person"</h3><br>
			{{-- <h3 class="text-center text-abu1">"besok <b>weekend</b>"</h3> --}}
		</div>
	</div>
	<div class="row mt-5">
		<div class="col-12">
			<div class="row d-flex justify-content-center " style="margin: auto;">
				<div class="col-md-6 py-5 d-flex-justify-content-center text-center">
					{{-- instagram --}}
					<a class="icn col-xl-6" href="https://instagram/slplessjnkie" target="_blank">
						<i class="fab fa-instagram fa-lg white-text fa-2x"></i>
					</a>
		
					{{-- github --}}           
					<a class="icn col-xl-6 " href="https://github.com/rizkymashudi" target="_blank">
						<i class="fab fa-github fa-lg white-text fa-2x"> </i>
					</a>
		
					{{-- twitter --}}
					<a class="icn col-xl-6 " href="https://twitter.com/SlplessJunkie" target="_blank">
						<i class="fab fa-twitter fa-lg white-text fa-2x"> </i>
					</a>
		
					{{-- linkedin --}}
					<a class="icn col-xl-6" href="https://www.linkedin.com/in/rizky-mashudi-561897162/" target="_blank">
						<i class="fab fa-linkedin-in fa-lg-white-text fa-2x"></i>
					</a>
				</div>  
			</div>
		</div>
	</div>
</div>
@endsection