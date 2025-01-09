jQuery(document).ready(function ($) {
    console.log('Init GrowGoal JS 1.0.0');
    $('.gg-sign-in-form').submit(function (e) {
        e.preventDefault();
        console.log('Sign in form submitted');
        // get formdata
        data = new FormData(this);
        var form = $(this); 
        console.log(data);
        // submit button text to sinnign in
        form.find('button[type="submit"]').text('Signing in...');
        //inclide nonce & Action
        data.append('security', growgoal_ajax.nonce);
        data.append('action', 'growgoal_verify_login');
        console.log(data);

        // AJAX
        $.ajax({
            type: 'POST',
            url: growgoal_ajax.ajaxurl,  
            data: data,
            dataType: 'json',
            processData: false,  
            contentType: false,  
            success: function (response) {
                // Handle success response
                console.log(response);
                if (response.success) {
                    // Redirect to the dashboard
                    window.location.href = growgoal_ajax.home_url + '/dashboard';
                } else {
                    // Show error message
                    $('#wrong_password').removeClass('twg-hidden'); 
                    $('#wrong_password').addClass('twg-grid');  
                    $('#login_wrong_message').html(response.data.message);
                    form.find('button[type="submit"]').text('Sign in');
                }
            },
            error: function (xhr, textStatus, errorThrown) {
                // Handle error
                console.error('Error:', errorThrown);
            }
        });
    });
});