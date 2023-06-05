<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/problemaStem.css"/>

    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script src="js/calcularStem.js"></script>
</head>
<body>
  <section class="wrapper">
    <header>
      <h1 class="logo"><a href="stem.html">CiTIM</a></h1>
      
    </header>
    <section id="contenedor">
      <section  class="problema">
        <h2>Problema: calcular el peso de una persona de 56 [kg] en la superficie del satélite.
</h2>
        <p>Descripción:</p>
        <p>e. El radio de la Tierra es 4 veces mayor al de la Luna.<br>
        </p>
      </section>
      <section  class="esquemaProblema">
        <h2>Esquema</h2>
        <center>
        <img class="imgProblema" src="images/img1.jpg">
        </center>
      </section>
      <section class="formulas">
        <h2>Fórmulas</h2>
        G= 6.67 × 10−11 [m3 kg−1 s−2 ]
      </section>
      <section class="datos">
        <h2>Datos:</h2>
        Conociendo que la masa de la Luna es 1/81 veces

      
      </section>
      <section class="calculos">
        <h2>Solución para Calcular la distancia total</h2>
        <p>a)"El peso de una persona de 56 kg en la superficie de la Luna es 56<br>
        </p>
        
        
        <button onclick="calcularPesoEnLuna();">Presiona para calcular</button>
      </section>
      <?php
    function calcularPesoEnLuna() {
      $masaPersona = 56;
      $masaTierra = 5.97E24;
      $masaLuna = $masaTierra / 81;
      $radioTierra = 4;
      $radioLuna = $radioTierra / 4;
      $gravedad = 6.67E-11;
      
      $pesoEnTierra = $masaPersona * $gravedad * $radioTierra * $radioTierra / ($radioTierra * $radioTierra);
      $pesoEnLuna = $pesoEnTierra * $masaLuna / $masaTierra;
      
      return $pesoEnLuna;
    }
?>
 
      <section class="resultado">
        <h2>Resultado:</h2>
        <div id="resultadoA"></div>
        <?php
 print "<h1>  densidad = ".calcularPesoEnLuna(). "La función calcularPesoEnLuna() se define sin ningún argumento.,</h1>";
?>
        
      </section>
    </section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2023
    </footer>
  </section>
</body>
</html>
