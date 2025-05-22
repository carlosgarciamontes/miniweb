<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Top memes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h1 class="mb-4 text-center">Top memes</h1>
    <div class="row">
        <?php
        $result = $conexion->query("SELECT * FROM memes");
        while($row = $result->fetch_assoc()) {
            echo '
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="assets/' . $row["imagen"] . '" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">'. $row["titulo"] .'</h5>
                        <p class="card-text creador">Creado por: '. $row["creador"] .' ('. $row["ano"] .')</p>
                        <button class="btn btn-primary toggle-btn">Ver/Ocultar creador</button>
                    </div>
                </div>
            </div>';
        }
        ?>
    </div>
</div>

<script src="script.js"></script>
</body>
</html>
