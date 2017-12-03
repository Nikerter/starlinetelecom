<?php
require_once('connect.php');
if (isset ($_POST['name'])) {$name=$_POST['name']; if ($name == ''){unset($name);}}
if (isset ($_POST['occupation'])) {$occupation=$_POST['occupation']; if ($occupation == ''){unset($occupation);}}
if (isset ($_POST['adress'])) {$adress=$_POST['adress']; if ($adress == ''){unset($adress);}}
if (isset ($_POST['amount'])) {$amount=$_POST['amount']; if ($amount == ''){unset($amount);}}
if (isset ($_POST['tel'])) {$tel=$_POST['tel']; if ($tel == ''){unset($tel);}}
if (isset ($_POST['mail'])) {$mail=$_POST['mail']; if ($mail == ''){unset($mail);}}
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
if (isset($name) && isset($occupation) && isset($adress) && isset($amount) && isset($tel) && isset($mail))
	{
		$result = mysql_query ("INSERT INTO org (name,occupation,adress,amount,tel,mail) VALUES ('$name',
		'$occupation','$adress','$amount','$tel','$mail')");
	if ($result == 'true') {echo "
    <div class='row'>
            <div class='col-md-12 text-center'>
                <p class='redir'> Ваш заявка успешна добавлена! в ближайшее время мы свяжемся с вами! </p>
                <a href='../index.php' class='redirlnk'>Вернуться</a>
            </div>
    </div>
                ";}
	else {echo "<p> Комментарий не добавлен! </p> <a href='index.php' class='redirlnk'>Вернуться</a>";}
		
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