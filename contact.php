<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Personal CSS -->
    <link rel="stylesheet" href="main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Theodore Bonham Portfolio</title>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">Ted Bonham</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.html">Contact<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html#portfolio">Education & Experience</a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="contact-page" class="container">
        <h2>Contact Me</h2>
        <div id="contact-form" class="section">
            <p style="padding: 5px; padding-bottom: 0px;">Fill out the form below and I will contact you as soon as I can.</p>
            <article class="contactPage">
                <form id="contact-form" method="post" action="contact_form.php">
                    <!--contact_form.php replaces this.-->
                    <div class="grid-container" style="margin-bottom: 2px;">
                        <!--Column 1-->
                        <div class="grid-child">
                            <fieldset>
                                <legend>Personal Info</legend>
                                <label for="name">Name:*</label><br>
                                <input type="text" id="name" name="name" value="John Smith"><br>
                                <label for="email">E-mail:*</label><br>
                                <input type="email" id="email" name="email" required><br>
                                <label for="phone">Phone Number:</label>
                                <input type="phone" id="phone" name="phone"><br>
                                <small>Fields with * are required</small>
                            </fieldset>
                        </div>
                        <!--Column 2-->
                        <div class="grid-child">
                            <fieldset>
                                <legend>Request Info</legend>
                                <label for="reason">Choose a reason:*</label>
                                <select id="reason" name="reason">
                                    <option value="job">Job</option>
                                    <option value="network">Network</option>
                                    <option value="contract">Contract</option>
                                    <option value="question">Question</option>
                                </select>
                                <br><br>
                                <textarea class="textarea" placeholder="Let me know some specifics of what you're requesting." name="message" rows="6" cols="50"></textarea>
                            </fieldset>
                        </div>
                    </div>
                    <input type="submit" value="Send" onclick="sendMessageTime()">
                </form>
            </article>
        </div>
    </div>
    <!-- Javascript for Name Gathering -->
    <script>
        function sendMessageMorning() {
            alert("Good Morning! Thank you for your message. I will reach out to you as soon as possible.")
        }

        function sendMessageAfternoon() {
            alert("Good Afternoon! Thank you for your message. I will reach out to you as soon as possible.")
        }

        function sendMessageNighttime() {
            alert("Good Night! Thank you for your message. I will reach out to you as soon as possible.")
        }

        const hours = new Date().getHours();
        const isDayTime = hours < 12;
        const isAfternoon = hours > 12 && hours < 18;
        const isNightTime = hours > 18;

        function sendMessageTime() {
            if (isDayTime == true) {
                sendMessageMorning();
            } else if (isAfternoon == true) {
                sendMessageAfternoon();
            } else if (isNightTime == true) {
                sendMessageNighttime();
            }
        }
    </script>
</body>

</html>