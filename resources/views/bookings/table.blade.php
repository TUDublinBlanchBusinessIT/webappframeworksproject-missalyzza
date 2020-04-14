<div class="table-responsive">
    <table class="table" id="bookings-table">
        <thead>
            <tr>
                <th>Firstname</th>
        <th>Surname</th>
        <th>Bookingdate</th>
        <th>Bookingtime</th>
        <th>Productid</th>
        <th>Fee</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($bookings as $booking)
            <tr>
                <td>{{ $booking->firstname }}</td>
            <td>{{ $booking->surname }}</td>
            <td>{{ $booking->bookingdate }}</td>
            <td>{{ $booking->bookingtime }}</td>
            <td>{{ $booking->productid }}</td>
            <td>{{ $booking->fee }}</td>
                <td>
                    {!! Form::open(['route' => ['bookings.destroy', $booking->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('bookings.show', [$booking->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('bookings.edit', [$booking->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
