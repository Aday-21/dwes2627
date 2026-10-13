<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <!-- CSS bootrstrap basico 5.3.8 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <!-- icons bootstrap basico 5.3.8 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    </head>
    <body>
    <!-- Capa principal de la aplicacion -->
        <div class="container mt-3">
            <header class="bg-primary text-white p-3 mb-3">
                <i class="bi bi-stack"></i>
                <span class="fs-6">Título de aplicaicón</span>
            </header>
            <!-- contenido principal de la aplicacion -->
            <main>
                <div class="content">
                    <table>
                   <!-- Tabla de resultados -->
                    <tr>
                        <td colspan="2"><strong>Resultado</strong></td>
                    </tr>
                    <br>
                    <tr>
                        <td>
                            <h4>Datos Introducidos</h4>
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td>Velocidad Inicial;</td>
                        <td><?=number_format($velocidadInicial, 2, '. ', '. '); ?></td>
                        <td>m/s</td>
                    </tr>
                    <tr>
                        <td>Aceleración;</td>
                        <td><?=number_format($aceleracion, 2, '. ', '. '); ?></td>
                        <td>m/s2</td>
                    </tr>
                    <tr>
                        <td>Tiempo;</td>
                        <td><?=number_format($tiempo, 2, '. ', '. '); ?></td>
                        <td>s</td>
                    </tr>
                    <tr>
                        <td>Masa;</td>
                        <td><?=number_format($masa, 2, '. ', '. '); ?></td>
                        <td>kg</td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Resultados</h4>
                        </td>
                    </tr>
                    <br>
                    <tr>
                        <td>Velocidad Final;</td>
                        <td><?=number_format($velocidadFinal, 2, '. ', '. '); ?></td>
                        <td>m/s</td>
                    </tr>
                    <tr>
                        <td>Espacio Recorrido;</td>
                        <td><?=number_format($espacioRecorrido, 2, '. ', '. '); ?></td>
                        <td>n</td>
                    </tr>
                    <tr>
                        <td>Fuerza Neta;</td>
                        <td><?=number_format($fuerzaNeta, 2, '. ', '. '); ?></td>
                        <td>N</td>
                    </tr>
                    <tr>
                        <td>Energia Cinética Final;</td>
                        <td><?=number_format($energiaCineticaFinal, 2, '. ', '. '); ?></td>
                        <td>J</td>
                    </tr>
                    </table>
                </div>
               <br>
                <div class="btn-group" role="group">
                    <form><button type="submit" class="btn btn-primary" value="volver" href="view.index.php">Volver</button></form>
                </div>
            </main>
            <!-- pie de pagina de la aplicacion -->
            <footer class="footer mt-auto py-3 fixed-bottom bg-light">
                <div class="container">
                    <span class="text-muted">&copy; 2026
                        Aday Trandafir Garcia - DWES - 2º DAW - Curso 26/27</span>
                </div>
            </footer>
            <!-- js bootstrap basico 5.3.8 -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        </div>
    </body>
</html>