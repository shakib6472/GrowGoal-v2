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

    $('.gg-st-registration-form').submit(function (e) {
        e.preventDefault();
        console.log('Sign in form submitted');
        $('.gg-preloader').css('display', 'flex');
        data = new FormData(this);  
        // build logic to check if the password and confirm password are the same
        var password = data.get('password');
        var confirm_password = data.get('confirm_password'); 
        // verify password is strong
        if (password.length < 8) {
            $('.gg-preloader').css('display', 'none');
            $('#wrong_password').removeClass('twg-hidden');
            $('#wrong_password').addClass('twg-grid');
            $('#login_wrong_message').html('Password must be at least 8 characters long');
        } else if (password.search(/[a-z]/) < 0) {
            $('.gg-preloader').css('display', 'none');
            $('#wrong_password').removeClass('twg-hidden');
            $('#wrong_password').addClass('twg-grid');
            $('#login_wrong_message').html('Password must contain at least one lowercase letter');
        } else if (password.search(/[A-Z]/) < 0) {
            $('.gg-preloader').css('display', 'none');
            $('#wrong_password').removeClass('twg-hidden');
            $('#wrong_password').addClass('twg-grid');
            $('#login_wrong_message').html('Password must contain at least one uppercase letter');
        } else if (password.search(/[0-9]/) < 0) {
            $('.gg-preloader').css('display', 'none');
            $('#wrong_password').removeClass('twg-hidden');
            $('#wrong_password').addClass('twg-grid');
            $('#login_wrong_message').html('Password must contain at least one number');
        } else if (password.search(/[!@#$%^&*]/) < 0) {
            $('.gg-preloader').css('display', 'none');
            $('#wrong_password').removeClass('twg-hidden');
            $('#wrong_password').addClass('twg-grid');
            $('#login_wrong_message').html('Password must contain at least one special character');
        }else if (password != confirm_password) {
            $('.gg-preloader').css('display', 'none');
            $('#wrong_password').removeClass('twg-hidden');
            $('#wrong_password').addClass('twg-grid');
            $('#login_wrong_message').html('Password and Confirm Password do not match');
        } else {
            //inclide nonce & Action
            data.append('security', growgoal_ajax.nonce);
            data.append('action', 'growgoal_student_registration');
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
                        // window.location.href = growgoal_ajax.home_url + '/dashboard';
                    } else {
                        // Show error message
                        $('.gg-preloader').css('display', 'none');
                        $('#wrong_password').removeClass('twg-hidden');
                        $('#wrong_password').addClass('twg-grid');
                        $('#login_wrong_message').html(response.data.message);
                    }
                },
                error: function (xhr, textStatus, errorThrown) {
                    // Handle error
                    console.error('Error:', errorThrown);
                }
            });
        }
    });

    $('.wp-logout').click(function (e) { 
        e.preventDefault();
        window.location.href = growgoal_ajax.logout_url
    });
});






