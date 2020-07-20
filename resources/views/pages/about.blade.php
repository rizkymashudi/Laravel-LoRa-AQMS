@extends('index')

@section('content')
<!-- MAIN CONTENT -->

<div class="container">
	<div class="row">
		<div class="col-12 mt-5">
			<center><h2 class="tebal mb-5">hello i'm rizky!</h2></center>
			<hr>

			<div class="row mt-5">
				<div class="col-md-4 ">
					<div class="card" style="width: 18rem;">
						<img class="card-img-top" src="me.jpg" alt="Card image cap">
						<div class="card-body">
							<p class="card-text">
								<b>Rizky mashudi</b><br>
								junior web programmer
								<br><br>
								- Programmer - Tester -
							</p>
						</div>
					</div>
				</div>
			</div>

		</div> <!-- end col -->
	</div> <!-- end row -->

	<div class="row mt-5">
		<div class="col-12">
			<h3 class="text-center text-abu1 mt-4">"suka <b>lupa</b> hari"</h3>
		</div>
	</div>
</div>


        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 py-5 d-flex-justify-content-center">
                	{{-- instagram --}}
                	<a class="icn" href="#" target="_blank">
                    	<i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
                	</a>

                	{{-- github --}}           
                	<a class="icn" href="https://github.com/rizkymashudi" target="_blank">
                    	<i class="fab fa-github fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                	</a>

	                {{-- twitter --}}
                	<a class="icn" href="https://twitter.com/slplessjnkie" target="_blank">
                    	<i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                	</a>

                	{{-- linkedin --}}
                	<a class="icn" href="https://www.linkedin.com/in/rizky-mashudi-561897162/" target="_blank">
                    	<i class="fab fa-linkedin-in fa-lg-white-text mr-md-5 mr-3 fa-2x"></i>
                	</a>
                </div>  
            </div>
        </div>
@endsection