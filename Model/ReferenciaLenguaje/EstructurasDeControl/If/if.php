<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>IF</title>
  </head>
  <body>

    <form action="if.php" method="post">
      <label for="delegacion">Elige la delegación en la que resides:</label>
        <select name="delegacion">
          <option value="Álvaro Obregón">Álvaro Obregón</option>
          <option value="Azcapozalco"> Azcapozalco</option>
          <option value="Benito Juárez">Benito Juárez</option>
          <option value="Coyoacán">Coyoacán</option>
          <option value="Cuajimalpa de Morelos">Cuajimalpa de Morelos</option>
          <option value="Cuahutémoc">Cuahutémoc</option>
          <option value="Gustavo A. Madero">Gustavo A. Madero</option>
          <option value="Iztacalco">Iztacalco</option>
          <option value="Iztapalapa">Iztapalapa</option>
          <option value="Magdalena Contreras">Magdalena Contreras</option>
          <option value="Miguel Hidalgo">Miguel Hidalgo</option>
          <option value="Milp Alta">Milp Alta</option>
          <option value="Tláhuac">Tláhuac</option>
          <option value="Tlalpan">Tlalpan</option>
          <option value="Venustiano Carranza">Venustiano Carranza</option>
          <option value="Xochimilco">Xochimilco</option>
        </select>
      <input type="submit" value="Enviar">
    </form>

    <?php

    $delegacion=$_POST['delegacion'];

if(isset($delegacion)){

      switch ($delegacion) {
        case 'Álvaro Obregón':
                print('Resides en la delegación: Álvaro Obregón ¿es correcto?');
          break;

        case 'Azcapozalco':
                print('Resides en la delegación: Azcapozalco ¿es correcto?');
          break;

        case 'Benito Juárez':
                print('Resides en la delegación: Benito Juárez ¿es correcto?');
          break;

        case 'Coyoacán':
                print('Resides en la delegación: Coyoacán ¿es correcto?');
          break;

          case 'Cuajimalpa de Morelos':
                  print('Resides en la delegación: Cuajimalpa de Morelos ¿es correcto?');
            break;

          case 'Cuahutémoc':
                  print('Resides en la delegación: Cuahutémoc ¿es correcto?');
            break;

          case 'Gustavo A. Madero':
                  print('Resides en la delegación: Gustavo A. Madero ¿es correcto?');
           break;

          case 'Iztacalco':
                  print('Resides en la delegación: Iztacalco ¿es correcto?');
            break;

          case 'Iztapalapa':
                  print('Resides en la delegación: Iztapalapa ¿es correcto?');
           break;

          case 'Magdalena Contreras':
                  print('Resides en la delegación: Magdalena Contreras ¿es correcto?');
            break;

          case 'Miguel Hidalgo':
                  print('Resides en la delegación: Miguel Hidalgo ¿es correcto?');
            break;

          case 'Milp Alta':
                  print('Resides en la delegación: Milp Alta ¿es correcto?');
            break;

          case 'Tláhuac':
                  print('Resides en la delegación: Tláhuac ¿es correcto?');
            break;

          case 'Tlalpan':
                  print('Resides en la delegación: Tlalpan ¿es correcto?');
            break;

          case 'Venustiano Carranza':
                  print('Resides en la delegación: Venustiano Carranza ¿es correcto?');
            break;

           case 'Xochimilco':
                  print('Resides en la delegación: Xochimilco ¿es correcto?');
            break;

            default:
                  print('Indica la Delegación en la que resides');
              break;
      }
  } else {
    print('Debes de seleccionar una delegación para poder continuar');
  }
?>
  </body>
</html>
