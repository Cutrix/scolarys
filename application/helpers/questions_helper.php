<?php if (!defined('BASEPATH')) exit('No direct access alowed');

if (!function_exists('questions')) {
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
                             <h4>Question</h4>
                             <label for='q' class='field-label'>la question</label>
                             <input type='text' class='field-input' name='q'>
                             <h4>Reponses</h4>
                             <div class='col-md-12'>                            
                                <button type='button' class='btn btn-success pull-right add-one'>Ajouter une reponse</button>         
                             </div>
                             <form method='post'>
                                <div class='dynamic-stuff'>
                                    
                                </div>
                             </form>
                        </div>
                        <div class='modal-footer'>
                            <div class='col-md-12'>
                                <button class='btn btn-primary btn-block'>Enregistrer</button>
</div>
                        </div>
                    </div>
                </div>
            </div>
        ";
    }
}