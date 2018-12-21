@extends('admin.layout')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link rel="stylesheet" type="text/css" href="/adminlte/css/product-card.css">
<script src="/adminlte/css/product-card.js" type="text/javascript"></script>
<!------ Include the above in your HEAD tag ---------->

@section('content')

<div class="container">    
		<div class="row">
			<div class="col-md-8">				
				<div class="panel panel-default  panel--styled">
					<div class="panel-body">
						<div class="col-md-12 panelTop">	
							<div class="col-md-4">	
								<img class="img-responsive" src="http://placehold.it/350x350" alt=""/>
							</div>
							<div class="col-md-8">	
								<h2>Product Name</h2>
								<p>Lorem ipsum dolor sit amet, altera propriae iudicabit eos ne. Vel ut accusam tacimates, prima oratio ius ea. Et duo alii verterem principes, te quo putent melius fabulas, ei scripta eligendi appareat duo.</p>
							</div>
						</div>
						
						<div class="col-md-12 panelBottom">
							<div class="col-md-4 text-center">
								<button class="btn btn-lg btn-add-to-cart"><span class="glyphicon glyphicon-shopping-cart"></span>   Add to Cart</button>						
							</div>
							<div class="col-md-4 text-left">
								<h5>Price <span class="itemPrice">$24.99</span></h5>
							</div>
							<div class="col-md-4">
								<div class="stars">
								 <div id="stars" class="starrr"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>

@endsection