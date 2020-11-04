<?php
    require_once('config.php');
    #require_once('classGeoPlugin.php');

    #$geoplugin = new geoPlugin();
    #$geoplugin->locate();

    /* CONTROLE DE VARIAVEL */

    $msg = "Campo obrigat&oacute;rio vazio.";

        if(empty($_POST['rand'])) { die('Vari&aacute;vel de controle nula.'); }
        if(empty($_POST['usuario'])) { die($msg); } else { $filtro = 1; }
        if(empty($_POST['senha'])) { die($msg); } else { $filtro++; }

        if($filtro == 2) {
            try {
                include_once('conexao.php');

                /* VALIDANDO O LOGIN */

                $sql = $pdo->prepare("SELECT idlogin,nome,tipo,usuario,senha,padrao FROM login WHERE usuario = :usuario AND senha = :senha");
                $sql->bindParam(':usuario', $_POST['usuario'], PDO::PARAM_STR);
                $sql->bindParam(':senha', $_POST['senha'], PDO::PARAM_STR);
                $sql->execute();
                $ret = $sql->rowCount();

                    if($ret > 0) {
                        $lin = $sql->fetch(PDO::FETCH_OBJ);
                        $lin->nome = explode(' ', $lin->nome);

                        $_SESSION['id'] = $lin->idlogin;
                        $_SESSION['name'] = $lin->nome[0];
                        $_SESSION['type'] = $lin->tipo;
                        $_SESSION['key'] = $lin->usuario;
                        $_SESSION['pat'] = $lin->padrao;

                            if($lin->tipo == 'A') {
                                echo'root';
                            }
                            else {
                                echo'true';
                                
                                // Vagner pode bater o ponto de qualquer local
                                
                                /*if($lin->idlogin == 19) {
                                    echo'true';
                                } else {
                                    if($geoplugin->ip != '45.4.112.18') {
                                        echo'noip';
                                    } else {
                                        echo'true';
                                    }
                                }*/
                            }

                        unset($lin);
                    }
                    else {
                        echo'Login inv&aacute;lido.';
                    }

                unset($pdo,$sql,$ret);
            }
            catch(PDOException $e) {
                echo'Falha ao conectar o servidor '.$e->getMessage();
            }
        } //if filtro

    unset($msg,$filtro,$cfg,$e);
?>
