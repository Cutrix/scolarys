<?php if(!defined('BASEPATH')) exit('Pas accessible depuis en haut');

class Auth_model extends CI_Model {

    protected $table = 'authenfication';
    protected $tableProf = 'professeur';

    public function connect($email, $mdp)
    {
    	return $this->db->select('*')
    					->from($this->table)
    					->where('email', $email)
    					->where('mdp', $mdp)
    					->get()
    					->result();
    }

    public function isProf(int $auth)
    {
        return $this->db->set('authEt', $auth)
                        ->update($this->tableProf);
                        
    }


    public function count()
    {
    	return $this->db->count_all($this->table);
    }

    public function isSu($mail, $pass)
    {
        return $this->db->select('privilegeEt')
                        ->from($this->table)
                        ->where('email', $mail)
                        ->where('mdp', $pass)
                        ->get()
                        ->result();
    }
}