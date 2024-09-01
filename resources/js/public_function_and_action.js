$(document).ready(function (){
    $(document).on('input', '.only-nums', function (){
        $(this).val($(this).val().replace(/[^0-9]/g, ''))
    })
})
