

    @if(Session ::has('Mensaje')){{
    Session::get('Mensaje')
    }}
    @endif

 <a href="{{ url('productos/create')}}" class="btn btn-success"> Agregar Nuevo Producto</a>
 </br>
 </br>
 
 <table class="table table-light">
    <thead class="thead-light">
       
        <tr>
            <th>#</th>
            <th>Producto</th>
            <th>Marca</th>
            <th>Descripcion</th>
            <th>Precio</th> 
        </tr>
    </thead>
    
    
    <tbody>
        
     @foreach ($productos as $producto)
                 
        <tr>
            <td>{{$loop->iteration}}</td>
            <th>{{$producto->Tipo}}</th> 
            <th>{{$producto->Marca}}</th> 
            <th>{{$producto->Descripcion}}</th> 
            <th>{{$producto->Precio}}</th> 
            <th>
            
            <a href="{{ url('/productos/'.$producto->id.'/edit') }}">
                Editar
            </a>

            <form method="post" action="{{ url ('/productos/'.$producto->id) }} ">
            {{csrf_field()}}
            {{method_field('DELETE') }}
            <button type="submit" onclick="return confirm('Borrar')">Borrar</button>
            </form>
            </th> 
        </tr>

     @endforeach
    </tbody>
 </table>
