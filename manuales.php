<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Manuales</title>
  <link rel="icon" type="image/png" href="IMAGES/ImagesForAll/D.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Gantari:wght@300;400&family=Poppins:wght@300;400&family=Roboto:wght@300&family=Ubuntu:wght@500&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <link rel="stylesheet" href="CSS/style.css" />
  <link rel="stylesheet" href="CSS/servicio.css" />
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg- navbar-light bg-dark navbar-dark">
      <a class="navbar-brand" href="index.php">INICIO</a>

      <ul class="nav">

        <li class="nav-item active">
          <a class="nav-link" href="servicios.php">Servicios</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="manuales.php">Manuales</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="nosotros.php">Nosotros</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="index.php#stripe">Comentarios</a>
        </li>
      </ul>
    </nav>

    <div class="cover d-flex justify-content-center align-items-center flex-column" style="
            background-image: url(IMAGES/ImagesForAll/manu.jpg)
          ">
      <h1>
        <br />
        <font face="Century Gothic" color="white" size="7">Creación de Manuales</font>
      </h1>
      <p>Manuales para procedimientos totalmente personalizados</p>
    </div>
  </header>
  <div class="social-bar">
    <a href="https://www.instagram.com/dayvenfolwerbaxter/" class="icon ig" target="_blank"><img height="30" src="IMAGES/ImagesForAll/Instagram_icon.png.webp" alt="icon"></a>
    <a href="https://wa.me/573128638720" class="icon wh" target="_blank"><img height="30" src="IMAGES/ImagesForAll/whatsappicon.png" alt="icon"></a>
    <a href="mailto:guemacascomputers@gmail.com/" class="icon mai" target="_blank"><img height="30" src="IMAGES/ImagesForAll/mail.png" alt="icon"></a>
  </div>

  <div class="container mt-5">
    <h2>Descripción de la Creación de Manuales</h2>
    <p>
      En GueMaCa's Computers, también nos especializamos en la creación de manuales personalizados para cualquier tipo de sitio web o programas de escritorio. Nuestros manuales son elaborados, asegurando que cada detalle esté claro y sea fácilmente comprensible. Cada manual incluye instrucciones paso a paso, imágenes ilustrativas y consejos útiles que facilitan la comprensión y aplicación de los procedimientos descritos.
    </p>

    <h3>Areas para las cuales realizamos manuales</h3>
    <p>
      Ofrecemos manuales para diversas páginas web, incluyendo:
    <ul>
      <li>Sitios webs de comercio electrónico</li>
      <li>Sitios webs corporativas</li>
      <li>Sitios webs de portafolio</li>
      <li>Sitios webs de servicios</li>
      <li>Programas de escritorio</li>
      <li>Procesos de Windows</li>
      <li>Programas de escritorio</li>
    </ul>
    </p>

    <h2>Costos</h2>
    <p>Nuestros costos varían según la complejidad del manual y la cantidad de información. Contáctanos para obtener un presupuesto personalizado.</p>
    <br><br>
    <h3>Manual de Ejemplo</h3><br>
    <a href="ManualPolitecnico.pdf" target="_blank" class="btn btn-primary">Descargar Manual de Ejemplo</a>
  </div><br><br>

  <!-- Añade esto en la sección donde deseas mostrar el botón -->
  <center>
    <div class="mt-4">
      <button id="masInformacion" class="btn btn-success">Más información</button>
    </div>
  </center>
  <br><br><br>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#masInformacion').click(function() {
        // Guardar en la base de datos
        $.ajax({
          url: 'guardar_solicitud.php', // Cambia por el nombre del archivo PHP que guarda la solicitud
          type: 'POST',
          data: {
            service_type: 'Creación de Manuales' // El tipo de servicio seleccionado
          },
          success: function(response) {
            // Redirigir a WhatsApp después de guardar
            var telefono = '573128638720';
            var mensaje = 'Hola, quiero solicitar información para la creación de un manual';
            var enlaceWhatsApp = 'https://wa.me/' + telefono + '?text=' + encodeURIComponent(mensaje);
            window.open(enlaceWhatsApp, '_blank');
          },
          error: function() {
            alert('Error al guardar la solicitud. Inténtalo de nuevo.');
          }
        });
      });
    });
  </script>


</body>

</html>