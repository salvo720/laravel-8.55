@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left ">
                <h2>Applicazione crud con lavaraval 8.55</h2>
           </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create')}}">Crea un nuovo prodotto</a>
            </div>
        </div>
    </div>


@if($message = Session::get('succes'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Details</th>
        <th width="280 px">Azione</th>
    </tr>

    @foreach ($products as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id)}}" method="POST">
                    {{-- <a class="btn btn-secondary"href="{{ route('products.create',$product->id)}}">Crea</a> --}}
                    <a class="btn btn-info"href="{{ route('products.show',$product->id)}}">Mostra</a>
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id)}}">Modifica</a>
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger" type="Submit" >Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

{!! $products->links() !!}

@endsection