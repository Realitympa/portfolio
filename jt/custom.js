// alert('hhh')
$(document).ready(function(){
    Swal.fire("SweetAlert2 is working!");
$('#send_mssg').click(function (e) {

    let name = $('#Name').val()
    //VAlidation of Name
    if(name == "") 
        {
            swal.fire({
                title: "Error",
                text: "please enter your name",
                icon: "question"
            })
            return false;
    }

    let email = $('#Email').val()
    //VAlidation of Name
    if(email == "") {
        swal.fire({
            title: "Error",
            text: "please enter a valid mail",
            icon: "question"
        })
        return false;
    }
    let phone = $('#Phone').val();
    //VAlidation of Name
    if(phone == "") 
        {
            swal.fire({
                title: "Error",
                text: "please enter your phone",
                icon: "question"
            })
            return false;
    }

    let message = $('#Message').val();
    //VAlidation of Name
    if(message== "") {
        swal.fire({
            title: "Error",
            text: "Enter your text",
            icon: "question"
        })
        return false;
    }

})

});