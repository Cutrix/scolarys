<?php if(!defined('BASEPATH')) exit('No direct access allowed');

class Config_model extends CI_Model {

    protected $tableProfs = 'professeur';
    protected $tableAdmin = 'admin';
    protected $tableParent = 'parent';

   
    public function change_email(string $statut, string $mail)
    {
        switch($statut) {
            case 'prof':
                return $this->db->set('email', $mail)
                                ->update($this->tableProfs);
            case 'su':
                return $this->db->set('email', $mail)
                                ->update($this->tableAdmin);
            case 'parent':
                return $this->db->set('email', $mail)
                                ->update($this->tableParent);
        }
    }

    public function getCurrentPwd(string $user)
    {
        return $this->db->select('mdp')
                        ->from($this->tableProfs)
                        ->where('email', $user)
                        ->get()
                        ->result();
    }

    public function change_pwd(string $npwd, string $mail, string $statut)
    {
        switch($statut) {
            case 'su':
                return $this->db->set('mdp', $npwd)
                        ->where('email', $mail)
                        ->update($this->tableAdmin);
            case 'prof':
                return $this->db->set('mdp', $npwd)
                                ->where('email', $mail)
                                ->update($this->tableProfs);
            case 'parent':
                return $this->db->set('mdp', $npwd)
                        ->where('email', $mail)
                        ->update($this->tableParent);                        
        }
    }


    public function find_email(string $mail)
    {
        return $this->db->select('email')
                        ->from($this->tableProfs)
                        ->where('email', $mail)
                        ->get()
                        ->result();
    }

    public function s_dpwd(string $mail)
    {
        return $this->db->set('mdp', sha1('0000'))
                        ->where('email', $mail)
                        ->update($this->tableProfs);
    }
    
}