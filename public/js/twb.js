$('.login-form').on('submit', function(e) {
    e.preventDefault();

    var form = $(this);
    var url = form.prop('action');

    console.log(form.serialize());

    $.ajax({
        type: "post",
        url: url,
        data: form.serialize(),
        dataType: 'json',
        success: function(json) {
            if(json.status == 'success') {
                location.reload();
            } else {
                for(var k in json.errors){
                    alert(json.errors[k]);
                }
                console.log(json.errors);
            }
        },
        error: function(json) {
            console.log(json);
        },
    });
});