<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegistrarAlumno</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link src="code.jquery.com_jquery-3.7.1.js">

</head>
<body>
   <?php include 'menu.php'; ?>
   <div class="container">
    <div class="row">
        <div class="col-12">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="">Nombre:</label>
                    <input name="Nombre" type="text" class="form-control" placeholder="Teclea el nomnbre del alumno">
                </div>
                <div class="form-group">
                    <label for="">Número de control:</label>
                    <input name="nc" type="text" class="form-control" placeholder="Teclea el número de control">
                </div>
                <div class="form-group">
                    <label for="">Semestre</label>
                    <input name="Semestre" type="text" class="form-control" placeholder="Teclea el semestre">
                </div>
                <div class="form-group">
                    <label for="">Edad:</label>
                    <input name="Edad" type="text" class="form-control" placeholder="Teclea la edad">
                </div>
                <div class="form-group">
                    <label for="">Turno</label>
                    <select name="Sexo" class="form-control">
                        <option value="">Selecciona el turno</option>
                        <option value="0">Matutino</option>
                        <option value="1">Vespertino</option>
                    </div>
               
                <div class="form-group">
                    <label for="">Sexo:</label>
                    <select name="Sexo" class="form-control">
                        <option value="">Selecciona el sexo</option>
                        <option value="0">Femenino</option>
                        <option value="1">Masculino</option>
                        <option value="2">Prefiero no decirlo</option>
                    </div>
               
        </div>
    </div>
   </div> 
   <footer class="text-center">
    <hr>
    Cetis 107 &copy; 2023
   </footer>
   <script src="js/bootstrap.js"></script>
</body>
</html>