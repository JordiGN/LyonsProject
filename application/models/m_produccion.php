<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_produccion extends CI_Model{
  function __construct(){
    parent::__construct();
  }
  //Validar usuario
    /*public function validarUsuario($user,$pass){
          $this->db->where('email',$user);    //    La consulta se efectúa mediante Active Record. Una manera alternativa, y en lenguaje más sencillo, de generar las consultas Sql.
          $this->db->where('password',$pass);
          $query=$this->db->get('colono');
          return $query->result_array();
    }*/
    public function validarUsuario($cuenta,$clave){
      $this->db->where('email',$cuenta);
      $this->db->where('password',$clave);
      $query=$this->db->get('colono');
      return $query->result_array();
     }
    /*public function validarUsuarioAdmon($user,$pass){
          $this->db->where('email',$user);    //    La consulta se efectúa mediante Active Record. Una manera alternativa, y en lenguaje más sencillo, de generar las consultas Sql.
          $this->db->where('password',$pass);
          $query=$this->db->get('admon');
          return $query->result_array();
    }*/


  //Alta de actividades de los tipos de eventos
    public function altaActEvento($nombre,$representante,
      $horario,$fecha,$lugar,$descripcion,$ecobonos,$galeria){
      $this->db->set('nombre',$nombre)
              ->set('descripcion',$descripcion)
              ->set('responsable',$representante)
              ->set('fecha_Inicio',$fecha)
              ->set('lugar',$lugar)
              ->set('horario',$horario)
              ->set('eco-bonos',$ecobonos)
              ->set('galeria_idGaleria',$galeria)
              ->insert('evento');
  }
}
