<!-- Productid Field -->
<div class="form-group">
    {!! Form::label('productid', 'Productid:') !!}
    <p>{{ $orderdetails->productid }}</p>
</div>

<!-- Bookingid Field -->
<div class="form-group">
    {!! Form::label('bookingid', 'Bookingid:') !!}
    <p>{{ $orderdetails->bookingid }}</p>
</div>

<!-- Total Field -->
<div class="form-group">
    {!! Form::label('total', 'Total:') !!}
    <p>{{ $orderdetails->total }}</p>
</div>

