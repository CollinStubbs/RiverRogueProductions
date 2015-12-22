<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Collin Stubbs - Dyno Development">

    <title>RIVER ROGUE PRODUCTIONS</title>
    
    <link href="style.css" rel="stylesheet" type="text/css">
    
    <script src="js/jquery-1.11.3.js"></script>
    <script src="js/fxn.js"></script>
</head>

<body class="main">
    <div id="nav_bar">
        <table id="nav_table">
            <tr>
                <td>
                    <h1 id="nav_title">RIVER ROGUE PRODUCTIONS</h1>
                </td>
            </tr>
            <tr>
                <td>
                    <div id="nav_block">
                        <h2>MEDIA</h2>
                        <h2>ABOUT</h2>
                        <h2>CONTACT</h2>
                    </div>
                </td>    
            </tr>
        </table>
    </div>
    <div style="text-align: center">
        <div id="container">
            <div id="home" hidden="hidden">
                <table>
                    <tr>
                        <td>
                            <img id="img_1" src="img/RiftTEMP.PNG" alt="RIFT">
                        </td>
                        <td>
                            <img id="img_2" src="img/OppTEMP.PNG" alt="Opp">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img id="img_3" src="img/RiftTEMP2.PNG" alt="RIFT2">
                        </td>
                        <td>
                            <div id="film_text_block">
                                <h1 id="film_title">WHAT'S NEW?</h1>
                                <h1 id="film_title_1" hidden="hidden">Rift</h1>
                                <h1 id="film_title_2" hidden="hidden">Oppenheimer</h1>
                                <h1 id="film_title_3" hidden="hidden">Rift 2: Electric Boogaloo</h1>
                                <h2 id="film_desc">Hover over and learn more about each of River Rogue Productions latest films!</h2>
                                <h2 id="film_desc_1" hidden="hidden">A family man struggling to cope with his hidden urges has his devotion challenged by the unexpected arrival of his secret lover.</h2>
                                <h2 id="film_desc_2" hidden="hidden">Based on a dark moment in the life of Dr. J. Robert Oppenheimer, father of the atomic bomb, 'Oppenheimer' explores nostalgia, optimism, and betrayal under the threat of impending failure.</h2>
                                <h2 id="film_desc_3" hidden="hidden">In this eye-popping and exuberant sequal, "family man" holds a breakdance competition between his wife and his lover to decide which life he will lead.  </h2>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="contact">
               <?php

                    error_reporting(-1);
                    ini_set('display_errors', 'On');
                    set_error_handler("var_dump");

                    $name = isset($_POST['name']) ? $_POST['name'] : '';
                    $email = isset($_POST['email']) ? $_POST['email'] : '';
                    $message = isset($_POST['message']) ? $_POST['message'] : '';
                    $headers = array("From: from@example.com",
                                    "Reply-To: replyto@example.com",
                                     "X-Mailer: PHP/" . PHP_VERSION
                                    );
                    $headers = implode("\r\n", $headers);
                    $to = 'collintstubbs@gmail.com'; 
                    $subject = 'Hello';
                    

                    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

                    if (isset($_POST['submit'])) {				 
                        if (mail ($to, $subject, $body, $headers)) { 
                        echo '<p>Your message has been sent!</p>';
                    } else { 
                        echo '<p>Something went wrong, go back and try again!</p>'; 
                    } 
                    }
                    
                ?>
                <div id="contact_title">
                    <h1>Questions? Concerns? Feedback?</h1>
                    <h2>Send me a message and we'll get back to you as soon as we can!</h2>
                </div>
                <div id="contact_form">
                    <form method="post" action="index.php">
                        <table>
                            <tr>
                                <td>
                                    <input name="name" placeholder="NAME">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input name="email" type="email" placeholder="EMAIL">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <textarea name="message" placeholder="MESSAGE"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input id="submit" name="submit" type="submit" value="Submit">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
