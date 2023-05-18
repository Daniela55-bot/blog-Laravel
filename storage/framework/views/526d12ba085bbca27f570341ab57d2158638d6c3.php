<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> Blog </title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo e(asset('assets/css/styles.css')); ?>" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.html"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4"  href="http://127.0.0.1:8000/inicio">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/contactenos">Contactenos</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="http://127.0.0.1:8000/inicio">Cerrar Sesion</a></li>
                    </ul>
                    <form class="d-flex" role="search">
                      <a class="nav-link active" href="/sesion"></a>
                    <input class="form-control me-2" type="search" placeholder="Buscador" aria-label="Buscador">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                  </form>
                </div>
            </div>
        </nav>
		<br>
		<br>

  <img src="<?php echo e(asset('imagen/blog3.jpg')); ?>" width="1350" height="350" >

  <br>
  <br>
  <br>
  
  <center><a href="http://127.0.0.1:8000/publicar "type="button" class="btn btn-outline-warning">Publicar Informacion</a></center>
  <br>
  <br>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card">
        <img src="<?php echo e(asset('imagen/noticia2.png')); ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <a href="http://127.0.0.1:8000/noticia1">LAS 10 MEJORES APLICACIONES: APPS PARA ESTUDIANTES</a>
          <p class="card-text">Mi generación de estudiantes ha establecido la tendencia de dispositivos personales, utilizando teléfonos inteligentes, tabletas y computadoras portátiles en casi todas nuestras tareas e interacciones cotidianas, tanto dentro como fuera del aula. Con el número de aplicaciones que se crean exponencialmente cada día, he observado a varios de mis amigos de la escuela....
            <a href="http://127.0.0.1:8000/noticia1">[Mas]</a>
          </p>
        </div>
        <div class="card-footer">
          <small class="text-body-secondary">Sep 14, 2023 | 2023</small>
        </div>
        </div>
     
    </div>
    <div class="col">
      <div class="card">
        <img src="<?php echo e(asset('imagen/noticia1.png')); ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <a href="">APRENDA CINCO HERRAMIENTAS DE SOFTWARE PARA EL AULA ¡EN CINCO MINUTOS!</a>
          <p class="card-text">Todos queremos crear lecciones divertidas y actividades que hagan que el aprendizaje sea atractivo e interactivo para nuestros estudiantes. Sin embargo, no queremos que tarde o que sea demasiado complicado.....
            <a href="">[Mas]</a>
          </p>
        </div>
        <div class="card-footer">
            <small class="text-body-secondary"> Sep 07, 2023 | 2023</small>
          </div>
          
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="<?php echo e(asset('imagen/noticia3.png')); ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <a href="">LAS 10 MEJORES APLICACIONES DE STEM</a>
          <p class="card-text">El crecimiento de las carreras en los campos de STEM (ciencia, tecnología, ingeniería y matemáticas) no muestra signos de desaceleración, entonces, ¿cómo nos aseguramos que los estudiantes estén listos para los trabajos del mañana? Al incorporar el aprendizaje de STEM dentro del aula, podemos brindarles a nuestros alumnos las herramientas que necesitan para tener éxito en el futuro, y así despertar el interés en estos campos....
            <a href="">[Mas]</a>
          </p>
        </div>
        <div class="card-footer">
            <small class="text-body-secondary"> Nov 15, 2023 | 2023</small>
          </div>
      </div>
    </div>
  </div>
    
<br>
<br>
<br>

