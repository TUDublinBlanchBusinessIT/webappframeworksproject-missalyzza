<!-- Productid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('productid', 'Productid:') !!}
    {!! Form::number('productid', null, ['class' => 'form-control']) !!}
</div>

<!-- Bookingid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bookingid', 'Bookingid:') !!}
    {!! Form::number('bookingid', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total', 'Total:') !!}
    {!! Form::number('total', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('orderdetails.index') }}" class="btn btn-default">Cancel</a>
</div>
