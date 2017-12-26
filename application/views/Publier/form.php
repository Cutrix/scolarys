<div class="container">
    <div class="col-md-6">
        <?= proposition_questions() ?>
        <button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal" id="q1">Proprosition de question 1</button>
        <button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal" id="q2">Proprosition de question 2</button>
        <button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal" id="q3">Proprosition de question 3</button>
        <button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal" id="q4">Proprosition de question 4</button>
        <button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal" id="q5">Proprosition de question 5</button>
        <button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal" id="q6">Proprosition de question 6</button>
        <button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal" id="q7">Proprosition de question 7</button>
        <button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal" id="q8">Proprosition de question 8</button>
        <button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal" id="q9">Proprosition de question 9</button>
        <button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal" id="q10">Proprosition de question 10</button>
        <button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal" id="q11">Proprosition de question 11</button>
        <button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal" id="q12">Proprosition de question 12</button>
        <button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal" id="q13">Proprosition de question 13</button>
        <button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal" id="q14">Proprosition de question 14</button>
        <button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal" id="q15">Proprosition de question 15</button>

    </div>

    <div class="col-md-6">
        <h3>Planification des questions</h3>
    </div>
    <div class="form-group dynamic-element" style="display: none">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-9">
                <input type="text" placeholder="la reponse" class="form-control" name="reponses[]">
                <div class="col-md-1"><button type="button" class="btn btn-success delete">X</button></div>
            </div>
        </div>
    </div>
</div>
<script src="<?= js_url('dynamicForm') ?>"></script>