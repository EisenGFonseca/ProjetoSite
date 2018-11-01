<?php include('../../acesso_portal/check_login.php');?>
<?php

	include('../../../conexao/conexao.php');

	$fun_nome = $_POST['fun_nome'];
	$fun_dataNas = $_POST['fun_dataNas'];
	$fun_sexo = $_POST['fun_sexo'];
	$fun_rg = $_POST['fun_rg'];
	$fun_cpf = $_POST['fun_cpf'];
	$fun_telefone = $_POST['fun_telefone'];
	$fun_celular = $_POST['fun_celular'];
	$fun_rua = $_POST['fun_rua'];
	$fun_numero = $_POST['fun_numero'];
	$fun_bairro = $_POST['fun_bairro'];
	$fun_cep = $_POST['fun_cep'];
	$fun_cidade = $_POST['fun_cidade'];
	$fun_estado = $_POST['fun_estado'];
	$fun_funcao = $_POST['fun_funcao'];
	$fun_salario = $_POST['fun_salario'];

	$adm_email = $_POST['adm_email'];
	$adm_senha = $_POST['adm_senha'];
	$adm_pergunta = $_POST['adm_pergunta'];
	$adm_resposta = $_POST['adm_resposta'];

	if($adm_email == ''){
	$sql = "INSERT INTO funcionario VALUES (NULL, :fun_nome,
																								:fun_dataNas,
																								:fun_sexo,
																								:fun_rg,
																								:fun_cpf,
																								:fun_telefone,
																								:fun_celular,
																								:fun_rua,
																								:fun_numero,
																								:fun_bairro,
																								:fun_cep,
																								:fun_cidade,
																								:fun_estado,
																								:fun_funcao,
																								:fun_salario)";
}
else{
		$sql = "INSERT INTO funcionario VALUES (NULL, :fun_nome,
																									:fun_dataNas,
																									:fun_sexo,
																									:fun_rg,
																									:fun_cpf,
																									:fun_telefone,
																									:fun_celular,
																									:fun_rua,
																									:fun_numero,
																									:fun_bairro,
																									:fun_cep,
																									:fun_cidade,
																									:fun_estado,
																									:fun_funcao,
																									:fun_salario);

								 INSERT INTO admin VALUES (null, :adm_email,
																								 :adm_senha,
																								 :adm_pergunta,
																								 :adm_resposta,
																								 last_insert_id())";
}

	$inserir = $conn->prepare($sql);

	$inserir->bindParam( ':fun_nome', $fun_nome);
	$inserir->bindParam( ':fun_dataNas', $fun_dataNas);
	$inserir->bindParam( ':fun_sexo', $fun_sexo);
	$inserir->bindParam( ':fun_rg', $fun_rg);
	$inserir->bindParam( ':fun_cpf', $fun_cpf);
	$inserir->bindParam( ':fun_telefone', $fun_telefone);
	$inserir->bindParam( ':fun_celular', $fun_celular);
	$inserir->bindParam( ':fun_rua', $fun_rua);
	$inserir->bindParam( ':fun_numero', $fun_numero);
	$inserir->bindParam( ':fun_bairro', $fun_bairro);
	$inserir->bindParam( ':fun_cep', $fun_cep);
	$inserir->bindParam( ':fun_cidade', $fun_cidade);
	$inserir->bindParam( ':fun_estado', $fun_estado);
	$inserir->bindParam( ':fun_funcao', $fun_funcao);
	$inserir->bindParam( ':fun_salario', $fun_salario);

	$inserir->bindParam( ':adm_email', $adm_email);
	$inserir->bindParam( ':adm_senha', $adm_senha);
	$inserir->bindParam( ':adm_pergunta', $adm_pergunta);
	$inserir->bindParam( ':adm_resposta', $adm_resposta);

	$resultado = $inserir->execute();
?>

<?php

	$sql = "SELECT * FROM funcionario";
	$consulta = $conn->prepare($sql);
	$consulta->execute();

	$registros = $consulta->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title> Sobre </title>

    <link rel="shortcut icon" href="//virtual.ifro.edu.br/jiparana/pluginfile.php/1/theme_essential/favicon/1535988245/favicon.ico">

    <!-- PROPRIO -->
    <link rel="stylesheet" type="text/css" href="../../../css/css.css">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- METRO UI -->
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro.min.css">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-icons.min.css">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-colors.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

  </head>

  <body class="body1">

    <!-- MENU -->
    <div data-role="appbar" data-expand-point="md">
      <a href="#" class="brand no-hover">
        <img src="../../../../img/Logo - Pestalozzi.png" height="30" class="d-inline-block align-top" alt="">
      </a>

      <div data-role="appbar" data-expand-point="md">
        <button type="button" class="hamburger menu-down hidden">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </button>
        <a href="#" class="brand no-hover">
          <img src="https://www.planet-source-code.com/vb/2010Redesign/images/LangugeHomePages/HTML5_CSS_JavaScript.png" height="40" class="d-inline-block align-top" alt="">
        </a>
        <ul class="app-bar-menu">
          <a class="btn btn-light" href="../../../../index.php">Início</a>
          <a class="btn btn-light" href="#">Contato</a>
          <a class="btn btn-light" href="../../../sobre/sobre.php">Sobre</a>
          <a class="btn btn-light" href="../../index_portal.php">Home Admin</a>
        </ul>

        <ul class="app-bar-menu ml-auto collapsed" style="">
          <a class="btn btn-light" href="../../acesso_portal/logout.php"><b>USUÁRIO</b></a>
          <a class="btn btn-danger" href="../../acesso_portal/logout.php">Sair</a>
        </ul>
      </div>

    </div> <!-- END-MENU -->

    <!-- CORPO -->
    <div id="Conteiner-Principal">
      <div class='imagem-capa capa-cadastrar'>
        <div class='texto-capa texto-sobre'>
          <h1 class="hello">Lista de Funcionário</h1>
          <h2 class="index hello">Funcionários Cadastrados</h2>
          <h3 class="index hello">Clique para saber mais sobre cada um</h3>
        </div> <!-- imagem-capa -->
      </div> <!-- texto-capa -->

				<div id="container-contatos">
					<div class="table-responsive-xl">
						<table class="table">
							<thead class="thead-dark">
								<tr>
									<th scope="col">#</th>
									<th scope="col">Nome</th>
									<th scope="col">Data de Nascimento</th>
									<th scope="col">Sexo</th>
									<th scope="col">Celular</th>
									<th scope="col">Estado</th>
									<th scope="col">Ação</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($registros as $registro) { ?>
									<tr>
										<th scope="row"><?php echo $registro->fun_cod; ?></th>
										<td><?php echo $registro->fun_nome; ?></td>
										<td><?php echo $registro->fun_dataNas; ?></td>
										<td><?php echo $registro->fun_sexo; ?></td>
										<td><?php echo $registro->fun_celular; ?></td>
										<td><?php echo $registro->fun_estado; ?></td>
										<td>
											<a class="none" href="../atualizar/atualizar.php?fun_cod=<?php echo $registro->fun_cod; ?>"><button type="button" class="btn btn-warning"> Alterar </button></a>
											<a class="none" href="deletar.php?fun_id=<?php echo $registro->fun_cod; ?>"><button type="button" class="btn btn-danger"> Deletar </button></a>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
      </div><!-- Conteiner-Conteudo -->
    </div> <!-- Conteiner-Principal -->

    <div class="footer">
      <p class="footer_font">@2018 EisenFonseca</p>
    </div>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- JS METRO UI -->
    <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>

    <!-- BOOSTRAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- javascript -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.min.js"></script>


  </body>
</html>
