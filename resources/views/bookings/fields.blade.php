<!-- Firstname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('firstname', 'Firstname:') !!}
    {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
</div>

<!-- Surname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('surname', 'Surname:') !!}
    {!! Form::text('surname', null, ['class' => 'form-control']) !!}
</div>

<!-- Bookingdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bookingdate', 'Bookingdate:') !!}
    {!! Form::date('bookingdate', null, ['class' => 'form-control','id'=>'bookingdate']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#bookingdate').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Bookingtime Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bookingtime', 'Bookingtime:') !!}
    {!! Form::text('bookingtime', null, ['class' => 'form-control']) !!}
</div>

<!-- Productid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('productid', 'Productid:') !!}
    {!! Form::number('productid', null, ['class' => 'form-control']) !!}
</div>

<!-- Fee Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fee', 'Fee:') !!}
    {!! Form::number('fee', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('bookings.index') }}" class="btn btn-default">Cancel</a>
</div>
