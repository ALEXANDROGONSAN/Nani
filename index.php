<?php

	if ( isset($_POST['text']) ){
		$filename = dirname(__FILE__).'/temp';
		$data = $_POST['text'];
		file_put_contents($filename, $data);
		system('py '.dirname(__FILE__).'/search.py');
		echo 'Pesquisando...<br>';
	}
	else if ( isset($_POST['open']) ){
		$filename = dirname(__FILE__).'/temp';
		$filename = file_get_contents($filename);
		$filename = 'D:/alee/files/'.$filename;
		$path = $filename;
		$ext = pathinfo($path, PATHINFO_EXTENSION);
		if ( $ext == 'txt' || $ext == 'ii' ){
			//...ESTÁ DANDO ERRO AQUI ... NÃO ESTÁ ABRINDO O ARQUIVO
			echo system('\""C:/Program Files/Sublime Text 3/sublime_text.exe" "'.$filename.'"\"');
		}
	}

 ?>
<form action="#" method="post">
	<input type="text" name="text">
	<input type="submit" value="Pesquisar">
</form>

<form action="#" method="post">
	<input type="submit" value="Atualizar">
</form>

<?php

	$filename = dirname(__FILE__).'/temp';
	echo file_get_contents($filename);

 ?>

<form action="#" method="post">
	<input type="submit" value="Abrir Arquivo" name="open">
</form>
