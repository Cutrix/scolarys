<?php if (!defined('BASEPATH')) exit('No direct access alowed');

if (!function_exists('proposition_questions')) {
    function proposition_questions() {
        return "
            <div id='myModal' class='modal fade' role='dialog'>
                <div class='modal-dialog'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <button type='button' class='close' data-dismiss='modal'>&times;</button>
                            <h3>Propositions de questions/reponses</h3>
                        </div>
                        <div class='modal-body'>                                                                                       
                             <div class='col-md-12'>                            
                                <button type='button' class='btn btn-success pull-right add-one'>Ajouter une reponse</button>         
                             </div>
                             <form method='post'>
                                <div class='dynamic-stuff'>
                                    <label for='q' class='field-label'>la question</label>
                                    <input type='text' class='field-input' name='q'>       
                                </div>
                                <input type='submit' value='Valider' class='btn btn-primary'>
                             </form>
                        </div>
                        <div class='modal-footer'>
                            <div class='col-md-12'>
                            
</div>
                        </div>
                    </div>
                </div>
            </div>
        ";
    }
}

if (!function_exists('answersIsEmpty')) {
    function answersIsEmpty(array $ans) {
        return empty($ans);
    }
}

