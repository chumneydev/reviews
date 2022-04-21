var customUrl = $(location).attr("href").split('/').pop();
console.log(customUrl);

$(document).on('click', '#submit', function (e) {

    var customUrl = $(location).attr("href").split('/').pop();
    console.log(customUrl);


    e.preventDefault();

    var data = {
        url: customUrl,
        fullname: $('#fullname').val(),
        email: $('#email').val(),
        phone: $('#phone').val(),
        comments: $('#comments').val()
    };





    $('#submit').text('Form Submission in Progress');

    var recap = grecaptcha.getResponse();
    if( recap.length === 0) {
        iziToast.show({
            title: 'Oops...',
            titleColor: '#FFFFFF',
            message: 'Looks like you need to verify yourself',
            messageColor: '#FFFFFF',
            backgroundColor: '#E53E3E',
            position: 'center'
        });


    }
    else {
        $.ajax({
            type: 'POST',
            url: 'http://davidsmithcompany.com/process.php',
            data: data,
            captcha: grecaptcha.getResponse(),
            success: function () {
                console.log('heeeelp')
                $('#submit').text('Thank You for your Submission!');

                iziToast.show({
                    title: 'Thank you!',
                    titleColor: '#FFFFFF',
                    message: 'Someone will be in contact soon.',
                    messageColor: '#FFFFFF',
                    backgroundColor: '#38A169',
                    position: 'center'
                });



            }

        }); // end ajax

    }










});