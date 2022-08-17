$(document).ready(function() {
    $("#done").click(function() {
        $("#messageShow").hide();
        var name = $("#name").val();
        var email = $("#email").val();
        var subject = $("#subject").val();
        var message = $("#message").val();
        var fail ="";
        if(name.lenght < 3) 
            fail = "Имя меньше 3x символов";
        else if(email.split('@').lenght-1==0 || email.split('.').length-1==0)
            fail = "Вы ввели неккорeктный email";
        else if (subject.lenght <5)   
            fail = "Тема сообщения менее 5 символов";
        else if (message.lenght <20)   
            fail = "Сообщение не менее 20 символов"; 
        
        if (fail !="") {
            $('#messageShow').html(fail + "<div class='clear'<br></div>");
            $('#messageShow').show();
            return false;
        } 
        $.ajax ({
            url: 'php/index.php',
            type: 'POST',
            cache: false,
            data: {'name': name, 'email': email, 'subject': subject, 'message': message},
            dataType: 'html',
            success: function(data) {
                $('#messageShow').html(data + "<div class='clear'><br></div>");
                $('#messageShow').show();
            }
        });
    });
});