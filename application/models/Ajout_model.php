<?php if(!defined('BASEPATH')) exit('No direct access allowed');

class Ajout_model extends CI_Model {

    protected $tableMatiere = 'matiere';
    protected $tableProfs = 'professeur';
    protected $tableAuth = 'authenfication';
    protected $tableEtablissement = 'etablissement';

    const PROF_PRIVILEGES = 2;

    public function getAllSubject()
    {
        return $this->db->select('*')
                        ->from($this->tableMatiere)
                        ->get()
                        ->result();
    }
    
    public function add_professor(string $email, string $pwd, int $matiere) {
        
    }

    public function add_etablissement(string $et, string $num = null)
    {
        $this->db->set('etablissementText', $et);
        $this->db->set('numero', $num);

        return $this->db->insert($this->tableEtablissement);
    }


    public function count()
    {
    	return $this->db->count_all($this->table);
    }

    public function add_matiere(string $mat)
    {
        $this->db->set('matiereText', $mat);        

        return $this->db->insert($this->tableMatiere);   
    }
}