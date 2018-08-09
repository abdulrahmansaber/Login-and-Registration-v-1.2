$(function () {

  // Ajax function
  function sendRequest(url, type, success_element, data)
  {
    $.ajax({
      url: url,
      type: type,
      data: data,
      success: function(return_dtscc) {
          $(success_element).html(return_dtscc);
      }
    });
  }

//*************************************************\\

  // Login
  $('.login-form form button').click(function () {

    // alert('CLICKED!');

    var checkbox = 0;

    if ($('.login-form form label #checkbox-box').is(':checked'))
    {
      checkbox = 1;
    }

    sendRequest(
      'ajax/login.ajax.php',
      'POST',
      '.login-form .success-d',
      {
        'username': $('.login-form form input:eq(0)').val(),
        'password': $('.login-form form input:eq(1)').val(),
        'remme': checkbox
      }
    );

  });

//*************************************************\\

  // Registertion
  $('.register #first-stage form .new-acc').click(function () {
    sendRequest(
      'ajax/reg.ajax.php',
      'POST',
      '.register .reg-output',
      {
        'username': $('.register #first-stage input:eq(0)').val(),
        'firstname': $('.register #first-stage input:eq(1)').val(),
        'lastname': $('.register #first-stage input:eq(2)').val(),
        'email': $('.register #first-stage input:eq(3)').val(),
        'password': $('.register #first-stage input:eq(4)').val()
      }
    );
  });


});
