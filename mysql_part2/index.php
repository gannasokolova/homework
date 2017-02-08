<?php

class Connect
{
    protected $connection;

    public function __construct($host, $username, $password, $db_name)
    {
        $this->connection = new PDO("mysql:host = $host;dbname = $db_name", $username, $password);
		$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if (!$this->connection) {
            throw new Exception('Could not connect to DB ');
        }
		//var_dump($this->connection);
    }
	
	public function run(){
		echo " Получить все записи всех полей из таблицы country<br><br>";
		$this->connection->exec("use practice_db");
		$sth = $this->connection->query('SELECT * FROM country');
		$country = $sth->fetchAll(PDO::FETCH_ASSOC);
		var_dump($country);
		echo "<br><br>";
		
		echo " Получить список названий стран<br><br>";
		$sth = $this->connection->query('SELECT name FROM country');
		$country = $sth->fetchAll(PDO::FETCH_ASSOC);
		var_dump($country);
		echo "<br><br>";
		
		echo " Получить список названий стран и их президентов.<br><br>";
		$sth = $this->connection->query('SELECT name, president FROM country');
		$country = $sth->fetchAll(PDO::FETCH_ASSOC);
		var_dump($country);
		echo "<br><br>";
		
		echo "Получить страны, порядковые номера которых больше 3 и меньше 7<br><br>";
		$sth = $this->connection->prepare('SELECT id, name FROM country WHERE id BETWEEN :one AND :two');
		$sth->execute(array("one"=>"3","two"=>"7"));
		$country = $sth->fetchAll(PDO::FETCH_ASSOC);
		var_dump($country);
		echo "<br><br>";
		
		echo "Получить страны, в которых население больше 
20 миллионов и порядковые номера которых меньше 7<br><br>";
		$sth = $this->connection->prepare('SELECT id, name, population FROM country WHERE id < ? AND population > ?;');
		$sth->execute(array(7,20000000));
		$country = $sth->fetchAll(PDO::FETCH_ASSOC);
		var_dump($country);
		echo "<br><br>";
		
		echo "Получить информацию о стране по конкретному названию<br><br>";
		$sth = $this->connection->prepare('SELECT * FROM country WHERE code = ? ;');
		$sth->execute(array("UA"));
		$country = $sth->fetchAll(PDO::FETCH_ASSOC);
		var_dump($country);
		echo "<br><br>";
		
		echo "Получить страны Азии <br><br>";
		$sth = $this->connection->prepare("SELECT name FROM country WHERE continent = 'Азия'");
		$sth->execute();
		$country = $sth->fetchAll(PDO::FETCH_ASSOC);
		var_dump($country);
		echo "<br><br>";
		
		echo "получить страны, порядковые номера которых либо 5, либо 7, либо 2<br><br>";
		$sth = $this->connection->prepare("SELECT name FROM country WHERE id IN (2, 5, 7)");
		$sth->execute();
		$country = $sth->fetchAll(PDO::FETCH_ASSOC);
		var_dump($country);
		echo "<br><br>";
		
		echo "Получить страны, названия которых содержат символ n <br><br>";
		$sth = $this->connection->prepare("SELECT name FROM country WHERE name LIKE '%n%'");
		$sth->execute();
		$country = $sth->fetchAll(PDO::FETCH_ASSOC);
		var_dump($country);
		echo "<br><br>";
		
		echo "получить выборку всех записей таблицы, назначив псевдонимы в виде сокращенных названий столбцов<br><br>";
		$sth = $this->connection->prepare("SELECT name as Country, 
														code as ID, 
														area as AreaCountry, 
														population as PopulationCountry, 
														continent as ContinentCountry, 
														president as PresidentCountry 
													FROM country ;");
		$sth->execute();
		$country = $sth->fetchAll(PDO::FETCH_ASSOC);
		var_dump($country);
		echo "<br><br>";
		
		echo "Получить список континентов без повторений <br><br>";
		$sth = $this->connection->prepare("SELECT DISTINCT continent 
										   FROM country");
		$sth->execute();
		$country = $sth->fetchAll(PDO::FETCH_ASSOC);
		var_dump($country);
		echo "<br><br>";
		
		echo "сгруппировать записи по названию континентов <br><br>";
		$sth = $this->connection->prepare("SELECT * FROM country GROUP BY continent");
		$sth->execute();
		$country = $sth->fetchAll(PDO::FETCH_ASSOC);
		var_dump($country);
		echo "<br><br>";
		
		echo "получить максимальное и минимальное население по странам <br><br>";
		$sth = $this->connection->prepare("SELECT min(population) as MinPop, max(population) as MaxPop FROM country");
		$sth->execute();
		$country = $sth->fetchAll(PDO::FETCH_ASSOC);
		var_dump($country);
		echo "<br><br>";
		
		echo "Получить среднее население по Европейским странам. Получить общее население всех стран. <br><br>";
		$sth = $this->connection->prepare("SELECT avg(population) as MaxPop FROM country WHERE continent = 'Europe';
												SELECT sum(population)  FROM country");
		$sth->execute();
		$country = $sth->fetchAll(PDO::FETCH_ASSOC);
		var_dump($country);
		echo "<br><br>";
		
		echo "получить континенты, среднее население по странам которых которых превышает 40 000 000 человек<br><br>";
		$sth = $this->connection->prepare("SELECT continent FROM country GROUP BY continent HAVING sum(population) > 40000000");
		$sth->execute();
		$country = $sth->fetchAll(PDO::FETCH_ASSOC);
		var_dump($country);
		echo "<br><br>";
		
		echo "получить полную таблицу упорядоченную по названию страны. <br><br>";
		$sth = $this->connection->prepare("SELECT * FROM country ORDER BY name");
		$sth->execute();
		$country = $sth->fetchAll(PDO::FETCH_ASSOC);
		var_dump($country);
		echo "<br><br>";
		
		echo "Получить полную таблицу упорядоченную по названию континентов и по названию страны. <br><br>";
		$sth = $this->connection->prepare("SELECT * FROM country ORDER BY continent, name");
		$sth->execute();
		$country = $sth->fetchAll(PDO::FETCH_ASSOC);
		var_dump($country);
		echo "<br><br>";
		
		echo "Получить последнюю добавленную запись из таблицы country. <br><br>";
		$sth = $this->connection->prepare("SELECT * FROM country ORDER BY id DESC LIMIT 1");
		$sth->execute();
		$country = $sth->fetchAll(PDO::FETCH_ASSOC);
		var_dump($country);
		echo "<br><br>";	
	}
}

$host = 'localhost';
$db_user = 'root';
$db_name = 'practice_db';
$db_password = '';

$connect = new Connect ($host, $db_user, $db_password, $db_name);
$connect->run();