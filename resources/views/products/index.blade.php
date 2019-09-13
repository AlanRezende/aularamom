@extends('layouts.app')

@section('content')
<script>
    function verif(name){
        var c = confirm("Deseja realmente deletar o produto " + name + "?");

        if(c == true){
            return true;
        }else{
            alert('Nenhuma alteração foi realizada.');
            return false;
        }
    }
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Produtos</div>

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif

                    {{ $products->links() }}

                    @foreach($products as $product)

                        {{ $product->id }} <br>
                        {{ $product->name }} <br>
                        R${{ $product->value }} <br>
                        Quantidade em estoque: {{ $product->quantity }} <br>

                        <form action="/products/{{ $product->id }}"  method="post" onsubmit="return verif('{{ $product->name }}');">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm">Remover</button>
                        </form>

                        <hr>

                    @endforeach

                    {{ $products->links() }}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
