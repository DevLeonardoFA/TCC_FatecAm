<?php 
    //inicia sessão
    session_start();
    //chama a página de conexão
    include('connection.php');


    $dir_projeto = "http://localhost/TCC_FatecAm/";

    $id = ($_SESSION['usuario']['cod_jogador']); //identificando o usuario que sera alterado

    if(isset($_POST['nome_completo'])){
    //verificação se todos os campos estão vazios
    
        //atribuindo valor dos campos para as variaveis
        $email = $_POST['email'];
        $nome = $_POST['nome_completo'];
        $nascimento = $_POST['data_nascimento'];
        $cpf = $_POST['CPF'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        $posicao = $_POST['posicao'];
        $cep = $_POST['cep'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['uf'];
        $descricao = $_POST['descricao'];


        if($_FILES['imagem']['name'] != ''){

            echo "Aqui";

            $arquivo_temporario = $_FILES["imagem"]['tmp_name']; 
            $arquivo = basename($_FILES['imagem']['name']);  //pega o nome do elemento, a função serve pra so pegar o nome do arquivo mesmo
            $diretorio = "./../images"; //Pasta que sera enviado
            move_uploaded_file($arquivo_temporario, $diretorio."/".$arquivo); //move do arquivo temporario para a pasta
            
            $caminho_arquivo = $dir_projeto.'images/'.$arquivo;

                //query para o banco 
                $query = "update jogadores set  email = '{$email}', nome_completo = '{$nome}' , data_nascimento = '{$nascimento}', 
                CPF = '{$cpf}', 
                peso = '{$peso}', 
                altura = '{$altura}', 
                posicao = '{$posicao}', 
                cep = '{$cep}', 
                cidade = '{$cidade}', 
                uf = '{$estado}', 
                descricao = '{$descricao}',
                foto_perfil = '{$caminho_arquivo}' where cod_jogador = $id";
                

        }else{
            echo "Else";

            //query para o banco 
            $query = "update jogadores set  email = '{$email}', nome_completo = '{$nome}' , data_nascimento = '{$nascimento}', 
            CPF = '{$cpf}', 
            peso = '{$peso}', 
            altura = '{$altura}', 
            posicao = '{$posicao}', 
            cep = '{$cep}', 
            cidade = '{$cidade}', 
            uf = '{$estado}',
            descricao = '{$descricao}' where cod_jogador = $id";

        }

        //conexão + query
        if(mysqli_query($conexao, $query)){
            echo 'sucesso'."</ br>";
        }else{
            echo 'erro';
        }

        header('Location: ./../configuracoes.php');
        exit;

    }else if(isset($_GET['url_video'])){
        
        $url_video = $_GET['url_video'];
        $query = "INSERT INTO `videos`(`url_video`, `fk_jogador`) VALUES ('{$url_video}', {$id})"; 

        if(mysqli_query($conexao, $query)){
            echo 'sucesso'."</ br>";
        }else{
            echo 'erro';
        }

        header('Location: ./../meus-videos.php');

    }
    
?>