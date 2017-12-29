<div class="container">
    <div class="col-md-6">
        <?= proposition_questions() ?>
        <button class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal" id="q1">Proprosition de question 1</button>

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