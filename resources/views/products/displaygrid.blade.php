@extends('layouts.app')
@section('content')
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> 
<div style="padding-top:7%" class="container-fluid"> 
    <nav class="navbar navbar-default navbar-fixed-top"> 
		<div class="container">
          <div class="navbar-header">
                <!-- Branding Image -->
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>" style="margin-top:20px">
                    Nail Salon For You!
                </a>
           </div>
			
               
        <ul class="list-inline nav navbar-nav navbar-right">
			<li><a href="<?php echo e(url('/login'));?>"><span style="font-size:30px;" class="glyphicon glyphicon-log-in navbar-btn"></span></a></li>
			<li><span style="font-size:30px;margin-right:0px;margin-top:22px;" class="glyphicon glyphicon-check navbar-btn"></span></li> 
            <li><span style="font-size:30px;margin-top:22px;;" class="glyphicon glyphicon-shopping-cart navbar-btn"></span></li> 
			<li><div class="navbar-text" id="shoppingcart" style="font-size:12pt;margin-left:0px;margin-right:0px;margin-top:22px;">{{$totalItems}}</div></li> 
			<li><span id="emptycart" style="font-size:30px;margin-top:22px;" class="glyphicon glyphicon-trash"></span></li> 
            
	</div>
	
    </nav> 
</div>
<div>
<p style="font-size:70pt;text-align:center;"> Nail Salon </p>
<div>
 <ul class="list-inline" style="text-align:center;font-size:25pt;margin-bottom:20pt;font-color:black">
    <li><a href="#">Home</a></li> |
	<li><a href="#">Services</a></li> |
    <li><a href="#">Booking</a></li> |
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
		<div>
            <div class="footer"><button id="addItem" type="button" class="btn btn-default center-block addItem"style="background:linear-gradient(to bottom, #ad86bd 5%, #ffadbb 100%);
	background-color:#ad86bd;margin-bottom:10pt;" value="{{$product->id}}">Add To Basket</button></div> 
        </div> 
    </div> 
    @php $j++ @endphp 
    @if ($j==3) @php $j=0 @endphp </div> @endif 
@endforeach
<script>
$("#emptycart").click(function() { $.ajax({ 
    type: "get", url: "{{ url('products/emptycart')   }}",
    success: function() { 
        $('#shoppingcart').text(0); 
    }, 
    error: function() { 
        alert("problem communicating with the server");
    } 
  }); 
}); 
$(".bth,.addItem").click(function() {
    var total = parseInt($('#shoppingcart').text());
    var i=$(this).val();
    $('#shoppingcart').text(total);    
    $.ajax({
      type: "get",
      url: "{{url('products/additem/')}}" + "/" + i,
      type: "GET",
      success: function(response) {
          total=total+1;
          $('#shoppingcart').text(total);
      },
      error: function() {
          alert("problem communicating with the server");
      }
    });
});
</script>
@endsection('content')