<?php
session_start();
Class Connection{
 
	private $server = "mysql:host=localhost;dbname=academia";
	private $username = "root";
	private $password = "";
	private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
	protected $conn;
 	
	public function open(){
 		try{
 			$this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
 			return $this->conn;
 		}
 		catch (PDOException $e){
 			echo "Hubo un problema con la conexión: " . $e->getMessage();
 		}
 
    }
 
	public function close(){
   		$this->conn = null;
 	}
 
}
 

if(isset($_POST['add'])){
	$database = new Connection();
	$db = $database->open();
	try{
		//prevenir la inyección de sql
		$stmt = $db->prepare("INSERT INTO students (date_registered, email, id, name, nif, pass, surname, telephone, username) VALUES (:date_registered, :email, :id, :name, :nif, :pass, :surname, :telephone, :username)");

		
		
		$_SESSION['message'] = ( $stmt->execute(array(':date_registered'=> $_POST['date_registered'],':email' => $_POST['email'],':name' => $_POST['name'],':nif' => $_POST['nif'],':pass' => MD5($_POST['pass']),':surname' => $_POST['surname'], ':telephone' => $_POST['telephone'],':username' => $_POST['username']))) ? 'Guardado correctamente' : 'Algo salió mal. No se puede agregar';	


	}
	catch(PDOException $e){
		$_SESSION['message'] = $e->getMessage();
	}

	//cerrar la conexion
	$database->close();
}

else{
	$_SESSION['message'] = 'Llene el formulario';
}

header('location: ../folder/student.php');
	
?>

<?php
   /*Datos de conexion a la base de datos*/
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "academia";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
}

?>