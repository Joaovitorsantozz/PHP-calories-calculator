<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $proteinas = $_POST['proteinas'];
    $classi = $_POST['tipo'];

    $carbo = $_POST['carboidrato'];
    $gordtotal = $_POST['gordura-total'];


    $gordsat = $_POST['gordura-saturada'];
    $calorias = $_POST['calorias'];

    $sql = $pdo->prepare('INSERT INTO tb_nutri VALUES(null,?,?,?,?,?,?,?,?)');

    if (isset($_FILES['img']) && $_FILES['img']['error'] == 0) {
        $imgPath = $_FILES['img']['tmp_name'];
        $imgData = file_get_contents($imgPath);

        $sql->execute(array($name, $proteinas, $calorias, $gordtotal, $gordsat, $carbo, $imgData, $classi));

        if (isset($imgData)) {
            $base64Image = base64_encode($imgData);
            $mimeType = "image/jpeg";
        }
    }
}






