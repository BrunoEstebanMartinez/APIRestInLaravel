<!DOCTYPE html>
<body> 

    <div 
    class = "container-1">
     <div 
     class = "content-1">
         <br><br>
       <div 
       class = "content-1-1">
       <h1>¡Unete a nuestro equipo!</h1><br><br>
        
        <span>Especialidad</span>  
         
        <select 
        name = "especialidad" 
        id = "Especial-1" 
        method = "post" 
        action = "">
           <option value = ""></option>
           <option value = "Literatura">Literatura</option>
           <option value = "Arte">Artes</option>
           <option value = "Musica">Música</option>
           <option value = "diseñodigital">Diseño digital</option>
           </select>
           <br>
           <br>
           <input 
           class = "btn-1-1-next" 
           type = "button" 
           value = "Siguiente" 
           name = "validacion">
           <br><br>
        <table 
        class = "tabla-1 table-lock">
       <tr>
        <th>Datos personales</th>
         <td>
         <form action = "" method = "post" class = "for-1" id = "For-1">
        <input type = "text" placeholder = "Primer nombre" name = "" required> 
        <input type = "text" placeholder = "Segundo nombre" required>
        <input type = "text" placeholder = "Apellido paterno" required>
        <input type = "text" placeholder = "Apellido materno" required>
        <input type = "radio" value = "famale" name = "gender" required><span>F</span>
        <input type = "radio"  value = "male" name = "gender" required><span>M</span>
        <input type = "date" required>
        <input type = "email" placeholder = "Correo electrónico" required>
        <input type = "tel" placeholder = "Número telefónico 1" required>
        <input type = "text" placeholder = "RFC" required>
        </form>
         </td>
       </tr>
       <tr>
        <th>Domicilio</th>
        <td>
         <form 
         action = "" 
         method = "post" 
         class = "for-2" 
         id = "For-2">

             <input type = "text" placeholder = "Calle" required>
             <input type = "text" placeholder = "No. Exterior" required>
             <input type = "text" placeholder = "No. Interior" required>
             <input type = "text" placeholder = "Colonia" required> <br><br>
             <input type = "text" placeholder = "Localidad" required>
             <input type = "text" placeholder = "Municipio" required>
             <input type = "text" placeholder = "Estado" required>
             <input type = "text" placeholder = "Código postal" required>
             
         </form>
        </td>
       </tr>
        </table>
           <br>
           <input 
           class = "btn" 
           type = "submit" 
           value = "Siguiente" 
           name = "alta" 
           id = "Siguiente-1">
        <br>
        <h2> Si ya eres parte, inicia con tu cuenta</h2>
           <a href = "other"><input type = "button" value = "Iniciar sesión" class = "btn-1-1-1-register" id = "Inicio-1"></a>
            </div>    
    </div>

    
  <div>
    <lottie-player 
    class = lottie-animation-container-1
    src="https://assets6.lottiefiles.com/packages/lf20_wczpanc1.json"    background="transparent"  
    background="transparent"  
    speed="1"  
    style="width: 700px; height: 729px;"  
    loop  
    autoplay>
     </lottie-player>
    <div>
    <?php include("../resources/views/global.php");?>
</body>
</html>
