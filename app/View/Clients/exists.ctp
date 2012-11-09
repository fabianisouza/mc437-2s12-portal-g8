<h1>CPF <? echo $cpf ?></h1>
<? if ($exists) {?>
<p>Esse CPF está cadastrado.</p>
<? } else { ?>
<p>Esse CPF <b>não</b> está cadastrado.</p>
<? } ?>