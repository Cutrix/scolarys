<?php if(!defined('BASEPATH')) exit('No direct access allowed');

class Inscription_model extends CI_Model {
    const TABLE_PARENT = 'parent';
    public function addParent(array $parent) {
        return $this->db->insert(self::TABLE_PARENT, $parent);
    }

}