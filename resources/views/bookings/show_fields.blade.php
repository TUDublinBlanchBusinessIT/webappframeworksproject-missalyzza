<!-- Firstname Field -->
<div class="form-group">
    {!! Form::label('firstname', 'Firstname:') !!}
    <p>{{ $booking->firstname }}</p>
</div>

<!-- Surname Field -->
<div class="form-group">
    {!! Form::label('surname', 'Surname:') !!}
    <p>{{ $booking->surname }}</p>
</div>

<!-- Bookingdate Field -->
<div class="form-group">
    {!! Form::label('bookingdate', 'Bookingdate:') !!}
    <p>{{ $booking->bookingdate }}</p>
</div>

<!-- Bookingtime Field -->
<div class="form-group">
    {!! Form::label('bookingtime', 'Bookingtime:') !!}
    <p>{{ $booking->bookingtime }}</p>
</div>

<!-- Productid Field -->
<div class="form-group">
    {!! Form::label('productid', 'Productid:') !!}
    <p>{{ $booking->productid }}</p>
</div>

<!-- Fee Field -->
<div class="form-group">
    {!! Form::label('fee', 'Fee:') !!}
    <p>{{ $booking->fee }}</p>
</div>

