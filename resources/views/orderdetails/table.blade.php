<div class="table-responsive">
    <table class="table" id="orderdetails-table">
        <thead>
            <tr>
                <th>Productid</th>
        <th>Bookingid</th>
        <th>Total</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($orderdetails as $orderdetails)
            <tr>
                <td>{{ $orderdetails->productid }}</td>
            <td>{{ $orderdetails->bookingid }}</td>
            <td>{{ $orderdetails->total }}</td>
                <td>
                    {!! Form::open(['route' => ['orderdetails.destroy', $orderdetails->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('orderdetails.show', [$orderdetails->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('orderdetails.edit', [$orderdetails->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
