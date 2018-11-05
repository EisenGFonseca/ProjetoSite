<?php
	{
		include('../../acesso_portal/check_login.php');
	}
	{
		include('../../../conexao/conexao.php');{
			if(empty($_POST['fun_cod']) || empty($_POST['fun_nome'])){
				header('location:../Lista/lista.php?fun_cod=null');
			} else {

				$fun_cod = filter_var($_POST['fun_cod']);
				$fun_nome = filter_var($_POST['fun_nome']);
				$fun_dataNas = filter_var($_POST['fun_dataNas']);
				$fun_sexo = filter_var($_POST['fun_sexo']);
				$fun_rg = filter_var($_POST['fun_rg']);
				$fun_cpf = filter_var($_POST['fun_cpf']);
				$fun_telefone = filter_var($_POST['fun_telefone']);
				$fun_celular = filter_var($_POST['fun_celular']);
				$fun_email = filter_var($_POST['fun_email']);
				$fun_rua = filter_var($_POST['fun_rua']);
				$fun_numero = filter_var($_POST['fun_numero']);
				$fun_bairro = filter_var($_POST['fun_bairro']);
				$fun_cep = filter_var($_POST['fun_cep']);
				$fun_cidade = filter_var($_POST['fun_cidade']);
				$fun_estado = filter_var($_POST['fun_estado']);

				$sql = "CALL atualiza_fun($fun_cod,
																 '$fun_nome',
																 '$fun_dataNas',
																 '$fun_sexo',
																 '$fun_rg',
																 '$fun_cpf',
																 '$fun_telefone',
																 '$fun_celular',
																 '$fun_email',
																 '$fun_rua',
																 '$fun_numero',
																 '$fun_bairro',
																 '$fun_cep',
																 '$fun_cidade',
																 '$fun_estado')";

				$update = $conn->prepare($sql);

				$update->bindParam(':fun_cod', $fun_cod);
				$update->bindParam(':fun_nome', $fun_nome);
				$update->bindParam(':fun_dataNas', $fun_dataNas);
				$update->bindParam(':fun_sexo', $fun_sexo);
				$update->bindParam(':fun_rg', $fun_rg);
				$update->bindParam(':fun_cpf', $fun_cpf);
				$update->bindParam(':fun_telefone', $fun_telefone);
				$update->bindParam(':fun_celular', $fun_celular);
				$update->bindParam(':fun_email', $fun_email);
				$update->bindParam(':fun_rua', $fun_rua);
				$update->bindParam(':fun_numero', $fun_numero);
				$update->bindParam(':fun_bairro', $fun_bairro);
				$update->bindParam(':fun_cep', $fun_cep);
				$update->bindParam(':fun_cidade', $fun_cidade);
				$update->bindParam(':fun_estado', $fun_estado);

				$update->execute();
			}
		}
	}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title> Atualizado </title>

    <link rel="shortcut icon" href="//virtual.ifro.edu.br/jiparana/pluginfile.php/1/theme_essential/favicon/1535988245/favicon.ico">
    <!-- CSS -->
    <?php include('../../../inc/css.php'); ?>
    <!-- END-CSS -->
  </head>

	<body class="body1">

		<!-- MENU -->
		<?php include('../../../inc/menu.php'); ?>
		<!-- END-MENU -->

		<!-- CORPO -->
		<div id="Conteiner-Principal">
			<div class='imagem-capa capa-cadastrar'>
				<div class='texto-capa texto-sobre'>
					<h1 class="hello">Funcionários</h1>
					<h2 class="index hello sumir">Lista de empregados cadastrados</h2>
					<h3 class="index hello sumir">Clique em ver mais para ter acesso à seus dados</h3>
				</div> <!-- imagem-capa -->
			</div> <!-- texto-capa -->

			<div id="wrapper">
				<div id="pagebody">
					<div id="content">

						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<strong>Funcionario Cadastrado com Sucesso!</strong> \o/
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>

						<!-- TABELA FUN -->
						<?php include('../../../inc/tabela-fun.php'); ?>
						<!-- END TABELA FUN -->

					</div><!-- Fim da div content -->
				</div> <!--fim da pagebody -->

				<div id="lateral" class="sumir">
					<!-- LATERAL -->
					<?php include('../../../inc/container-lateral.php'); ?>
					<!-- END LATERAL -->
				</div><!-- lateral -->

			</div><!-- Conteiner-Conteudo -->
		</div> <!-- Conteiner-Principal -->

		<!--FOOTER -->
		<?php include('../../../inc/footer.php'); ?>
		<!-- END FOOTER-->

		<!-- JS -->
		<?php include('../../../inc/js.php'); ?>
		<!-- END JS -->

	</body>
</html>
