@extends('layouts.app')
@section('content')

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> 
<div style="padding-top:7%" class="container-fluid"> 
    <nav class="navbar navbar-default navbar-fixed-top"> 
		<div class="container">
          <div class="navbar-header">
                <!-- Branding Image -->
                <a class="navbar-brand" href="<?php echo route('products.displaygrid');?>" style="margin-top:20px">
                    Nail Salon For You!
                </a>
				
           </div>
			
               
        <ul class="list-inline nav navbar-nav navbar-right">
			<li><a href="<?php echo e(url('/login'));?>"><span style="font-size:30px;" class="glyphicon glyphicon-log-in navbar-btn"></span></a></li>
			<li><a href="<?php echo route('orderdetails.checkout');?>"><span style="font-size:30px;margin-top:8px;" class="glyphicon glyphicon-check navbar-btn"></span></a></li>
            <li><span style="font-size:30px;margin-top:23px;;" class="glyphicon glyphicon-shopping-cart navbar-btn"></span></li> 
			<li><div class="navbar-text" id="shoppingcart" style="font-size:12pt;margin-left:0px;margin-right:0px;margin-top:30px;"></div></li> 
			<li><span id="emptycart" style="font-size:30px;margin-top:23px;" class="glyphicon glyphicon-trash"></span></li>
			<li><a href="<?php echo e(url('/logout'));?>"><span style="font-size:30px;" class="glyphicon glyphicon-log-out navbar-btn"></span></a></li>
            
	</div>
	
    </nav> 
</div>
<div>
<p style="font-size:70pt;text-align:center;"> Nail Salon Services</p><p style="font-size:20pt;text-align:center;"> Check out our different services and start your pampering with us!</p>
<div>
 <ul class="list-inline" style="text-align:center;font-size:25pt;margin-bottom:20pt;font-color:black">
    <li><a href="<?php echo route('products.displaygrid');?>">Home</a></li> |
	<li><a href="<?php echo route('products.showproduct');?>">Services</a></li> |
    <li><a href="<?php echo route('orderdetails.checkout');?>">Booking</a></li> |
    <li><a href="#">About</a></li>
  </ul>
  
</div>
</div>
</div>
@include('flash::message') 
@php $j=0 @endphp 
@foreach($products as $product) 
    @if ($j==0) <div class='row'> @endif 
       <div class="col-sm-4">   
            <div class="panel panel-danger class"> 
            <div class="panel-body"><img style="width:80%;height:200px;" class="img-responsive center-block" src="{{ asset('/img/' . $product->image)}}"/></div>
			 <div class="panel-heading"style="text-align:center">{{ $product->name }}</div> 
		</div>
	
    </div> 
    @php $j++ @endphp 
    @if ($j==3) @php $j=0 @endphp </div> @endif 
@endforeach
@endsection('content')
