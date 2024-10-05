<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="styles/aboutus_sylesheet.css" rel="stylesheet"/>
    
</head>
<body>

        <?php

            include 'navbar.php';
      
      ?>
    <!--vision mission-->
    <div class="full">
    <div class="container">
        <div class="about_us">
            <h1>About us</h1>
            <div class="underline"></div>
        </div>
        <div class="vision_mission">
            <div class="content">
                <div class="vision_mission_image">
                    <img src="vissionimage.jpg" alt="Vision image" width="150" height="150"/>
                </div>
                <div class="text">
                    <h2>Vision</h2>
                    <p>To become the leading platform for professional development, equipping teachers with innovative tools and skills to inspire the next generation of learners.</p>
                </div>
            </div>
        </div>
        <div class="vision_mission">
            <div class="content">
                <div class="vision_mission_image">
                    <img src="missioimage1.jpg" alt="Mission image" width="150" height="10" style="background-color: #a3d9a5;"/>
                </div>
                <div class="text">
                    <h2>Mission</h2>
                    <p>To offer dynamic, research-backed learning experiences that promote modern pedagogical approaches and support teachers in adapting to the ever-changing educational landscape.</p>
                </div>
            </div>
        </div>
    </div>
    
    <!--Our team-->
    <div class="title">
        <h1>Meet Our Team</h1>
    </div>
    <div class="team-member-card">
    <div class="main-card">
        <!--Admin card-->
        <div class="cards">
           <div class="card">
            <div class="content">
                <div class="img">
                    <img src="img1.jpg" alt="" width="100px"></img>
                </div>
                <div class="details">
                    <div class="name">DR.John Smith</div>
                    <div class="job">Head of Department</div>
                </div>
            </div> 
        </div> 

        <!--lecture card-->
        <div class="card">
            <div class="content">
                <div class="img">
                    <img src="img2.jpg" alt="" width="100px"></img>
                </div>
                <div class="details">
                    <div class="name">Prof.Jane Doe</div>
                    <div class="job">Senior Lecturer</div>
                </div>
            </div> 
        </div> 

        <!--support team card-->
        <div class="card">
            <div class="content">
                <div class="img">
                    <img src="img3.jpg" alt="" width="100px"></img>
                </div>
                <div class="details">
                    <div class="name">Alex Brown</div>
                    <div class="job">Teaching Assistant</div>
                </div>
            </div> 
        </div> 

        <!--teacher card-->
        <div class="card">
            <div class="content">
                <div class="img">
                    <img src="img 4.jpg" alt="" width="100px"></img>
                </div>
                <div class="details">
                    <div class="name">Ms.Emily White</div>
                    <div class="job">Support Manager</div>
                </div>
            </div> 
        </div> 
<!--footer  connection-->

    </div>
    </div>
</div>
<div class ="footer">

        <?php
        include "footer.php";
        ?>
    
</div>
</body>
</html>