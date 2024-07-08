<?php
/**
 * Proyecto:CRUD API WEB
 * *
 * @author VictorJeanPierre
 * @link https://github.com/victorjeanpierre/JeanPierreProyectos
 */

class Conexion
{
    private $hostBd = 'localhost';
    private $nombreBd = 'apiweb';
    private $usuarioBd = 'root';
    private $passwordBd = '';
    private $pdo; // Propiedad para almacenar el objeto PDO

    public function __construct()
    {
        try {
            // Crear una nueva conexión PDO
            $this->pdo = new PDO("mysql:host=$this->hostBd;dbname=$this->nombreBd;charset=utf8", $this->usuarioBd, $this->passwordBd);

            // Establecer el modo de errores de PDO a excepciones
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error al conectar a la base de datos: " . $e->getMessage();
            exit;
        }
    }

    public function obtenerConexion()
    {
        return $this->pdo;
    }
}
