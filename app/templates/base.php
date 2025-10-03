<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Icon -->
        <link rel="icon" type="image/png" href="app/media/icon.png"/>

        <!-- Importing Fonts from Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">

        <!-- base CSS -->
        <style>
            /* Html and Body reset */
            body, html {
                width: 100%;
                height: 100%;
                margin: 0;
                background-color: #202020ff;
            }

            /* Header Styling */
            .header {
                display: flex;
                flex-direction: row;
                width: 100%;
                height: 125px;
                background-color: #af4428;
                justify-content: space-between;
                align-items: center;
                border-bottom: 4px solid black;
                position: sticky;
                z-index:100;

            }

            /* Logo Styling */
            .logo-container{
                margin-right: 8%;
                width:50px;
                height:50px;
                overflow:clip
            }
            .logo-img{
                height: 50px;
                width: 50px;
                transform: scale(3.5);
                margin-top: 5px
            }
            /* Hamburger Menu Styling */
            .hamburger-menu {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                width: 50px;
                height: 50px;
                background: none;
                border: black solid;
                margin: 0;
                padding: 0;
                color: inherit;
                cursor: pointer;
                border-radius: 5px
            }

            .bar {
                width: 30px;
                height: 5px;
                background-color: black;
                margin: 3px;
                border-radius: 16px
            }

            /* Sidebar Styling */
            .sidebar {
                display: flex;
                flex-direction: column;
                text-align: center;
                width: 75%;
                height: 100%;
                background-color: #af4428;
                position: absolute;
                z-index:100;
                top: 129px;
                left: -77%;
                transition: left 0.3s ease;
                border-right: solid black 4px;
            }
            /* Tabs */
            .sidebar a{
                display: flex;
                padding: 15px;
                text-decoration: none;
                color: white;
                font-family: 'Fjalla One', sans-serif;
                border: 1px solid white;
                align-items: center;
                justify-content: center;
                border-radius: 16px;
                margin-inline: 10px;
                margin-top: 10px;
                opacity: 0;
            }
            .sidebar-btn {
                all: unset;
            }
            .sidebar a:hover{
                color: black;
                border-color: black;
                background-color: white;
            }
        
            /* Open Tab animation */
            .sidebar.active {
                left:0;
            }
            
            .sidebar.active a {
                animation: slideIn 0.5s forwards;
            }

            @keyframes slideIn {
                from {
                    opacity: 0;
                    transform: translateX(-77%);
                }
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }
            .sidebar.active a:nth-child(1) {animation-delay: 0.2s;}
            .sidebar.active a:nth-child(2) {animation-delay: 0.4s;}
            .sidebar.active a:nth-child(3) {animation-delay: 0.6s;}
            .sidebar.active a:nth-child(4) {animation-delay: 0.8s;}
            .sidebar.active a:nth-child(5) {animation-delay: 1s;}
            .sidebar.active a:nth-child(6) {animation-delay: 1.2s;}

            /* Close Tab animation */
            .sidebar.closing {
                left:-77%;
                transition-delay: 1.4s;
            }

            .sidebar.closing a {
                animation: slideOut 0.5s backwards;
            }
            
            @keyframes slideOut {
                from {
                    opacity: 1;
                    transform: translateX(0);
                }
                to {
                    opacity: 0;
                    transform: translateX(-77%);
                }
            }

            .sidebar.closing a:nth-child(1) {animation-delay: 1.2s;}
            .sidebar.closing a:nth-child(2) {animation-delay: 1s;}
            .sidebar.closing a:nth-child(3) {animation-delay: 0.8s;}
            .sidebar.closing a:nth-child(4) {animation-delay: 0.6s;}
            .sidebar.closing a:nth-child(5) {animation-delay: 0.4s;}
            .sidebar.closing a:nth-child(6) {animation-delay: 0.2s;}

            /* Footer Styling */
            .footer {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                width: 100%;
                height: 15%;
                background-color: #af4428;
                border-top: 4px solid black;
                font-size: x-small;
                text-align: center;
                font-family: 'Fjalla One', sans-serif;
                position: relative;
                bottom: 0;
            }
            .icon-img {
                width: 25px;
                height: 25px;
            }

            /* Repositioning Pages */
            #home, #about, #services, #contact, #projects, #resume {
                scroll-margin-top: 129px;
            }
         </style>

        <!-- CSS for Each Page -->
        <link id="css-home" rel='stylesheet' href="app/styles/home.css" disabled>
        <link id="css-about" rel='stylesheet' href="app/styles/about.css" disabled>
        <link id="css-services" rel='stylesheet' href="app/styles/services.css" disabled>
        <link id="css-contact" rel='stylesheet' href="app/styles/contact.css" disabled>
        <link id="css-projects" rel='stylesheet' href="app/styles/projects.css" disabled>
        <link id="css-resume" rel='stylesheet' href="app/styles/resume.css" disabled>
        
    </head>
    <body>
        <!-- Header -->
        <header class="header">
            <!-- Hamburger Menu -->
            <button class="hamburger-menu" style="margin-left:8%;">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
            
            <!-- Logo -->
            <div class="logo-container">
                <img src="app/media/logo.png" alt="Logo" class="logo-img">
            </div>
        </header>

        <!-- Sidebar -->
        <aside id="sidebar" class="sidebar">
           <a class="sidebar-btn" href="#home" onclick="showPage('home')">Home</a>
           <a class="sidebar-btn" href="#about" onclick="showPage('about')">About</a>
           <a class="sidebar-btn" href="#service" onclick="showPage('services')">Services</a>
           <a class="sidebar-btn" href="#contact" onclick="showPage('contact')">Contact</a>
           <a class="sidebar-btn" href="#projects" onclick="showPage('projects')">Projects</a>
           <a class="sidebar-btn" href="#resume" onclick="showPage('resume')">Resume</a>
        </aside>
        
        <!-- Main Content Area -->
        <!-- Homepage -->
        <div id="home"><?php if (file_exists("app/templates/home.html")){include("app/templates/home.html");} ?></div>
        <!-- About us Page -->
        <div id="about"><?php if (file_exists("app/templates/about.html")){include("app/templates/about.html");} ?> </div>
        <!-- Services Page -->
        <div id="services"><?php if (file_exists("app/templates/services.html")){include("app/templates/services.html");} ?> </div>
        <!-- Contact Page -->
        <div id="contact"><?php if (file_exists("app/templates/contact.html")){include("app/templates/contact.html");} ?> </div>
        <!-- Projects Page -->
        <div id="projects"><?php if (file_exists("app/templates/projects.html")){include("app/templates/projects.html");} ?> </div>
        <!-- Resume Page -->
        <div id="resume"><?php if (file_exists("app/templates/resume.html")){include("app/templates/resume.html");} ?> </div>


        <!-- Footer -->
         <footer class="footer">
            <!-- Social Media Icons -->
            <div>
                <!-- Github -->
                <a href="https://github.com/Newbern" alt="Github link"><img class="icon-img" src="https://img.icons8.com/fluency/48/github.png" alt="Github Icon"></a>
                <!-- LinkedIn -->
                <a href="https://www.linkedin.com/in/steven-newbern/" alt="LinkedIn link"><img class="icon-img" src="https://img.icons8.com/fluency/48/linkedin.png" alt="LinkedIn Icon"></a>
                <!-- Facebook -->
                <a href="https://www.facebook.com/SCNewbern/" alt="Facebook link"><img class="icon-img" src="https://img.icons8.com/fluency/48/facebook-new.png" alt="Facebook Icon"></a>
                <!-- Instagram -->
                <a href="https://www.instagram.com/steven_newbern/" alt="Instagram link"><img class="icon-img" src="https://img.icons8.com/fluency/48/instagram-new.png" alt="Instagram Icon"></a>
                <!-- Discord -->
                <a href="https://discord.com/channels/@steven_newbern" alt="Discord link"><img class="icon-img" src="https://img.icons8.com/color/48/discord-logo.png" alt="Discord Icon"></a>
            </div>
            <p>© 2025 Steven Newbern. All rights reserved Website by <a href="https://StevenNewbern.com/">Steven Newbern</a>. Icons by <a href="https://icons8.com/">Icons8</a></p>
         </footer>
    </body>
        
    <!-- Base JavaScript -->
    <script>
        // JavaScript for Hamburger Menu Toggle
        const hamburgerMenu = document.querySelector('.hamburger-menu');
        const sidebar = document.querySelector('.sidebar');
        
        // Checking if Hamburger Menu is clicked
        hamburgerMenu.addEventListener('click', () => {
            // Activating closing Animation
            if (sidebar.classList.contains('active')) {
                sidebar.classList.remove('active');
                sidebar.classList.add('closing');
                // Timmer till Removal of Closing Animation
                setTimeout(() => {
                    sidebar.classList.remove('closing');
                }, 1400);
                }
            else {
                sidebar.classList.add('active');
            }
        });

    </script>

    <!-- Page-specific JavaScript -->
     <script>
        // Showing Selected Page
        function showPage(pageId) {
            const page = document.getElementById(pageId);
            const allPages = ['home', 'about', 'services', 'contact', 'projects', 'resume'];
            allPages.forEach(id => {
                if (id !== pageId) {
                    document.getElementById(id).style.display = 'none';
                    // Disabling the CSS for the unselected pages
                    document.getElementById('css-' + id).disabled = true;
                }
                else {
                    document.getElementById(id).style.display = 'flex';
                    // Enabling the CSS for the selected page
                    document.getElementById('css-' + id).disabled = false;
                }
                sidebar.classList.remove('active');
                
            });
        }

        // Checking Hash to Show Page
        if (!window.location.hash) {
            showPage('home');
        }
        else {
            // Removeing the '#' from the hash
            showPage(window.location.hash.substring(1));
        }
        
     </script>

    <!-- Home Page JavaScript -->
    <script src="app/controllers/home.js"></script>
    <!-- About Us Page JavaScript -->
    <script src="app/controllers/about-us.js"></script>
</html>