<?php
class ManagerDb
{
	private $host;
	private $user;
	private $pass;
	private $dbname;
	function __construct($host, $user, $pass, $dbname)
	{
		$this->host=$host;
		$this->user=$user;
		$this->pass=$pass;
		$this->dbname=$dbname;
	}
	function connect()
	{
		$dsn='mysql:host='.$this->host.';dbname='.$this->dbname.';charset=utf8;'; // строка подключения для к серверу MySQL dsn(можно любое имя)
		$option=array(
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //EXCEPTION(ислючительная ситуация, сбой) ':: - два воеточия - входим в класс'
			PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC, // DEFAULT_FETCH_MODE - РЕЖИМ ДОСТАВАНИЯ ИЗ РЕСУРСА ПО УМОЛЧАНИЮ
			PDO::MYSQL_ATTR_INIT_COMMAND=>'set names utf8' //чтобы можно было использовать кодировку utf8
		);
		$pdo=new PDO($dsn, $this->user, $this->pass, $options); //создаем объект
		return $pdo; //возвращаем значение
	}
	function Show()
	{
		echo "host:".$this->host."user:".$this->user."pass:".$this->pass."dbname:".$this->dbname."<br/>";
	}

}
/*$m=new ManagerDb('localhost','root', '654321','shop91');
$m->Show();*/



?>