<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Parcial Final WEB</title>
</head>
<body>
<h1>CREATE</h1>
    <form action="/par/index.php/Welcome/insertar" method="post">
          <div class="first">
          <div class="namee">
            <label for="name_new">Nombre </label><br>
            <input
              type="text"
              id="New_user"
              name="New_user"
              placeholder=""
              required
            />
          </div>
          <div>
            <label for="Nickname">Sexo</label><br>
            <input
              type="text"
              id="Nick"
              name="Nick"
              placeholder=""
              required
            />
          </div>
           <div class="edad">
            <label >edad</label><br>
            <input
              type="text"
              id="correo"
              name="correo"
              required
            />
        </div>
          <div class="nivel">
            <label for="Email">Nivel Academico</label><br>
            <input
              type="text"
              id="correo2"
              name="correo2"
              required
            />
          </div>
          <div class="nacionalidad">
            <label >Nacionalidad</label><br>
            <input
              type="text"
              id="correo3"
              name="correo3"
              required
            />
          </div>
          <div>
            <label for="Phone">Celular</label><br>
            <input
              type="tel"
              id="telefono"
              name="telefono"
              placeholder="2222-2222"
              required
            />
          </div>
          
          <div>
          <input type="submit" value="Terminar registro" class="but" id="prueba"/>
          </div>
        </form>
		<h1>Read</h1>
		<table>
		<th>id</th>
                  <th>Nombre</th>
                  <th>Sexo</th>
                  <th>edad</th>
                  <th>nivel</th>
				  <th>Nacionalidad</th>
				  <th>numero de celular</th>
              
              
              <?php
foreach($personas->result() as $curso){ ?>
<tr>
<td><?php echo $curso->id; ?></td>
<td><?php echo $curso->nombre; ?></td>
<td><?php echo $curso->edad; ?></td>
<td><?php echo $curso->nivel; ?></td>
<td><?php echo $curso->nacionalidad; ?></td>
<td><?php echo $curso->celular; ?></td>
<td><?php echo $curso->sexo; ?></td>
</tr>

<?php }
?>
            
          </table>
		  <h1>UPDATE</h1>
		  <form action="/par/index.php/Welcome/buscarID" method="post">
          <div class="first">
          <div class="namee">
            <label for="name_new">ID </label><br>
            <input
              type="text"
              id="New_user"
              name="New_user"
              placeholder=""
              required
            />
          <div>
          <input type="submit" value="Buscar por ID" class="but" id="prueba"/>
          </div>
        </form>
		<form action="/par/index.php/Welcome/buscarnombre" method="post">
          <div class="first">
          <div class="namee">
            <label for="name_new">Nombre </label><br>
            <input
              type="text"
              id="New_user"
              name="New_user"
              placeholder=""
              required
            />
          <div>
          <input type="submit" value="Buscar por nombre" class="but" id="prueba"/>
          </div>
        </form>
		<h1>Delete</h1>
		<form action="/par/index.php/Welcome/borrarID" method="post">
          <div class="first">
          <div class="namee">
            <label for="name_new">ID </label><br>
            <input
              type="text"
              id="New_user"
              name="New_user"
              placeholder=""
              required
            />
          <div>
          <input type="submit" value="Borrar por ID" class="but" id="prueba"/>
          </div>
        </form>
		<form action="/par/index.php/Welcome/borrarnombre" method="post">
          <div class="first">
          <div class="namee">
            <label for="name_new">Nombre </label><br>
            <input
              type="text"
              id="New_user"
              name="New_user"
              placeholder=""
              required
            />
          <div>
          <input type="submit" value="Borrar por nombre" class="but" id="prueba"/>
          </div>
        </form>
</body>
</html>