<?php
require_once('connect.php');
if (isset ($_POST['numb'])) {$numb=$_POST['numb']; if ($numb == ''){unset($numb);}}
//var_dump ($_POST);
?>

<!DOCTYPE HTML>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<title> Обработка заявки </title>
</head>

<body>

<?php
if (isset($numb))
	{
		$result = mysql_query ("INSERT INTO trf (numb) VALUES ('$numb')");
	if ($result == 'true') {echo "
    <div class='row'>
            <div class='col-md-12 text-center'>
                <p class='redir'> Ваш заявка успешна добавлена! в ближайшее время мы обязательно свяжемся с вами! </p>
                <a href='../index.php' class='redirlnk'>Вернуться</a>
            </div>
    </div>
                ";}
	else {echo "<p class='redir'> Заявка не добавлена! </p> <a href='index.php' class='redirlnk'>Вернуться</a>";}
		
	}
else
	
	{
		echo"
        <div class='row'>
            <div class='col-md-12 text-center'>
                <p class='redir'> Ошибка, вы не заполнили какое либо поле! </p>
                <a href='../index.php' class='redirlnk'>Вернуться</a>
            </div>
        </div>
        ";
	}
?>



</body>