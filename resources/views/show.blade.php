<h4>Actualizar Empleado {{$employe->name}} {{$employe->last_name}}</h4>
<form action="/employes/{{$employe->id}}" method="POST">
    @csrf
    <input type="hidden" name = "_method" value="PUT">
    <input type="text" name = "name" placeholder = "Nombre" required value = "{{$employe->name}}">
    <input type="text" name = "last_name"  placeholder = "Apellido" required value = "{{$employe->last_name}}">
    <input type="number"  name = "salary"  placeholder = "Sueldo" required value = "{{$employe->salary}}">
    <select name="civil_status" required>
        <option value="SOLTERO" {{$employe->civil_status == "SOLTERO" ? 'selected' : ''}} >Soltero</option>
        <option value="CASADO" {{$employe->civil_status == "CASADO" ? 'selected' : ''}}>Casado</option>
    </select>
    <br><br>
    <button>Actualizar</button>
</form>