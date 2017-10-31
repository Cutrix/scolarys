<?php if(!defined('BASEPATH')) exit('No direct access allowed');

class Ajout_model extends CI_Model {

    protected $tableMatiere = 'matiere';
    protected $tableProfs = 'professeur';
    protected $tableAuth = 'authenfication';
    protected $tableEtablissement = 'etablissement';

    const PROF_PRIVILEGES = 2;

    public function getAllSubject()
    {
        return $this->db->select('matiereText')
                        ->from($this->tableMatiere)
                        ->get()
                        ->result();
    }

    public function getAllEtablissement()
    {
        return $this->db->select('etablissementText')
                        ->from($this->tableEtablissement)
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

    public function add_prof(array $prof)
    {
        return $this->db->insert($this->tableProfs, $prof);
    }

    public function getIdFromMatiere(string $matiere)
    {
        return $this->db->select('MatiereID')
                        ->from($this->tableMatiere)
                        ->where('matiereText', $matiere)
                        ->get()
                        ->result()[0]->MatiereID;
    }

    public function getIdFromEtablissement(string $etablissement)
    {
        return $this->db->select('EtablissementID')
                        ->from($this->tableEtablissement)
                        ->where('etablissementText', $etablissement)
                        ->get()
                        ->result()[0]->EtablissementID;   
    }


    public function count()
    {
    	return $this->db->count_all($this->table);
    }

    public function add_matiere(string $mat)
    {
        return $this->db->set('matiereText', $mat)
                        ->insert($this->tableMatiere);
    }
}