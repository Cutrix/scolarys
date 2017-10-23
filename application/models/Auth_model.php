<?php if(!defined('BASEPATH')) exit('Pas accessible depuis en haut');

class Auth_model extends CI_Model {

    protected $table = 'authenfication';

    public function connect($email, $mdp)
    {
    	return $this->db->select('*')
    					->from($this->table)
    					->where('email', $email)
    					->where('mdp', $mdp)
    					->get()
    					->result();
    }


    public function count()
    {
    	return $this->db->count_all($this->table);
    }
}