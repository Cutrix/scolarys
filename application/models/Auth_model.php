<?php if(!defined('BASEPATH')) exit('No direct access allowed');

class Auth_model extends CI_Model {

    protected $table = 'authenfication';
    protected $tableProf = 'professeur';
    protected $tableAdmin = 'admin';
    protected $tableParent = 'parent';

    private function detectionAdmin(string $mail, string $pwd)
    {
        return $this->db->select('*')
                        ->from($this->tableAdmin)
                        ->where('email', $mail)
                        ->where('mdp', $pwd)
                        ->get()
                        ->result();        
    }

    private function detectionProf(string $mail, string $pwd)
    {
        return $this->db->select('*')
                        ->from($this->tableProf)
                        ->where('email', $mail)
                        ->where('mdp', $pwd)
                        ->get()
                        ->result();
    }

    private function detectionParent(string $mail, string $pwd)
    {
        return $this->db->select('*')
                        ->from($this->tableParent)
                        ->where('email', $mail)
                        ->where('mdp', $pwd)
                        ->get()
                        ->result();                
    }


    public function detection(string $mail, string $pwd) 
    {
        if (!empty($this->detectionAdmin($mail, $pwd))) 
            return $this->detectionAdmin($mail, $pwd);
        if (!empty($this->detectionProf($mail, $pwd)))
            return $this->detectionProf($mail, $pwd);
        if (!empty($this->detectionParent($mail, $pwd)))
            return $this->detectionParent($mail, $pwd);
    }

    public function isSu(array $det)
    {
        return intval($det[0]->privilegesEt) === 1;
    }

    public function isProf(array $det)
    {
        return intval($det[0]->privilegesEt) === 2;   
    }

    public function isParent(array $det)
    {
        return intval($det[0]->privilegesEt) === 3;   
    }
        
}