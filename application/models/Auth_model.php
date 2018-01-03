<?php if(!defined('BASEPATH')) exit('No direct access allowed');

class Auth_model extends CI_Model {

    const TABLE_AUTH = 'authenfication';
    const TABLE_PROF = 'professeur';
    const TABLE_ADMIN = 'admin';
    const TABLE_PARENT = 'parent';
    const TABLE_ETABLISSEMENT = 'etablissement';

    private function detectionAdmin(string $mail, string $pwd)
    {
        return $this->db->select('*')
                        ->from(self::TABLE_ADMIN)
                        ->where('email', $mail)
                        ->where('mdp', $pwd)
                        ->get()
                        ->result();        
    }

    private function detectionProf(string $mail, string $pwd)
    {
        return $this->db->select('*')
                        ->from(self::TABLE_PROF)
                        ->where('email', $mail)
                        ->where('mdp', $pwd)
                        ->get()
                        ->result();
    }

    private function detectionParent(string $mail, string $pwd)
    {
        return $this->db->select('*')
                        ->from(self::TABLE_PARENT)
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

    public function getEtablissement($mail = null) {
        if ($mail == null) return $this->db->select('*')->from(self::TABLE_ETABLISSEMENT)->get()->result();
        return $this->db->select('etablissementText')
                        ->from(self::TABLE_PROF)
                        ->join(self::TABLE_ETABLISSEMENT, 'professeur.etablissementEt = etablissement.EtablissementID')
                        ->where('email', $mail)
                        ->get()
                        ->result()[0];
    }
        
}