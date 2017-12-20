<?php if (!defined('BASEPATH')) exit('No direct access alowed');

if (!function_exists('questions')) {
    function proposition_questions() {
        return "
            <div id='myModal' class='modal fade' role='dialog'>
                <div class='modal-dialog'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <button type='button' class='close' data-dismiss='modal'>&times;</button>
                            <h4>Propositions de reponses aux questions</h4>
                        </div>
                        <div class='modal-body'>
                            <p>Some text in modal</p>
                        </div>
                        <div class='modal-footer'>
                            kkl,klkll
                        </div>
                    </div>
                </div>
            </div>
        ";
    }
}