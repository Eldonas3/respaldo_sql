<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respaldo BD Estudiantec</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <th>SQL</th>
                    <th>CSV</th>
                    <th>XML</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                        <div class="card">
                            <div class="card-header">Respaldo SQL</div>
                                <div class="card-body">
                                    <h5 class="card-title">SQL</h5>
                                    <p class="card-text">Se creara un respaldo en formato sql</p>
                                    <!-- Boton para usar el metodo de exportar -->
                                    <div class="container">
                                    <form action="<?= base_url('exportaciones/exportar_sql') ?>" method="post">
                                        <!-- Botón de Bootstrap dentro de un formulario -->
                                        <button type="submit" name="submit" class="btn btn-primary">Exportar</button>
                                    </form>
                                    </div>
                                 </div>
                        </div>
                        </td>
                        <td>
                        <div class="card">
                            <div class="card-header">Respaldo CSV</div>
                                <div class="card-body">
                                    <h5 class="card-title">CSV</h5>
                                    <p class="card-text">Se creara un respaldo en formato csv</p>
                                    <!-- Boton para usar el metodo de exportar -->
                                    <div class="container">
                                    <form action="<?= base_url('exportaciones/exportar_csv') ?>" method="post">
                                        <!-- Botón de Bootstrap dentro de un formulario -->
                                        <button type="submit" name="submit" class="btn btn-primary">Exportar</button>
                                    </form>
                                    </div>
                                 </div>
                        </div>
                        </td>
                        <td>
                        <div class="card">
                            <div class="card-header">Respaldo XML</div>
                                <div class="card-body">
                                    <h5 class="card-title">XML</h5>
                                    <p class="card-text">Se creara un respaldo en formato xml</p>
                                    <!-- Boton para usar el metodo de exportar -->                                                                      <div class="container">
                                    <form action="<?= base_url('exportaciones/exportar_xml') ?>" method="post">
                                        <!-- Botón de Bootstrap dentro de un formulario -->
                                        <button type="submit" name="submit" class="btn btn-primary">Exportar</button>
                                    </form>
                                    </div>
                                 </div>
                        </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
 
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>