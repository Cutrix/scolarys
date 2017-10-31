<?php if (!defined('BASEPATH')) exit('Interdiction de manipuler depuis l\'url');

class publier_model extends CI_Model {

	protected $tableQuestions = 'question';
    protected $tableReponse = 'reponse';

    public function add_question(array $questions)
    {
    	return $this->db->insert_batch($this->tableQuestions, $questions);
    }

    //Obtenir les ids des questions inseres 
    public function getIds()
    {
    	return $this->db->select('QuestionID')
    					->from($this->tableQuestions)
    					->order_by('QuestionID', 'DESC')
    					->limit(15)
    					->get()
    					->result();
    }


    public function add_answers(array $answers)
    {
        return $this->db->insert_batch($this->tableReponse, $answers);
    }

    public function isTrue(string $reponse)
    {
        return $this->db->set('isTrue', 1)
                        ->where('reponseText', $reponse)
                        ->update($this->tableReponse);
    }

    
}

