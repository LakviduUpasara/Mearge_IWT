/* Nadeeja - confirmUpdate js */
function confirmUpdate(){
    var a = confirm("Confirm Update: Are you sure you want to apply these changes?");
    
    if(a) { // User clicked "OK"
        alert("Updated Successfully");
        return true; // Allow form submission or process to continue
    } else { // User clicked "Cancel"
        alert("Not Updated");
        return false; // Prevent further action
    }
}
function confirmLogout() {
    const message = "Are you sure you want to log out?";
    
    if (confirm(message)) {
        window.location.href = "logout.php";
    } else {
        alert("Logout canceled.");   
    }
}
function replyupdate() {
    
  alert("Replied");
}

