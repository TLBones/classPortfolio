<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Personal CSS -->
    <link rel="stylesheet" href="main.css">
    <title>Theodore Bonham Portfolio</title>
</head>

<body onload="nameCollect()">

    <!-- Navbar -->
    <!--Nav input-->
    <nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="#home">Ted Bonham
                </a>
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="#main">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="#portfolio">Education & Experience</a></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>

    <section class="home">
    </section>
    <div style="height: 1000px">
        <!--End Navbar-->

    <!-- Cover Letter -->
    <div id="main" class="container">
        <h1>
            Theodore Bonham - Junior Web Developer
        </h1>
        <div id="about" class="section">
            <div class="about-heading">
                <div class="profile-pic">
                    <img src="media/ted-pic.jpeg" style="position:inherit; right: 300px;">
                </div>
                <div class="about-heading-text">
                    <h1>
                        Cover Statement
                    </h1>
                </div>
                <div class="clearfix"></div>
                <p>
                    I am Theodore Bonham, a young and adaptable worker looking to forward my career and experiences. I have been self-teaching myself to code in HTML5, CSS, javascript, and Python on and off for 4 years now, and have quite a wide variety of experiences and
                    skills to bring with it. A drive to succeed is one of the highest priorities that I hold. I am looking for a team that I can stay with for a long time, helping both myself and the team grow and prosper.
                </p>
                <p>For more information, download my resume <a target="_blank " href="media/Theodore-Bonham-Resume.pdf ">here.</a></p>
            </div>
        </div>
        <div id="details" class="section">
            <h2>
                About Me
            </h2>
            <p>
                Ever since I was a kid, I've been around computers. When I was 2 my father got me my first computer, and I loved it. Ever since I've been working with and on computers. I took a class back in high school, basic computer science, and with that I learned
                about the basics of javascript. I loved the class, and all of the projects we developed in it, I became enthralled with the idea- but slowly fell out of practice with school demanding other things of me at the time. Over the past year
                I have been working five times harder to attempt to catch back up. Python has become a very powerful drive, and I have been driving my education with it on my own. I also reached out to SLCC and took the Web Development and Design course
                for my certificate of proficiency. With that said, I am excited to further my learning and experience and look forward to hearing from you! This site was fully built by me, and will be undergoing further experiments and designs as I progress.
                </br> Thank you for your time, have a nice day.
            </p>
        </div>
        <div id="education" class="section">
            <h3>
                Education
            </h3>
            <p>
                <ul>
                    <li>
                        A certificate of proficiency in Web Development and Design as Salt Lake Community College.
                    </li>
                    <li>
                        Graduated from Meadowdale High School, 3.2 GPA.

                    </li>
                </ul>
            </p>
            <h3>Proficient Languages</h3>
            <p id="list"></p>
        </div>
        <div id="references " class="section ">
            <h2>
                References
            </h2>
            <p>
                Brad Bonham
                <ul>
                    <li> Relationship: Father and Mentor </li>
                    <li>Phone:**********</li>
                    <li>Email: ********@gmail.com</li>
                </ul>
            </p>
            <p>
                Suzanne Bonham
                <ul>
                    <li> Relationship: Mother and Guide </li>
                    <li>Phone:**********</li>
                    <li>Email: ********@gmail.com</li>
                </ul>
            </p>
        </div>
        <!-- End Cover Letter-->
        <!-- Portfolio Details -->
        <div id="experience" class="section">
            <h3>
                Experience
            </h3>
            <h4>
                Portfolio
            </h4>
            <p>
                This portfolio site was designed, built, and completely created by me. Every small factor, built over the course of my education with Salt Lake Community College. <br> To see more of my updated projects, visit my GitHub page:
                <a target="_blank" href="https://github.com/TLBones/">https://github.com/TLBones/</a>
            </p>
            <h4>Teds Tree</h4>
            <p>
                Teds Tree was a first. A project that would push my personal limits beyond what I had previously done. I learned primarily from watching YouTube Videos and copying the code, and then pushing the code past that boundary to ensure I understood the logic
                behind it. If you would like to see the product-to-date click <a target="_blank" href="https://www.teds-tree.com">here.</a> This project is still growing, and is in use to assist my fellow classmates and peers in their
                learning and socializing. Built on Django, this project certainly forwarded my knowledge of both Python, and HTML.
            </p>
            </article>
        </div>
    </div>
    <!-- End Portfolio Details-->
    <!-- Javascript for language easy update -->
    <script>
        let languages, iLength, i, text;
        languages = ["JavaScript", "HTML", "CSS", "PHP", "MySQL", "Python", "Django"];
        iLength = languages.length;
        text = "<ul>";
        for (i = 0; i < iLength; i++) {
            text += "<li>" + languages[i] + "</li>";
        }

        text += "</ul>";
        document.getElementById("list").innerHTML = text;
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</body>

</html>