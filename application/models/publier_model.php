<?php if (!defined('BASEPATH')) exit('No direct access allowed');

class publier_model extends CI_Model {

    const TABLE_QUESTION = 'question';
    const TABLE_REPONSE = 'reponse';

    public function add_question(array $questions)
    {
    	//return $this->db->insert_batch($this->tableQuestions, $questions);
        return $this->db->insert(self::TABLE_QUESTION, $questions);
    }

    public function add_reponses(array $reponses) {
        return $this->db->insert_batch(self::TABLE_REPONSE, $reponses);
    }

    //Obtenir les ids des questions inseres 
    public function getIds()
    {
    	return $this->db->select('QuestionID')
    					->from(self::TABLE_QUESTION)
    					->order_by('QuestionID', 'DESC')
    					->limit(15)
    					->get()
    					->result();
    }


    public function add_answers(array $answers)
    {
        return $this->db->insert_batch(self::TABLE_REPONSE, $answers);
    }

    public function isTrue(string $reponse)
    {
        return $this->db->set('isTrue', 1)
                        ->where('reponseText', $reponse)
                        ->update(self::TABLE_REPONSE);
    }

    public function count(string $table) {
        return $this->db->count_all($table);
    }

    public function getQuestions(int $prof = null) {
        if ($prof == null)
            return $this->db->select('*')->from(self::TABLE_QUESTION)->get()->result();
        return $this->db->select('*')
                    ->from(self::TABLE_QUESTION)
                    ->where('ProfesseurEt', $prof)
                    ->order_by('QuestionID', 'DESC')
                    ->limit(10)
                    ->get()->result();
    }

    public function getReponses($prof = null) {
        //if ($q == null) return $this->db->select('*')->from(self::TABLE_REPONSE)->get()->result();
        return $this->db->select('*')
                        ->from(self::TABLE_QUESTION)
                        ->join(self::TABLE_REPONSE, 'question.QuestionID = reponse.questionEt')
                        ->where('ProfesseurEt', $prof)
                        ->get()
                        ->result();
    }

    public function delReponses(int $rep) {
        return $this->db->delete(self::TABLE_QUESTION, array('QuestionID', $rep));
    }

}

