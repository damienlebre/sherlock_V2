<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="support.css">
    <title>Sherlock Holmes : Chapter One - Support</title>
     <!-- ajout bootstrap css-->
     <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
     <!-- feuille css -->
     <link rel="stylesheet" href="support.css">
     <!-- police googlefont -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
 <!-- favicon -->
 <link rel="icon" type="image/png" href="assets/logos/Frogwares_logo_flat_white.png" />
 <!-- FontAwesome -->
 <script src="https://kit.fontawesome.com/c6081b8ccf.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <?php
            include 'nav.php';
        ?> 
    </header>
  <main> 
  <?php  
  require_once 'dbconnexion.php';
  
  
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;


    if(isset($_POST['submit']) &&(!empty($_POST['name'])) &&(!empty($_POST['email']))&&(!empty($_POST['message']))){       
        $name = htmlspecialchars($_POST['name']);
        $emailFrom = htmlspecialchars($_POST['email']);
        $subject = "SherlockHolmes";
        $message = htmlspecialchars($_POST['message']);
        $date = date('Y-m-d H:i:s');       
    
        require_once "vendor\phpmailer\phpmailer\src\Exception.php";
        require_once "vendor\phpmailer\phpmailer\src\PHPMailer.php";
        require_once "vendor\phpmailer\phpmailer\src\SMTP.php";

        $mail = new PHPMailer(true); 

        $query = "INSERT INTO `mail_contact`(`name`, `date`) VALUES (:name, '$date') "; 
        $request = $db->prepare($query); 
        $request->bindValue(":name", $name, PDO::PARAM_STR);
        $request->execute();
        try{
           
    
           
            $mail->isSMTP(); 
            $mail->Host = "localhost";
            $mail->Port = 1025;
            $mail->Charset = "utf-8";
            $mail->addAddress('support@sherlockholmes.fr'); 
            $mail->setFrom($emailFrom);
            $mail->Subject = $subject;
            $mail->Body = $message;
            $mail->send();
            $success = "Message envoyé.";
    
    
        }catch(Exception $e){
            echo "Message non envoyé. Erreur: {$mail->ErrorInfo}";
        }
    }
    
?>
    <section class="container px-5 ">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 rounded-3 shadow-lg">
                    <div class="card-body p-4">
                        <div class="text-center">
                            <h1 class=" fw-light">Contact Us</h1>
                            <p class="mb-4 text-muted">Asking Us</p>
                        </div>
                            <!-- Start of Form Contact -->
                        <form id="contactForm" method="POST">
                            <!-- Name Input -->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" name="name" type="text" placeholder="Name" required>
                                <label for="name">Name</label>                            
                            </div>
                            <!-- Email Input -->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="emailAddress" type="email" name="email" placeholder="Email Address" required />
                                <label for="emailAddress">Email Address</label>                           
                            </div>
                            <!-- Message Input -->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" name="message" type="text" placeholder="Message" style="height: 10rem;" required></textarea>
                                <label for="message">Message</label>
                            </div>
                            <!-- Submit success message -->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    <p>To activate this form, sign up at</p>
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message -->
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Error sending message!</div>
                            </div>
                            <!-- Submit button -->
                            <div class="d-grid">
                                <button class="btn btn-dark btn-lg " id="submitButton" type="submit" name="submit">Submit</button>
                                <?php echo "<p>$success</p>";
?>
                            </div>
                        </form>
                        <!-- End of contact form -->
                    </div>
                </div>
            </div>
        </div>
    </section >
    </main> 
 
    <footer>
        <?php
            include 'footer.php';  
        ?>  
    </footer>  
     <script src="bootstrap.js"></script>
     <script src="script.js"></script>
</body>
</html>