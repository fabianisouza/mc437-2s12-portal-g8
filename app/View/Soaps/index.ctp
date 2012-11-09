<h1>Teste Serviço SOAP</h1>

<table>
    <tr>
    	<th>Logradouro</th>
    	<th>Tipo</th>
    	<th>Incio trecho</th>
    	<th>Fim trecho</th>
        <th>Bairro</th>
        <th>Cidade</th>
        <th>UF</th>
    </tr>
    <tr>
		<?php print_r($soap); ?>
    	<td><?php echo $soap['nome']; ?></td>
    	<td><?php echo $soap['supercategoria']; ?></td>
    </tr>
  
</table>