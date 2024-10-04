
//pop up after submittion
function pop() {

    alert("The ticket has been successfully escalated to the administration.");
 
}

// Validate
function validate(){

        const ticket_id = document.getElementById('ticketId');
        const name = document.getElementById('agentName');
        const email = document.getElementById('email'); 
        
        if(ticket_id.value.trim()== "" || name.value.trim() == "" || email.value.trim() == ""){
            alert('All feilds are required!');
            return false;

        }else{

            pop() ;
            window.location.href = "supportDashboard.php";// Redirect 
            return true;
            
        }
}


//click window

var current = window.location.pathname;
var navLink = document.querySelectorAll('.nav');

navLink.forEach(function(link) {
    if(link.getAttribute('href') === current){
        link.classList.add('active');
    }
});