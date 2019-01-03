function signup(){
    username = $('#username').val();
    password = $('#password').val();
   // console.log(x);
   // console.log(y);
    $.ajax({
        type: "POST",
        url: "backend/signup_ajax.php",
        data: {
            //data goes here
            username,
            password
        },
        success: function (data) {
           //data is returned here
            if(data == "SUCCESS"){
                alert("Successfully Registered");
                window.location = '';
            }
            else{
                alert("Failed to signup, please try again later");
            }
        }
    });
}
