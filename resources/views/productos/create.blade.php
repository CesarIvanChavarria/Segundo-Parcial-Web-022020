<form action="{{url('/productos')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
@include('productos.form',['Modo'=>'crear'])


</form>
