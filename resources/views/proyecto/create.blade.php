boton para crear nuevos proyectos
<form action="{{route('proyecto.store')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<!-- imprime una llave de acceso para que cuando nostros hagamos el envio a 
estorage nos deje entrar gracias a que tenemos a esta llave -->

<label for="titu_proy">titu_proy</label>
<input type="text" name ="titu_proy" id= "titu_proy">
<br>

<label for="justi_proy">justi_proy</label>
<input type="text" name ="justi_proy" id= "justi_proy">
<br>

<label for="ambi_proy">ambi_proy</label>
<input type="text" name ="ambi_proy" id= "ambi_proy">
<br>

<label for="pobla_proy">pobla_proy</label>
<input type="text" name ="pobla_proy" id= "pobla_proy">
<br>

<label for="dirig_proy">dirig_proy</label>
<input type="text" name ="dirig_proy" id= "dirig_proy">
<br>

<label for="doc_val_proy">doc_val_proy</label>
<input type="text" name ="doc_val_proy" id= "doc_val_proy">
<br>

<label for="presu_proy">presu_proy</label>
<input type="text" name ="presu_proy" id= "presu_proy">
<br>
<label for="metod_proy">metod_proy</label>
<input type="text" name ="metod_proy" id= "metod_proy">
<br>
<label for="eje_proy">eje_proy</label>
<input type="text" name ="eje_proy" id= "eje_proy">
<br>
<label for="fe_ini_proy">fe_ini_proy</label>
<input type="date" name ="fe_ini_proy" id= "fe_ini_proy">
<br>
<label for="fe_fin_proy">fe_fin_proy</label>
<input type="date" name ="fe_fin_proy" id= "fe_fin_proy">
<br>
<label for="diag_proy">diag_proy</label>
<input type="text" name ="diag_proy" id= "diag_proy">
<br>
<label for="resul_proy">resul_proy</label>
<input type="text" name ="resul_proy" id= "resul_proy">
<br> 

<input type="submit"  value="Agregar">

</form>
