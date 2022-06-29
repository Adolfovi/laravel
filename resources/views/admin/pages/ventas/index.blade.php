@extends('admin.layout.table_form')
@section('content')

<!-- ######código prototipo para indicar###### -->
<!-- ######que estructurá seguirán los######## -->
<!-- ######elementos y/o etiquetas###########  -->
<h3>DATOS DE LA VENTA:</h3>
<br>
<br>
@if(isset($carts))
@foreach ($carts as $cart)
<h4>Número de ticket</h4>
<p>{{$cart->ticket_number}}</p>
<h4>Fecha de creación</h4>
<p>{{$cart->date_emision}}</p>
<h4>Método de pago</h4>
<p>{{$cart->pmethod}}</p>
<h4>Total Base</h4>
<p>{{$cart->total_base_price}}€</p>
<h4>Total IVA</h4>
<p>{{$cart->total_tax_price}}€</p>
<h4>Total</h4>
<p>{{$cart->total_base_price + $cart->total_tax_price}}€</p>
<table border="1">
    <tr>
<td></td>
<td>Producto</td>
<td>Precio</td>
<td>Cantidad</td>
    </tr>
    <tr>
        <td></td>
        <td>{{$cart->product}}</td>
<td></td>
<td></td>
    </tr>
</table>
<br>
<br>
@endforeach
@endif
@endsection