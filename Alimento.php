<?php
class Alimento
{

    public $cal;
    public $proteinas;
    public $gorduras;

    public function __construct($calx, $proteinasx, $gordurasx)
    {
        $this->cal = $calx;
        $this->proteinas = $proteinasx;
        $this->gorduras = $gordurasx;
    }

    public function callName()
    {
        echo 'meu nome';
    }

    function getImagem($path)
    {
        global $pdo;
        $sql = $pdo->prepare('SELECT `foto` FROM `tb_nutri` WHERE `Nome` = ? ');
        $sql->execute([$path]);
    
     
        $img = $sql->fetchColumn();
    

        $base64Image = base64_encode($img);
        $mimeType = "image/jpeg";
    

        echo '<div class="user-picture" style="background-image: url(data:' . $mimeType . ';base64,' . $base64Image . ');"></div>';
    }

    public function getFoodbyType($type, $i)
    {
        global $pdo;
        $sql = $pdo->prepare('SELECT * FROM `tb_nutri` ');

        $sql->execute();
        $types = $sql->fetchAll();

        // Agora acessando o índice correto
        foreach ($types as $key => $value) {
            if ($value['id_tipo'] == "Fruta") {

                $filtered = array_filter($types, function ($item) {
                    return $item['id_tipo'] == "Fruta";
                });

                $filtered = array_values($filtered); // Reindexa o array
                return $filtered[$i]['Nome']; // Acessa o primeiro elemento do array reindexado
            }
        }
    }
}