<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card">
        <img src="<?php echo e(asset('imagen/noticia4.png')); ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <a href="">LAS 10 MEJORES APLICACIONES: APPS PARA DOCENTES</a>
          <p class="card-text">El uso de dispositivos personales en el aula sigue siendo una de las tendencias más grandes de EdTech (Tecnología Educativa) de este año. Ya sea que tenga un teléfono inteligente, tableta o laptop, las aplicaciones son la mejor manera de aprovechar todo lo que su dispositivo tiene para ofrecer. Sin embargo, con más de 2 millones de aplicaciones  -y contando- para elegir, encontrar aplicaciones para descargar puede ser una tarea desalentadora....
            <a href="">[Mas]</a>
          </p>
        </div>
        <div class="card-footer">
          <small class="text-body-secondary">Agos 28, 2023 | 2023</small>
        </div>
        </div>
     
    </div>
    <div class="col">
      <div class="card">
        <img src="<?php echo e(asset('imagen/noticia6.png')); ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <a href="">REDES SOCIALES PARA ESTUDIANTES QUE NUNCA HA ESCUCHADO</a>
          <p class="card-text">Este título puede ser un poco engañoso -tal vez debería ser "redes sociales que los estudiantes usan y que yo nunca he oído hablar ". Algunos de estos sitios son más prominentes, más familiares y tienen más suscriptores que otros. Todos ellos encajan en una categoría de redes sociales o sitios que los estudiantes de su escuela probablemente están usando....
            <a href="">[Mas]</a>
          </p>
        </div>
        <div class="card-footer">
            <small class="text-body-secondary">Agos 2, 2023 | 2023</small>
          </div>
          
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="<?php echo e(asset('imagen/noticia5.png')); ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <a href="">18 PASOS PARA ORGANIZARSE CON TECNOLOGÍA PARA EL NUEVO CICLO ESCOLAR</a>
          <p class="card-text">A medida que las vacaciones de verano nos dicen adiós y arrancamos las clases, a menudo sentimos que se nos va el sueño pensando en todas las cosas que debemos hacer para organizarnos.....
            <a href="">[Mas]</a>
          </p>
        </div>
        <div class="card-footer">
            <small class="text-body-secondary">Agos 28, 2023 | 2023</small>
          </div>
      </div>
    </div>
  </div>
    



  <br>
<br>
<br>

<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card">
        <img src="<?php echo e(asset('imagen/noticia7.png')); ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <a href="">EMPRESAS EDTECH QUE LOS DOCENTES AMAN</a>
          <p class="card-text">En los últimos años, la educación para K-12 ha comenzado a cambiar la manera de entregar tecnología, la cual mantiene el programa que se ejecuta en segundo plano. Sin embargo, ha habido un nuevo énfasis en las actuaciones de la etapa principal: involucrar a los estudiantes en formas innovadoras para mejorar sus resultados.....
            <a href="">[Mas]</a>
          </p>
        </div>
        <div class="card-footer">
          <small class="text-body-secondary">Jul 18, 2023 | 2023</small>
        </div>
        </div>
     
    </div>
    <div class="col">
      <div class="card">
        <img src="<?php echo e(asset('imagen/noticia8.jpg')); ?>" class="card-img-top"  alt="...">
        <div class="card-body">
            <a href="">No puedo borrar carpetas ni archivos de la papelera 🤦🏻‍♂️ ¿Cómo lo soluciono?</a>
          <p class="card-text">¿Tienes unos archivos o unas carpetas en la papelera de Windows y no eres capaz de borrarlos? ¿Se resisten hasta al exorcismo que has intentado 3 veces? ¿Son cosas borradas del "maldito" OneDrive? (seguro que sí) ¿Tienes un TOC como yo que te impide dormir sabiendo que siguen ahí día tras día? Pues en este post supersimple te cuento cómo librarte de ellos de una vez por todas...
            <a href="">[Mas]</a>
          </p>
        </div>
        <div class="card-footer">
            <small class="text-body-secondary">Feb 18, 2023 | 2023</small>
          </div>
          
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="<?php echo e(asset('imagen/noticia9.jpg')); ?>" class="card-img-top"alt="...">
        <div class="card-body">
            <a href="">Cómo averiguar la clave del Wifi en Windows?</a>
          <p class="card-text">Si has perdido la clave de tu Wifi o quieres averiguar cuál era la de una red a la que te conectaste en el pasado desde tu ordenador pero no sabes cuál era, en este post te cuento dos maneras de hacerlo: una visual y otra con la línea de comandos. Nunca más "No me acuerdo de la clave de la Wifi" si te la pide un invitado....
            <a href="">[Mas]</a>
          </p>
        </div>
        <div class="card-footer">
            <small class="text-body-secondary">Sep 11, 2023 | 2023</small>
          </div>
      </div>
    </div>
  </div><?php /**PATH C:\xampp\htdocs\blog_laravel\resources\views/blog/create.blade.php ENDPATH**/ ?>