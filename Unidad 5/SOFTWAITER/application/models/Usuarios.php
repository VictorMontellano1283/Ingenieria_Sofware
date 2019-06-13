<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Model {

	public function verusuarios()
	{

		$us = $this->db->query("SELECT * FROM usuarios1 WHERE 1");
		$data = $us->result_array();
		return $data;
	}

	public function insertarusuario_model($Nombre,$Evento,$Lugar,$Tel)
	{
		$ejecutar_consulta = $this->db->query("INSERT INTO usuarios1 (`Nombre`, `Evento`, `Lugar`, `Tel`) VALUES ('$Nombre','$Evento','$Lugar','$Tel')" );
	}
	public function eliminarusuario_model($id)
	{
		$ejecutar_consulta = $this->db->query("DELETE FROM usuarios1 WHERE id=$id ORDER BY Nombre,Evento,Lugar,Tel");
	}
public function editarusuario_model($id,$Nombre,$Evento,$Lugar,$Tel)
	{
		$ejecutar_consulta = $this->db->query("UPDATE usuarios1 SET Nombre='$Nombre',Evento='$Evento',Lugar='$Lugar',Tel='$Tel");
	}
	
}
