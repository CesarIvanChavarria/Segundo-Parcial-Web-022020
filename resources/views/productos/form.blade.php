
<label for="Tipo">{{'Producto'}}</label>
<input type="text" name="Tipo" id="Tipo" 
value="{{ isset($producto->Tipo)?$producto->Tipo:''}}">
</br>
</br>
<label for="Marca">{{'Marca'}}</label>
<input type="text" name="Marca" id="Marca" 
value="{{isset($producto->Marca)?$producto->Marca:''}}">
</br>
</br>
<label for="Descripcion">{{'Descripcion'}}</label>
<input type="text" name="Descripcion" id="Descripcion" 
value="{{isset($producto->Descripcion)?$producto->Descripcion:''}}">
</br>
</br>
<label for="Precio">{{'Precio'}}</label>
<input type="text" name="Precio" id="Precio" 
value="{{isset($producto->Precio)?$producto->Precio:''}}">
</br>
</br>
<input type="submit" value="{{$Modo=='crear' ? 'Agregar':'Modificar'}}">
</br>
</br>
<a href="{{ url('productos')}}"> Regresar</a>
</br>