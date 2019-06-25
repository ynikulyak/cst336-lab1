<!DOCTYPE html>
<html>
<!--

First Website
and comment
in html
(comments can span multiple lines)

-->

<!-- This is the head -->
<!-- All styles and javascript go inside the head -->
    <head>
        <meta charset="utf-8">
        <title>Jane Nikulyak: Personal Website</title>
        
        <link href="css/styles.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

    </head>
<!-- closing head -->

    <!-- This is the body -->
    <!-- This is where we place the content of our website -->
    <body>
        <header>
            <h1>Jane Nikulyak</h1>
        </header>
        <hr>
        <nav>
            <a href="index.php">Home</a>
            <a class="current" href="about.php">About</a>
            <a href="contact.php">Contact</a>
        </nav>
        <br><br>

        <div id="content">
            <table>
                <tr id="table-header">
                    <td><strong>Programming Language</strong></td>
                    <td><strong>Years of Experience</strong></td>
                </tr>
                <tr class="table-row">
                    <td>Java</td>
                    <td>4</td>
                </tr>
                <tr class="table-row">
                    <td>Python</td>
                    <td>1</td>
                </tr>
                <tr class="table-row">
                    <td>Ruby on Rails</td>
                    <td>1</td>
                </tr>
            </table>
        </div><br><br>

            <ul>
                <li><span class="hobby">Programming:</span> I code even during weekeds and vacations.</li>
                <li><span class="hobby">Sport:</span> Physical activities make me feel refreshed.</li>
                <li><span class="hobby">Meditation:</span> I like this calm state of mind.</li>
            </ul>
        
        
        <!-- This is the footer -->
        <!-- The footer goes inside the body but not always -->
        <footer>
            <hr>
            <div>
            <figure>
            <img src="img/logo.jpeg" alt="CSUMB Logo">
        </figure>
            <div>
            CST 336: Internet Programming. 2019&copy; Nikulyak<br />
            <strong>Disclaimer:</strong> The information in this webpage is fictitious. <br />
            It is used for academic purposes only.
        </div>
          </div>
        </footer>
        <!-- closing footer -->
        
    </body>
    <!-- closing body -->

</html>
