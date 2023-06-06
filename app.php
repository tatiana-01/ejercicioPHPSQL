<?php 
    require_once 'vendor/autoload.php';
    use App\Database;
    use Conf\connectionString;
    use Models\Paises;
    use Models\Departamentos;
    $obj = new connectionString();
    $db = new Database($obj->db);
    $conn = $db->getConnection('mysql');
    Paises::setConn($conn);
    Departamentos::setConn($conn);
?>