<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel ="stylesheet" type="text/css" href="./styles/contact_us_style.css">
    
    <!--conctact us-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!--social media style sheet-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   

    <script>
          
            //showing above other modals

            function pop(modalId) 
            {
                const modal = document.getElementById(modalId);
                const contactButton = document.getElementById("contact");
                const ticketButton = document.getElementById("ticket");
              
                if (modal.style.display === "none" || modal.style.display === "")
                {
                  modal.style.display = "block";//show modal
                  contactButton.style.display = "none";//hide buttons
                  ticketButton.style.display = "none";
                } else {
                  modal.style.display = "none";//hide modal
                  contactButton.style.display = "block";//show butns
                  ticketButton.style.display = "block";
                }
            }

          
          /// Function to validate the form
          // Validate
          function validate(){

          const name = document.getElementById('Cname');
          const phone_no = document.getElementById('phone');
          const message = document.getElementById('Conmessage'); 

          if(name.value.trim()== "" || phone_no.value.trim() == "" || message.value.trim() == ""){
              alert('All feilds are required!');
              return false;

          }else{

              pop() ;
              window.location.href = "supportDashboard.php";// Redirect 
              return true;
              
          }
          }
          function validateT(){

          const sub = document.getElementById('subject');
          const mail = document.getElementById('email');
          const msg = document.getElementById('Tickmessage'); 

          if(sub.value.trim()== "" || mail.value.trim() == "" || msg.value.trim() == ""){
              alert('All feilds are required!');
              return false;

          }else{

              pop() ;
              window.location.href = "supportDashboard.php";// Redirect 
              return true;
              
          }
          }

          //cancle

          // Get modal elements
          const ticketModal = document.getElementById('ticket-modal');
          const contactModal = document.getElementById('contact-modal');

            // Close the modals when clicking outside of them
            window.onclick = function(event) {
                if (event.target == ticketModal) {
                    ticketModal.style.display = "none";
                }
                if (event.target == contactModal) {
                    contactModal.style.display = "none";
                }
            };


    </script>

    <!-- google map iframe-->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>

</head>
<body>

  <div class="container">

    <div class="banner">

      <!--Navigation bar creating with logo--> 
      <div class="navbar">
          <img src="images/logo.png" alt="logo"class="logo">
          <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="About us.php">About</a></li>
                <li><a href="contact_us.html">Contact Us</a></li>
                <li><a href="#" id ="nav-signbtn">Sign In</a></li>
                <li><a href="#">Join Now</a></li>
          </ul>
      </div>

      <div class="content">

        <h1>Contact Us</h1>

            <div class="left-column">

              <div id="frame">

                <div class="contact-info">
                    <p><i class = "fa fa-map-marker"></i> 160/A, Ekambara state, Gaspe. </p><br>
                    <p><i class="fa fa-phone"></i> +94 765826516</p><br>
                    <p><i class="fa fa-envelope"></i> info@TechWave.com</p>
                </div>
            

                <div id="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7981864353305!2d79.97316739999998!3d6.914716300000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256db1052b40d%3A0x7375f940e8cc58f5!2sFaculty%20of%20Computing!5e0!3m2!1sen!2slk!4v1727507333096!5m2!1sen!2slk"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" aria-label="TechWave"></iframe>
                </div>

              </div>
            </div>
      
            <div class="right-column">

              <script src = "./js/contact_us.js"></script>

              <div>
                
                <div id="frame">
              
                  <button class ="contactUs-btn" id="contact" type="button" onclick="pop('contact-modal')"><span></span>Contact Us</button><br>
                  <p>You are always welcome to contact us. Our Customer Service is available Mon-Fri 9:00 a.m.- 8:00 p.m. and Sat-Sun 10:00 a.m.-6:00p.m. (GMT
                  +5:30). We look forward to hearing from you!</p>
                  <br> 
                
                </div>
            
                <div id="frame">

                  <button class ="ticket-btn" id="ticket" type="button" onclick="pop('ticket-modal')" ><span></span>Raise A Ticket</button><br>
                  <p>Having trouble? Don't hesitate to submit a ticket for assistance. Our dedicated support team is ready to help you resolve your issue.
                  Click here to submit a ticket. We'll do our best to provide a prompt and helpful response.</p>
                
                </div>

              </div>
    
              <div id="ticket-modal" style="display: none;">

                <div class="modal-content">

                  <fieldset id="ticket-form">

                    <form onsubmit="  return validateT()" id = "ticket" action="cont2.php" method="post" >
                  
                      <input type="hidden" name="formID" value="form1">

                      <label for="subject">Subject</label><br>
                      <input type="text" id="subject" name="subject" value=""  ><br><br>
                      
                      <label for="email">Email</label>
                      <input type="text" id="email" name="email"   ><br><br>

                      <label for="message">Message</label><br>
                      <textarea id="Tickmessage" name="message"   placeholder=" enter your message here"></textarea><br><br>

                      <input id="submit" type="submit" value="submit" name="tickets">

                    </form> 

                  </fieldset>

                </div>

              </div>

              <div id="contact-modal" style="display: none;">

                <div class="modal-content">

                  <fieldset id="contactUs-form">

                    <form id = "contact" action="cont2.php" method="post"  onsubmit="  return validate()">

                      <input type="hidden" name="formID" value="form2">

                      <label for="CName">Name</label>
                      <input type="text" id="Cname" name="Cname" value=""  ><br><br>

                      <label for="Phone">Phone No.</label><br>
                      <input type="number" id="phone" name="Phone" value="" ><br><br>

                      <label for="message">Message</label><br>
                      <textarea id="Conmessage" name="cmessage" ></textarea><br><br>

                      <input id="submit" type="submit" value="submit" name="contact">

                    </form> 

                  </fieldset>
                </div>
              </div>
            </div>

      </div>
      <br>
  </div>

<!--Footer -->
<footer>

  <div class="footer-col">

    <h4>Quick Links</h4>

      <ul>
        <li><a href="home.php">-Home</a></li>
        <li><a href="About_us.php">-About Us</a></li>
        <li><a href="#">-Contact Us</a></li>
        <li><a href="#">-Privacy And Policy</a></li>
      </ul>

  </div>

  <div class="footer-col">

    <h4>Contact Us</h4>

      <p><img src="images/gps.png" alt="gps" class="contact-img"> 160/A, Ekambara state, Gaspe.</p>
      <p><img src="images/phone.png" alt="gps" class="contact-img"> +94 765826516</p>
      <p><img src="images/email.png" alt="gps" class="contact-img"> info@TechWave.com</p>
 
    <h4>Follow Us</h4>

      <div class="links">

        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
        <a href="#"><i class="fa-brands fa-youtube"></i></a>
      
      </div>

  </div>

</footer>
 
</body>
</html>