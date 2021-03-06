@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Orderdetails
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($orderdetails, ['route' => ['orderdetails.update', $orderdetails->id], 'method' => 'patch']) !!}

                        @include('orderdetails.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection