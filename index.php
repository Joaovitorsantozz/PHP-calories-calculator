<?php
$pdo = new PDO('mysql:host=localhost;dbname=foods_type', 'root', '');
include("Alimento.php");
$alimento = new Alimento(1, 2, 3);
$sql = $pdo->prepare('SELECT Nome FROM tb_nutri ');
$sql->execute();

$nome = $sql->fetchAll();
$page = isset($_GET['page']) ? $_GET['page'] : 'home';




$alimento = new Alimento(5, 2, 3);

/*assim recupero
foreach($nome as $nomes){
   
}
*/
if (isset($_POST['action'])) {
    // Processar o segundo formulário (cadastro de alimentos)
    include('cadastrar.php');
    // Redireciona para evitar reenvio ao atualizar
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
function getValuesNutri($values, $grams)
{
    return ($values * $grams) / 100;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body class="montserrat">

    <header class="header">

        <div class="navbar">
            <div class="logo">
                <a href="#">CalcFit</a>

            </div>
            <ul class="links">
                <li class="home"><a class="hero">Home</a></li>
                <li class="about"><a class="hero">Contact</a></li>
                <li class="contact"><a class="hero">About</a></li>
            </ul>
            <a href="" class="action_btn">Get Started</a>
            <div class="toggle-btn">
                <i class="fa fa-bars"></i>
            </div>
        </div>
        <div class="drop-menu">
            <ul class="links">
                <li><a class="hero">Home</a></li>
                <li><a class="hero">Contact</a></li>
                <li><a class="hero">About</a></li>
                <li>
                    <a href="" class="action_btn">Get Started</a>
                </li>
            </ul>
        </div>

        <section class="hero">

            <div class="container chamada-banner">

                <div class="row text-center">
                    <div class="col-md-12">
                        <h1>Calc Fit</h1>
                        <p>A calculadora perfeita para você que busca uma dieta equilibrada e com prazer!</p>

                        <a class="cmc-btn">Começe a calcular !</a>
                        <a class="sb-btn">Saiba por que usar</a>
                    </div>
                </div>

            </div>

            </div>

        </section>

    </header>

    <section class="intersection">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Comece sua vida mais saudável agora mesmo !</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="vantagens">
        <div class="cotaineer">
            <div class="col-md-4 ">
                <div class="row">
                    <div class="vantagem-single ">
                        <h2 class="text-center">Transforme sua saúde e bem-estar agora</h2>
                        <div class="symbol">
                            <h1 class="text-center"><i class="fa-solid fa-apple-whole"></i></h1>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio nostrum, saepe tenetur impedit earum quibusdam non, incidunt minima autem at deserunt temporibus labore sequi voluptate quam illo doloribus enim possimus.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio nostrum, saepe tenetur impedit earum quibusdam non, incidunt minima autem at deserunt temporibus labore sequi voluptate quam illo doloribus enim possimus.
                        <div class="background-vantagem"></div>
                    </div>

                </div>
            </div>
            <div class="col-md-4 ">
                <div class="row">
                    <div class="vantagem-single ">
                        <h2 class="text-center">Alimente-se melhor, viva melhor</h2>
                        <div class="symbol">
                            <h1 class="text-center"><i class="fa-brands fa-pagelines"></i></i></h1>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio nostrum, saepe tenetur impedit earum quibusdam non, incidunt minima autem at deserunt temporibus labore sequi voluptate quam illo doloribus enim possimus.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio nostrum, saepe tenetur impedit earum quibusdam non, incidunt minima autem at deserunt temporibus labore sequi voluptate quam illo doloribus enim possimus.

                        </p>
                        <div class="background-vantagem"></div>
                    </div>

                </div>
            </div>
            <div class="col-md-4 ">
                <div class="row">
                    <div class="vantagem-single ">
                        <h2 class="text-center">Descubra o poder de uma alimentação equilibrada</h2>
                        <div class="symbol">
                            <h1 class="text-center"><i class="fa-solid fa-heart-pulse"></i></i></h1>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio nostrum, saepe tenetur impedit earum quibusdam non, incidunt minima autem at deserunt temporibus labore sequi voluptate quam illo doloribus enim possimus.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio nostrum, saepe tenetur impedit earum quibusdam non, incidunt minima autem at deserunt temporibus labore sequi voluptate quam illo doloribus enim possimus.
                        <div class="background-vantagem"></div>
                    </div>
                </div>
            </div>
    </section>
    <section class="intersection">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Comece sua vida mais saudável agora mesmo !</h1>
                </div>
            </div>
        </div>
    </section>
    <form method="post" class="form-banner">
        <h1>Calculadora</h1>
        <?php
        $sql = $pdo->prepare('SELECT DISTINCT `id_tipo` from `tb_nutri`');
        $sql->execute();
        $cate = $sql->fetchAll();

        $sql = $pdo->prepare('SELECT * FROM `tb_nutri` WHERE `id_tipo` = :tipo');
        foreach ($cate as $categoria) {


        ?>

            <section class="frutas">

                <div class=" fruta-container">

                    <h2 class="text-left"><?php echo $categoria['id_tipo'] ?>s</h2>
                    <p> selecione as/os <?php echo $categoria['id_tipo'] ?>s utilizadas(os)</p>
                    <div class="row">
                        <?php
                        $sql->bindParam(':tipo', $categoria['id_tipo']);
                        $sql->execute();
                        $types = $sql->fetchAll();
                        foreach ($types as $food) {
                        ?>
                            <div class="col-md-2">
                                <h2 class="text-center nome-comida"> <?php echo $food['Nome'];
                                                                        ?></h2>
                                <div class="item">

                                    <div class="row row-custom">


                                        <div class="form-check ">
                                            <?php $alimento->getImagem($food['Nome']); ?>
                                            <input class="form-check-input usadoform" type="checkbox" name="checkbox[]" value="<?php echo $food['Nome'] ?>" id="defaultCheck<?php echo $i; ?>">
                                            <label class="form-check-label usadoform" value="" for="defaultCheck<?php echo $i; ?>">
                                                Foi usado?
                                            </label>
                                            <input class="form-control mt-2" type="text" placeholder="Quantas gramas?" name="<?php echo $food['Nome'] ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-2">
                                <h2 class="text-center nome-comida"> <?php echo $food['Nome'];
                                                                        ?></h2>
                                <div class="item">

                                    <div class="row">


                                        <div class="form-check ">
                                            <?php $alimento->getImagem($food['Nome']); ?>
                                            <input class="form-check-input usadoform" type="checkbox" name="checkbox[]" value="<?php echo $food['Nome'] ?>" id="defaultCheck<?php echo $i; ?>">
                                            <label class="form-check-label usadoform" value="" for="defaultCheck<?php echo $i; ?>">
                                                Foi usado?
                                            </label>
                                            <input class="form-control mt-2" type="text" placeholder="Quantas gramas?" name="<?php echo $food['Nome'] ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-2">
                                <h2 class="text-center nome-comida"> <?php echo $food['Nome'];
                                                                        ?></h2>
                                <div class="item">

                                    <div class="row">


                                        <div class="form-check ">
                                            <?php $alimento->getImagem($food['Nome']); ?>
                                            <input class="form-check-input usadoform" type="checkbox" name="checkbox[]" value="<?php echo $food['Nome'] ?>" id="defaultCheck<?php echo $i; ?>">
                                            <label class="form-check-label usadoform" value="" for="defaultCheck<?php echo $i; ?>">
                                                Foi usado?
                                            </label>
                                            <input class="form-control mt-2" type="text" placeholder="Quantas gramas?" name="<?php echo $food['Nome'] ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>








            </section>
        <?php  } ?>
        <div class="container">

            <input type="submit" value="Calcular valores nutricionais" name="enviar">
        </div>
    </form>

    <section class="tabela-nutricional">

        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="nutricional">
                    <?php

                    $calTotal = 0;
                    $protTotal = 0;
                    $carboTotal = 0;
                    $gramasTotais = 0;
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                        if (isset($_POST['enviar'])) {
                    ?>
                            <h2>Sua refeição possui</h2>
                            <ul style="margin-left:-35px; text-decoration:none;">
                        <?php
                            if (!empty($_POST['checkbox'])) {

                                //echo "Checkbox(es) selecionado(s):<br>";



                                foreach ($_POST['checkbox'] as $item) {


                                    $gramas = $_POST[$item];
                                    $gramasTotais += $gramas;

                                    $sql = $pdo->prepare('SELECT * FROM `tb_nutri` WHERE Nome = ?');
                                    $sql->execute([$item]);
                                    $checks = $sql->fetchAll();


                                    foreach ($checks as $ingredientes) {

                                        $carboTotal += getValuesNutri($ingredientes['carboidratos'], $gramas);
                                        $protTotal += getValuesNutri($ingredientes['proteinas'], $gramas);
                                        $calTotal += getValuesNutri($ingredientes['calorias'], $gramas);
                                    }

                                    //echo "As gramas usadas para $item foram $gramas.<br><hr>";
                                }


                                echo '<h3>' . 'Um total de ' . '<b>' . $carboTotal . '</b>' . ' g' . " de carboidratos" . "<br>";
                                echo '<h3>' . 'Um total de ' . '<b>' . $protTotal . '</b>' . ' g' . " de proteínas" . "<br>";
                                echo '<h3>' . 'Um total de ' . '<b>' . $calTotal . '</b>' . ' kCal' . " de calorias" . "<br>";
                                echo '<h3>' . 'Um total de ' . '<b>' . $gramasTotais . '</b>' . 'g' . " de peso" . "<br>";
                            } else {
                                echo "Nenhum checkbox foi marcado.";
                            }
                        }
                    }

                        ?>
                </div>


                </ul>
            </div>
        </div>
    </section>
    <section class="cadastrar_alimento">
        <form method="post" enctype="multipart/form-data">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nome do Alimento</label>
                                <input required name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Insira o nome do Alimento">

                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Selecione o tipo do alimento</label>
                                <select name="tipo" class="form-control" id="exampleFormControlSelect1" required>
                                    <option>Lacticinio</option>
                                    <option>Fruta</option>
                                    <option>Proteína</option>
                                    <option>Verdura</option>
                                    <option>Fibras e Grãos</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Quantidade de Proteínas a cada 100 gramas</label>
                                <input required name="proteinas" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Insira as proteínas">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Quantidade de carboidratos a cada 100 gramas</label>

                                <input required name="carboidrato" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Insira o nome do Alimento" required />
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Quantidade de gorduras totais a cada 100 gramas</label>
                                <input required name="gordura-total" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Insira as proteínas">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Quantidade de calorias 100 gramas</label>
                                <input required name="calorias" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Insira o nome do Alimento">
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Quantidade de gord saturadas a cada 100 gramas</label>
                                <input required name="gordura-saturada" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Insira o nome do Alimento">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Foto do Alimento</label>
                                <input name="img" type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>

                        </div>
                    </div>
                </div>

                <button name="action" style="margin-left:15px;" type="submit" class="btn btn-primary mb-2 text-center">Enviar dados</button>

                <?php

                ?>
            </div>

        </form>
    </section>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        const toggleBtn = document.querySelector('.toggle-btn')
        const toggleBtnIcon = document.querySelector('.toggle-btn i')
        const dropDownBtn = document.querySelector('.drop-menu')

        toggleBtn.onclick = function() {
            dropDownBtn.classList.toggle('open')
            const isOpen = dropDownBtn.classList.contains('open')

            toggleBtnIcon.classList = isOpen ?
                'fa fa-xmark' : 'fa fa-bars'
        }



        const elementos = document.querySelectorAll('.nome-comida');
        const limite = 15;

        elementos.forEach(elemento => {
            if (elemento.textContent.length > limite) {
                elemento.style.fontSize = '20px';
            }
        });
    </script>
</body>

</html>