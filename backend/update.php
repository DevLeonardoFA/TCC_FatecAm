<?php 
    //inicia sessão
    session_start();
    //chama a página de conexão
    include('connection.php');

    $id = ($_SESSION['usuario']['cod_jogador']);

    if(isset($_GET['nome_completo'])){
    //verificação se todos os campos estão vazios
    
        //atribuindo valor dos campos para as variaveis
        $email = $_GET['email'];
        $nome = $_GET['nome_completo'];
        $nascimento = $_GET['data_nascimento'];
        $cpf = $_GET['CPF'];
        $peso = $_GET['peso'];
        $altura = $_GET['altura'];
        $posicao = $_GET['posicao'];
        $cep = $_GET['cep'];
        $cidade = $_GET['cidade'];
        $estado = $_GET['uf'];
        $telefone = $_GET['telefone'];
        $celular = $_GET['celular'];


        //query para o banco 
        $query = "update jogadores set  email = '{$email}', nome_completo = '{$nome}' , data_nascimento = '{$nascimento}', 
        CPF = '{$cpf}', 
        peso = '{$peso}', 
        altura = '{$altura}', 
        posicao = '{$posicao}', 
        cep = '{$cep}', 
        cidade = '{$cidade}', 
        uf = '{$estado}', 
        telefone = '{$telefone}', 
        celular = '{$celular}' where cod_jogador = $id";
        echo $query;
        //conexão + query
        if(mysqli_query($conexao, $query)){
            echo 'sucesso'."</ br>";
        }else{
            echo 'erro';
        }

        //header('Location: about.php');
        exit;
    }else if(isset($_GET['url_video'])){
        
        $url_video = $_GET['url_video'];
        $query = "INSERT INTO `videos`(`url_video`, `fk_jogador`) VALUES ('{$url_video}', {$id})"; 

        if(mysqli_query($conexao, $query)){
            echo 'sucesso'."</ br>";
        }else{
            echo 'erro';
        }

    }
    
?>