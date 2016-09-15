
<?php
Class Gerenciador{
	private $host = "localhost";
    private $db="questionario";
	private $user="root";
	private $pass="";
	public $conn;

	function __construct() {
		$con= new mysqli($this->host,$this->user,$this->pass,$this->db); 
		$this->conn = $con;
	}
	
	function oneQuery($coluna, $tabela, $dado, $igua_a_dado) {
		$result = $this->conn->query("SELECT {$coluna} FROM {$tabela} WHERE {$dado} = '{$igua_a_dado}'");
		return $result->fetch_assoc();
	}
}
?>

