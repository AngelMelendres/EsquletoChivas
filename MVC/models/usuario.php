<?php
class UsuarioModel extends Model{
    public function __construct(){
        parent::__construct();
    }

    public function getUsuarios(){
        try {
            $usuarios = $this->conexion->prepare("SELECT * FROM usuario");
            $usuarios->execute();
            return $usuarios->fetchAll(PDO::FETCH_OBJ);
 
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function registrarUsuario(){
        echo '<br>modelo usuario insertar ';

    }



}
?>