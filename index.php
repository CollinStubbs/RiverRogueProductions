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
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100|Source+Sans+Pro:400,200,300' rel='stylesheet' type='text/css'>   
    
    <script src="js/jquery-1.11.3.js"></script>
    <script src="js/fxn.js"></script>
</head>

<body class="main">
    <div id="nav_bar">
        <table id="nav_table">
            <tr>
                <td>
                    <p id="nav_title">RIVER ROGUE PRODUCTIONS</p>
                </td>
            </tr>
            <tr>
                <td>
                    <div id="nav_block">
                        <p>MEDIA</p>
                        <p>ABOUT</p>
                        <p id="contact_btn">CONTACT</p>
                    </div>
                </td>    
            </tr>
        </table>
    </div>
    <div style="text-align: center">
        <div id="container">
            <div id="home">
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
                                <p id="film_title">WHAT'S NEW?</p>
                                <p id="film_title_1" hidden="hidden">Rift</p>
                                <p id="film_title_2" hidden="hidden">Oppenheimer</p>
                                <p id="film_title_3" hidden="hidden">Rift 2: Electric Boogaloo</p>
                                <p id="film_desc">Hover over and learn more about each of River Rogue Productions latest films!</p>
                                <p id="film_desc_1" hidden="hidden">A family man struggling to cope with his hidden urges has his devotion challenged by the unexpected arrival of his secret lover.</p>
                                <p id="film_desc_2" hidden="hidden">Based on a dark moment in the life of Dr. J. Robert Oppenheimer, father of the atomic bomb, 'Oppenheimer' explores nostalgia, optimism, and betrayal under the threat of impending failure.</p>
                                <p id="film_desc_3" hidden="hidden">In this eye-popping and exuberant sequal, "family man" holds a breakdance competition between his wife and his lover to decide which life he will lead.  </p>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="contact"  hidden="hidden">
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
                    <h3>Send us a message and we'll get back to you as soon as we can!</h3>
                </div>
                <div id="contact_form">
                    <form method="post" action="index.php">
                        <table style="text-align: center; width: 100%;">
                            <tr>
                                <td>
                                    <input id="email_name" name="name" placeholder="NAME">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input id="email_email" name="email" type="email" placeholder="EMAIL">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <textarea id="email_message" name="message" placeholder="MESSAGE"></textarea>
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
