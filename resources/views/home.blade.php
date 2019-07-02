@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-2">
            
        </div>
        <div class="col-md-10">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @include('productos')
                    @include('carrito')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script type="text/javascript"> 
    // window.onload=function () {
    //     $('#carrito').hide();
    // }
    window.onload = function() {
        window.onload=
        $('#carrito').hide()
    };

    function ver_carrito() {
        $('#productos').hide()
        $('#carrito').show();
    }    
    function ver_productos() {
        $('#productos').show()
        $('#carrito').hide();
    } 

    // $('#btnCarrito').click(function (e) {
    //     // $('#productos').hide()
    //     // $('#carrito').show();
    // });
</script>


