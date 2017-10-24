<?php if(!defined('BASEPATH')) exit('No direct access allowed');

class Ajout_model extends CI_Model {

    protected $tableMatiere = 'matiere';
    protected $tableProfs = 'professeur';

    public function getAllSubject()
    {
        return $this->db->select('*')
                        ->from($this->tableMatiere)
                        ->get()
                        ->result();
    }


    public function count()
    {
    	return $this->db->count_all($this->table);
    }
}