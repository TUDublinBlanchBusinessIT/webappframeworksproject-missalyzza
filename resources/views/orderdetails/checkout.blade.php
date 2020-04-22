@extends('layouts.app') 
@section('content') 

<div>
 <ul class="list-inline" style="text-left:center;font-size:25pt;margin-bottom:50pt;font-color:black;margin-top:50pt;">
    <li><a href="<?php echo route('products.displaygrid');?>">Home</a></li> |
	<li><a href="#">Services</a></li> |
    <li><a href="#">Booking</a></li> |
    <li><a href="#">About</a></li>
  </ul>
</div>
<H2>Place Order</h2> 
{{ Form::open(array('url' => 'orderdetails/placeorder', 'method' => 'post')) }} 
@csrf
<div class="panel panel-danger class" style="padding:20pt"> 
	<div class="form-group">
        <label for="firstname">Firstname:</label>
        <input type="text" name="firstname" class="form-control"> 
    </div> 
	
    <div class="form-group">
        <label for="surname">Surname:</label> 
        <input type="text" name="surname" class="form-control"> 
    </div>
	
	<div class="form-group">
    {!! Form::label('bookingdate', 'Bookingdate:') !!}
    {!! Form::date('bookingdate', null, ['class' => 'form-control','id'=>'bookingdate']) !!}
	</div>
	
	<div class="form-group">
    {!! Form::label('bookingtime', 'Bookingtime:') !!}
    {!! Form::time('bookingtime', null, ['class' => 'form-control','id'=>'bookingtime']) !!}
	</div>
	
	<table class="table table-condensed table-bordered"> 
    <thead> 
        <tr><th>Id</th><th>Name</th><th>Price</th><th>Quantity</th>
        </tr>
    </thead> 
    <tbody> 
    @php $ttlCost=0; $ttlQty=0;@endphp 
    @foreach ($lineitems as $lineitem) 
        @php $product=$lineitem['product']; @endphp 
        <tr> 
            <td><input size="3" style="border:none" type="text" name="productid[]" readonly value="{{ $product->id }}"></td> 
              <td>{{ $product->name }}</td>
              <td><div class="price">{{ $product->price }}</div></td> 
              <td> <input size="3" style="border:none" class="qty" type="text" name="quantity[]" readonly value="<?php echo $lineitem['qty'] ?>"> </td> 
              
              @php $ttlQty = $ttlQty + $lineitem['qty']; $ttlCost = $ttlCost + ($product->price*$lineitem['qty']); 
              @endphp 
        </tr> 
	</div>
</div>

		<script type="text/javascript">
			$('#bookingdate').datetimepicker({
				format: 'YYYY-MM-DD HH:mm:ss',
				useCurrent: false
			})
		</script>

    @endforeach
    </tbody> 
</table> 
<button type="submit" class="btn btn-default center-block" style="background:linear-gradient(to bottom, #ad86bd 5%, #ffadbb 100%);
	background-color:#ad86bd;margin-bottom:10pt;margin-top:20pt">Submit</button> {{ Form::close() }} 
@endsection 