<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Servicios</title>
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
            background-image: url(IMAGES/ImagesForAll/computer.jpg)
          ">
      <h1>
        <br />
        <font face="Century Gothic" color="white" size="7">Servicios</font>
      </h1>
      <p>Elige el tipo de servicio más adecuado a tus necesidades</p>
    </div>
  </header>

  <div class="social-bar">
    <a href="https://www.instagram.com/dayvenfolwerbaxter/" class="icon ig" target="_blank"><img height="30" src="IMAGES/ImagesForAll/Instagram_icon.png.webp" alt="icon"></a>
    <a href="https://wa.me/573128638720" class="icon wh" target="_blank"><img height="30" src="IMAGES/ImagesForAll/whatsappicon.png" alt="icon"></a>
    <a href="mailto:guemacascomputers@gmail.com/" class="icon mai" target="_blank"><img height="30" src="IMAGES/ImagesForAll/mail.png" alt="icon"></a>
  </div>
  <br><br><br><br>

  <section>
    <div class="container mt-5 mb-5">
      <div class="row">
        <div id="prehar" class="col">
          <div class="card servicio-card">
            <img class="card-img-top" src="IMAGES/ImagesForAll/prev.jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">
                <center>
                  <font face="Segoe UI" size="5">Mantenimiento preventivo para hardware</font>
                </center><br>
                <ul>
                  <li>Limpieza de componentes internos (polvo y suciedad).</li><br>
                  <li>Revisión de conexiones y cables.</li><br>
                  <li>Comprobación del estado de ventiladores y disipadores.</li><br>
                  <li>Ajuste de cables para evitar sobrecalentamiento.</li><br>
                  <li>Inspección física de componentes (memoria, disco duro, placa madre, etc.) para detectar daños.</li><br>
                </ul>
              </h5>
              <h4>
                <center>
                  <p><u>$80.000 COP</u></p>
                </center>
              </h4>
              <div class="mb-3">
                <center><button class="btn btn-primary" data-toggle="modal" data-target="#serviceModal"
                    data-service="Mantenimiento preventivo para hardware"
                    data-price="80.000">Seleccionar</button></center>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card servicio-card">
            <img class="card-img-top" src="IMAGES/ImagesForAll/prev2.jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">
                <center>
                  <font face="Segoe UI" size="5">Mantenimiento preventivo para software</font>
                </center><br>
                <ul>
                  <li>Actualización de sistemas operativos y programas.</li><br>
                  <li>Eliminación de archivos temporales y caché.</li><br>
                  <li>Optimización del rendimiento (desfragmentación y limpieza de disco).</li><br>
                  <li>Escaneo de seguridad con antivirus y anti-malware.</li><br>
                  <li>Comprobación y reparación de errores del sistema operativo.</li><br>
                </ul>
              </h5>
              <h4><br>
                <center>
                  <p><u>$60.000 COP</u></p>
                </center>
              </h4>
              <div class="mb-3">
                <center><button class="btn btn-primary" data-toggle="modal" data-target="#serviceModal"
                    data-service="Mantenimiento preventivo para software"
                    data-price="60.000">Seleccionar</button></center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container mt-5 mb-5">
      <div class="row">
        <div id="corhar" class="col">
          <div class="card servicio-card">
            <img class="card-img-top" src="IMAGES/ImagesForAll/correc1.PNG" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">
                <center>
                  <font face="Segoe UI" size="5">Mantenimiento correctivo para hardware</font>
                </center><br>
                <ul>
                  <li>Reemplazo de componentes defectuosos: Cambio de partes dañadas (discos duros, memoria RAM, fuentes de poder, etc.).</li><br>
                  <li>Reparación de conexiones: Arreglo de cables sueltos o dañados, puertos defectuosos o conectores.</li><br>
                  <li>Limpieza exhaustiva de componentes críticos: Si el polvo o suciedad han causado problemas, se realiza una limpieza profunda.</li><br>
                  <li>Reinstalación o ajuste de piezas: Alineación o ajuste de piezas mal colocadas que generan mal funcionamiento.</li><br>
                </ul>
              </h5>
              <h4>
                <center>
                  <p><u>$90.000 COP</u></p>
                </center>
              </h4>
              <div class="mb-3">
                <center><button class="btn btn-primary" data-toggle="modal" data-target="#serviceModal"
                    data-service="Mantenimiento correctivo para hardware"
                    data-price="90.000">Seleccionar</button></center>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card servicio-card">
            <img class="card-img-top" src="IMAGES/ImagesForAll/correc2.jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">
                <center>
                  <font face="Segoe UI" size="5">Mantenimiento correctivo para software</font>
                </center><br>
                <ul>
                  <li>Reinstalación del sistema operativo: En caso de fallos graves, reinstalar para restablecer el funcionamiento.</li><br>
                  <li>Eliminación de virus y malware: Escaneo y eliminación de software malicioso que afecte el rendimiento o la seguridad.</li><br>
                  <li>Recuperación de datos: Restaurar archivos perdidos o dañados por errores o fallas del sistema.</li><br>
                  <li>Corrección de errores del sistema: Reparar fallos en el sistema operativo o aplicaciones.</li><br>
                </ul>
              </h5>
              <h4><br><br>
                <center>
                  <p><u>$100.000 COP</u></p>
                </center>
              </h4>
              <div class="mb-3">
                <center><button class="btn btn-primary" data-toggle="modal" data-target="#serviceModal"
                    data-service="Mantenimiento correctivo para software"
                    data-price="100.000">Seleccionar</button></center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container mt-5 mb-5">
      <div class="row">
        <div id="prdhar" class="col">
          <div class="card servicio-card">
            <img class="card-img-top" src="IMAGES/ImagesForAll/predi1.jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">
                <center>
                  <font face="Segoe UI" size="5">Mantenimiento predictivo para hardware</font>
                </center><br>
                <ul>
                  <li>Monitoreo de rendimiento: Uso de herramientas para evaluar el estado de los componentes y su funcionamiento (temperaturas, velocidades, etc.).</li><br>
                  <li>Análisis de tendencias: Revisión de datos históricos para predecir fallas y establecer patrones de comportamiento.</li><br>
                  <li>Pruebas de diagnóstico programadas: Realización de pruebas regulares para detectar problemas antes de que se conviertan en fallas graves.</li><br>
                  <li>Inspección visual periódica: Comprobación física de los equipos para identificar signos de desgaste o daños visibles.</li><br>
                  <li>Mantenimiento de partes críticas: Reemplazo preventivo de componentes que tienen una vida útil limitada antes de que fallen (como baterías o discos duros).</li>
                </ul>
              </h5>
              <h4>
                <center>
                  <p><u>$55.000 COP</u></p>
                </center>
              </h4>
              <div class="mb-3">
                <center><button class="btn btn-primary" data-toggle="modal" data-target="#serviceModal"
                    data-service="Mantenimiento predictivo para hardware"
                    data-price="55.000">Seleccionar</button></center>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card servicio-card">
            <img class="card-img-top" src="IMAGES/ImagesForAll/predi2.jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">
                <center>
                  <font face="Segoe UI" size="5">Mantenimiento predictivo para software</font>
                </center><br>
                <ul>
                  <li>Actualización programada de software: Planificación de actualizaciones para evitar incompatibilidades y mejorar la seguridad.</li><br>
                  <li>Revisión de logs y registros: Análisis de registros de eventos para identificar patrones de errores o advertencias que puedan indicar problemas.</li><br>
                  <li>Monitoreo de uso de recursos: Vigilancia del uso de CPU, memoria y espacio en disco para evitar cuellos de botella.</li><br>
                  <li>Optimización del rendimiento: Ajustes en configuraciones para mejorar la eficiencia y velocidad del software.</li><br>
                </ul>
              </h5>
              <h4><br><br><br><br><br>
                <center>
                  <p><u>$70.000 COP</u></p>
                </center>
              </h4>
              <div class="mb-3">
                <center><button class="btn btn-primary" data-toggle="modal" data-target="#serviceModal"
                    data-service="Mantenimiento predictivo para software"
                    data-price="70.000">Seleccionar</button></center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container mt-5 mb-5">
      <div class="row">
        <div id="inst" class="col">
          <div class="card servicio-card">
            <img class="card-img-top" src="IMAGES/ImagesForAll/predi2.jpg" alt="Instalación y configuración de equipos" />
            <div class="card-body">
              <h5 class="card-title">
                <center>
                  <font face="Segoe UI" size="5">Instalación y configuración de equipos</font>
                </center><br>
                <ul>
                  <li>Armado de computadora con sus respectivas partes.</li><br>
                  <li>Instalación de sistema operativo.</li><br>
                  <li>Instalación de controladores.</li><br>
                  <li>Instalación de programas básicos como Excel, Word, PowerPoint, Adobe PDF, Chrome u otro navegador.</li><br>
                  <li>Instalación de antivirus y protección del sistema.</li><br>
                  <li>Ajustes para mejorar el rendimiento del equipo.</li>
                </ul>
                <p>Se cobra a valor unitario. Es decir un computador. Si se requiere para más de 2 computadores o para una empresa, se debe especificar.</p>
              </h5>
              <h4>
                <center>
                  <p><u>$65.000 COP</u></p>
                </center>
              </h4>
              <div class="mb-3">
                <center>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#serviceModal"
                    data-service="Instalación y configuración de equipos"
                    data-price="65.000">Seleccionar</button>
                </center>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card servicio-card">
            <img class="card-img-top" src="IMAGES/ImagesForAll/predi1.jpg" alt="Soporte Personalizado" />
            <div class="card-body">
              <h5 class="card-title">
                <center>
                  <font face="Segoe UI" size="5">Soporte Personalizado</font>
                </center><br>
                <p>
                  Si no sabes qué tipo de soporte elegir entre todos los anteriores, o tu solicitud es más específica que requiere otro tipo de detalles. Puedes seleccionar esta opción, este soporte no tiene valor fijo, se ajustará el valor después de haber realizado el servicio. <br><br> En caso de que el servicio cumpla con alguna de las funciones mencionadas en los otros servicios anteriores, no será un soporte personalizado y se tendrá en cuenta como el tipo de servicio correspondiente.
                </p>
              </h5>
              <h4><br><br><br><br><br><br>
                <center>
                  <p><u>$0 COP</u></p>
                </center>
              </h4>
              <div class="mb-3">
                <center>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#serviceModal"
                    data-service="Soporte Personalizado"
                    data-price="0">Seleccionar</button>
                </center>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  </div>
  </div>
  </section>

  <div class="modal fade" id="serviceModal" tabindex="-1" role="dialog" aria-labelledby="serviceModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="serviceModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Se puede extender el cobro dependiendo del trabajo que se vaya a hacer, o los componentes adicionales que se requieran.</p>
          <p><strong>Precio:</strong> $<span id="servicePrice"></span> COP</p>
        </div>
        <div class="modal-footer">
          <a id="whatsappLink" class="btn btn-success" target="_blank">Contactar por WhatsApp</a>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>

  <script>
    $('#serviceModal').on('show.bs.modal', function(event) {
      const button = $(event.relatedTarget);
      const service = button.data('service');
      const price = button.data('price');
      const modal = $(this);

      modal.find('.modal-title').text(service);
      modal.find('#servicePrice').text(price);

      const whatsappMessage = `Hola, estoy interesado en el servicio de ${service}.`;
      const whatsappLink = `https://wa.me/573128638720?text=${encodeURIComponent(whatsappMessage)}`;
      modal.find('#whatsappLink').attr('href', whatsappLink);

      modal.find('#whatsappLink').off('click').on('click', function(event) {
        event.preventDefault();
        registrarYRedirigir(service, whatsappLink);
      });
    });

    function registrarYRedirigir(service, whatsappLink) {
      $.ajax({
        url: 'registrar_servicio.php',
        type: 'POST',
        data: {
          service: service
        },
        success: function(response) {
          if (response.includes("Registro exitoso")) {
            window.open(whatsappLink, '_blank');
          }
        },
        error: function() {}
      });
    }
  </script>



</body>

</html>