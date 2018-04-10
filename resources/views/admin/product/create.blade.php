@extends('admin.layout.admin')

@section('content')

    <h3>Add Product</h3>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {!! Form::open(['route' => 'product.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

            <div class="form-group">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}
            </div>

            <div class="form-group">
                {{ Form::label('description', 'Description') }}
                {{ Form::text('description', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('publisher', 'Publisher') }}
                {{ Form::text('publisher', null, array('class' => 'form-control')) }}
            </div>



            <div class="form-group">
                {{ Form::label('category_id', 'Categories') }}
                {{ Form::select('category_id', [1=>'coding'], null, ['class' => 'form-control','placeholder'=>'Select Genre']) }}
            </div>

            <div class="form-group">
                {{ Form::label('image', 'Image') }}
                {{ Form::file('image',array('class' => 'form-control')) }}
            </div>

            {{ Form::submit('Create', array('class' => 'btn btn-primary')) }}
            {!! Form::close() !!}

        </div>
    </div>



@endsection