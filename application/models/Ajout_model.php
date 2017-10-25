<?php if(!defined('BASEPATH')) exit('No direct access allowed');

class Ajout_model extends CI_Model {

    protected $tableMatiere = 'matiere';
    protected $tableProfs = 'professeur';
    protected $tableAuth = 'authenfication';

    const PROF_PRIVILEGES = 2;

    public function getAllSubject()
    {
        return $this->db->select('*')
                        ->from($this->tableMatiere)
                        ->get()
                        ->result();
    }

    public function add_professor($email, $pwd) {
        $this->db->set('email', $email);
        $this->db->set('mdp', $pwd);
        $this->db->set('privilegeEt', self::PROF_PRIVILEGES);

        return $this->db->insert($this->tableAuth);
    }


    public function count()
    {
    	return $this->db->count_all($this->table);
    }
}