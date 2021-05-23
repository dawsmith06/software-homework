<h4>Agregar Empleado</h4>
<form action="/employes/save" method="POST">
    @csrf
    <input type="text" name = "name" placeholder = "Nombre" required>
    <input type="text" name = "last_name"  placeholder = "Apellido" required>
    <input type="number"  name = "salary"  placeholder = "Sueldo" required>
    <select name="civil_status" required>
        <option value="SOLTERO">Soltero</option>
        <option value="CASADO">Casado</option>
    </select>
    <br><br>
    <button>Guardar</button>
</form>