<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Persona extends CI_Model{

    function crear($nombre,$sexo,$edad,$nivel,$nacionalidad,$telefono){
        $this->load->database();
    $data = array(
        'nombre' => $nombre,
        'sexo' => $sexo,
        'edad' => $edad,
        'nivel' => $nivel,
        'nacionalidad' => $nacionalidad,
        'celular' => $telefono
        
    );
    $this->db->insert('persona', $data);
  return 0;
 }
 function obtenertodo(){
    $this->load->database();
    $query = $this->db->get('persona');
    return $query;

 }
 function buscarID($id){
    $this->load->database();
    $this->db->where('id', $id);
    $this->load->database();
    
    $query = $this->db->get('persona');
    return $query;

 }
 function buscarnombre($id){
    $this->load->database();
    $this->db->where('nombre', $id);
    $query = $this->db->get('persona');
    return $query;

 } 
 function borrarID($id){
    $this->load->database();
    $this->db->where('id', $id);
    $this->load->database();
    
    $query = $this->db->delete('persona');
    return $query;

 }
 function borrarnombre($id){
    $this->load->database();
    $this->db->where('nombre', $id);
    $query = $this->db->delete('persona');
    return $query;

 }
}