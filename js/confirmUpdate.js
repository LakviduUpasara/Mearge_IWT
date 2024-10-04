/* Nadeeja - confirmUpdate js */
function confirmUpdate(){
    var a = confirm("Confirm Update: Are you sure you want to apply these changes?");
    if(a==true)
    {
        alert("Updated Successfully");
    }
    else
    {
        alert("Not Updated");
    }
}
function confirmLogout() {
    const message = "Are you sure you want to log out?";
    
    if (confirm(message)) {
        window.location.href = "index.php";
    } else {
        alert("Logout canceled.");   
    }
}