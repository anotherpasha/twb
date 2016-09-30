$('.login-form').on('submit', function(e) {
    e.preventDefault();

    var form = $(this);
    var url = form.prop('action');

    $.ajax({
        type: "post",
        url: url,
        data: form.serialize(),
        dataType: 'json',
        success: function(json) {
            if(json.status == 'success') {
                location.reload();
            } else {
                $("[id^=err_]").hide();
                $("[id^=err_]").empty();
                $("[id^=err_]").removeClass();
                for(var k in json.errors){
                    $('#err_' + k).addClass('panel--error');
                    $('#err_' + k).append('<strong>' + json.errors[k] + '</strong>');
                    $('#err_' + k).show();
                }
            }
        },
        error: function(json) {
            console.log(json);
        },
    });
});

Pace.on('done', function() {
    if(logged_in) {
        var button = document.getElementById('toggle--close');
        button.click();
    }
});
