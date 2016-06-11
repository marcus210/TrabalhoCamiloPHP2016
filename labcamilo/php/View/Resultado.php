<?php
	session_start();
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server" id="head1">

  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Marcus Campos, Marcos Richard, Marcio Mansur, Pedro Otávio">
    <title>Cadastramento de Itens</title>
    <link href="Css/Estilo.css" rel="Stylesheet" type="text/css" />
    
    <link href="../../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"
		  type="text/css" />
    <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/style-responsive.css" rel="stylesheet" type="text/css" />
    
    <script src="../../assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
	
	<link href="../../assets/plugins/bootstrap/js/jquery.dataTables.min.js" rel="stylesheet" type="text/css" />
</head>
<body>
      <div id="Tamanho">
         <div class="page-title">
                Resultado pesquisas
            </div>
      
        <!--<h2 class="form-signin-heading">Calculando IMC</h2>
        <label for="txbPeso" class="sr-only">Peso</label>
        <input type="text" id="txbPeso" name="txbPeso" class="form-control" placeholder="Peso" required>

        <label for="txbAltura" class="sr-only">Altura</label>
        <input type="text" id="txbAltura" name="txbAltura" class="form-control" placeholder="Altura" required>
        
        <button class="btn btn-lg btn-primary btn-block" name="enviar" type="submit">Calcular</button>-->
       <div class="pane">
	   <?php
		if(!(isset($_SESSION['pessoal']) && $_SESSION['pessoal'] != null))
		{
			echo "Oooops, ainda não possuimos pesquisas do tipo 'pessoal' para exibir <br>";
		}
		else
		{
	   ?>
		   <div>
			   <table class="table table-striped table-bordered dataTable no-footer">
				  <thead>
					 <tr role="row">
						<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1">Código pesquisa</th>	
						<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1">Televisão a cores</th>	
						<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1">Rádio</th>
						<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1">Banheiro</th>
						<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1">Automóvel</th>
						<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1">Empregada mensalista</th>
						<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1">Maquina de lavar</th>
						<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1">Videocassete e/ou DVD</th>
						<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1">Geladeira</th>
						<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1">Freezer</th>
					 </tr>
				  </thead>	
				  <tbody>
						<?php
								foreach($_SESSION['pessoal'] as $pesquisa)
								{
						?>
									<tr role="row" class="odd">									 
										<td class="sorting_1"><center><?="#".($codPessoal + 1)?></center></td>
										<td><center><?=$pesquisa['tv']?></center></td>
										<td><center><?=$pesquisa['ra']?></center></td>
										<td><center><?=$pesquisa['ba']?></center></td>
										<td><center><?=$pesquisa['au']?></center></td>
										<td><center><?=$pesquisa['em']?></center></td>
										<td><center><?=$pesquisa['ml']?></center></td>
										<td><center><?=$pesquisa['dvd']?></center></td>
										<td><center><?=$pesquisa['gel']?></center></td>
										<td><center><?=$pesquisa['free']?></center></td>
									 
									</tr>
							<?php 
								}
		}
							?>
				  </tbody>
			   </table>
			   <a class="btn blue" href="../../index.php">Voltar</a>
			</div>
		   <div>
			   <table class="table table-striped table-bordered dataTable no-footer">
				   <thead>
				   <tr role="row">
					   <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1">Código pesquisa</th>
					   <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1">Televisão a cores</th>
					   <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1">Rádio</th>
					   <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1">Banheiro</th>
					   <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1">Automóvel</th>
					   <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1">Empregada mensalista</th>
					   <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1">Maquina de lavar</th>
					   <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1">Videocassete e/ou DVD</th>
					   <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1">Geladeira</th>
					   <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1">Freezer</th>
				   </tr>
				   </thead>
				   <tbody>
				   <?php
				   foreach($_SESSION['pessoal'] as $pesquisa) {
					   ?>
					   <tr role="row" class="odd">
						   <td class="sorting_1">
							   <center><?= "#" . ($codPessoal + 1) ?></center>
						   </td>
						   <td>
							   <center><?= $pesquisa['tv'] ?></center>
						   </td>
						   <td>
							   <center><?= $pesquisa['ra'] ?></center>
						   </td>
						   <td>
							   <center><?= $pesquisa['ba'] ?></center>
						   </td>
						   <td>
							   <center><?= $pesquisa['au'] ?></center>
						   </td>
						   <td>
							   <center><?= $pesquisa['em'] ?></center>
						   </td>
						   <td>
							   <center><?= $pesquisa['ml'] ?></center>
						   </td>
						   <td>
							   <center><?= $pesquisa['dvd'] ?></center>
						   </td>
						   <td>
							   <center><?= $pesquisa['gel'] ?></center>
						   </td>
						   <td>
							   <center><?= $pesquisa['free'] ?></center>
						   </td>

					   </tr>
					   <?php
				   }
				   ?>
				   </tbody>
			   </table>
			   <a class="btn blue" href="../../index.php">Voltar</a>
		   </div>
	   </div>

  </body>
</html>