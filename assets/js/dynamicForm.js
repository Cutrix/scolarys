$(function() {
    $('.add-one').click(function () {
        $('.dynamic-element').first().clone().appendTo('.dynamic-stuff').show()
        attach_delete()
    })
    function attach_delete() {
        $('.delete').off()
        $('.delete').click(function() {
            $(this).closest('.form-group').remove()
        })
    }
})