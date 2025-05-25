window.onload = function() {
    render();
};

function render() {
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
    recaptchaVerifier.render();
}




function phoneAuth() {
    //get the number
    
    var selected_doc=document.getElementById("docselect").value;
    var number ="+918010269748";// document.getElementById('number').value;
    console.log("Selected Value: Phone Number - ", number, ", Selected Doctor - ", selected_doc);

    //it takes two parameter first one is number and second one is recaptcha
    firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function(confirmationResult) {
        //s is in lowercase
        window.confirmationResult = confirmationResult;
        coderesult = confirmationResult;
        console.log(coderesult);
        
        alert("Message sent");
  window.location = "http://localhost/chat/main/chat.php?user=pn";

        $.ajax({
            url: 'create_room.php',
            type: 'POST',
            data: { farmerId: selected_doc },
            success: function(result) {
              if (result.redirect) {
                window.location.href = result.redirect;
              } else {
                console.log("No redirect URL received");
              }
            },
            error: function(jqXHR, textStatus, errorThrown) {
              console.error('Error:', textStatus, errorThrown);
            }
          });
    }).catch(function(error) {
        alert(error.message);
    });
}
function ct(){

    window.open("index.php");
    location.reload();
}
function codeverify() {
    var code = document.getElementById('verificationCode').value;
    

    coderesult.confirm(code).then(function(result) {
        alert("Mobile verfied Sucessfuly");
        var user = result.user;
        console.log(user);
        document.getElementById('dat').removeAttribute('hidden');
        document.getElementById('veri').setAttribute('hidden', 'true');
    }).catch(function(error) {
        alert(error.message);
    });
}