<form action="{{ url('/productos/'. $producto->id) }}" method="POST" >
{{csrf_field()}}
    {{method_field('PATCH')}}
    @include('productos.form',['Modo'=>'Editar'])

</form>