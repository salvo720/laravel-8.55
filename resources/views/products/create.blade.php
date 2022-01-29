@extends('products.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors as $error)
                        <li>{{ $error }}</li>
                @endforeach
            </ul>
    </div>
@endif

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12  text-center">
            <div class="form-group">
                <strong> Nome :</strong>
                <input type="text" name="name" class="form-control" placeholder="Nome">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12  text-center">
            <div class="form-group">
                <strong> Dettagli :</strong>
                <textarea class="form-control" style="height:150px" name="detail" class="form-control" placeholder="Detail"></textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12  text-center">
          <button type="Submit" class="btn btn-primary">Manda</button>
        </div>

    </div>
</form>
@endsection 