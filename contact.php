<?php


if (isset($_POST['submit'])) {

  if (!$_POST['firstName']) {
    $error = "- Please enter your first name.";
  }

  if (!$_POST['lastName']) {
    $error = "<br>- Please enter your last name.";
  }

  if (!$_POST['email']) {
    $error .= "<br>- Please enter your email adress.";
  }

  if (!$_POST['message']) {
    $error .= "<br>- Please enter your message.";
  }


  if ($error) {
    $result = "Please correct the following: $error";
  }

  else {

    mail(
      "jonathan.ostman@optistud.fi",
      "Subject line",
      "Name: " .$_POST['firstName']." ".$_POST['lastName'].
      "\r\nEmail: " .$_POST['email'].
      "\r\nMessage: " .$_POST['message'],
      "Content-Type: text/plain; charset=utf-8\r\n"
    );


    {
      $result = "<div class='alert alert-success' role='alert'><strong>Thank you!</strong> We will be in touch shortly.</div>";
      $disabled= "disabled";
    }
  }
}

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Contact</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/portfolio.css">
</head>
<body>

  <!--Navbar-->
  <nav>
    <a href=index.html style="border-bottom: 4px solid white;">Home</a>
    <a href="about.html">About</a>
    <a href="contact.php">Contact</a>
  </nav>

  <header class="contact">
    <img class="img-fluid logo" src="img/logo.png" alt="Image not found">
  </header>

  <!--Contact Form-->
  <p class="contact-header">Contact me!</p>
  <form method="post" class="col-md-4 offset-md-4">
    <fieldset class="align-center" <?php echo $disabled;?>>
      <?php echo $result;?>
      <div class="form-group">
        <input type="text" name="firstName" class="form-control" id="exampleInputFirstName1" placeholder="First Name" value="<?php echo $_POST['firstName']; ?>" autofocus>
      </div>
      <div class="form-group">
        <input type="text" name="lastName" class="form-control" id="exampleInputLastName1" placeholder="Last Name" value="<?php echo $_POST['lastName']; ?>">
      </div>
      <div class="form-group">
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $_POST['email']; ?>">
      </div>
      <div class="form-group">
        <textarea class="form-control" placeholder="Message..." name="message" id="exampleTextarea" rows="12"><?php echo $_POST['message']; ?></textarea>
      </div>
      <input type="submit" name="submit" class="btn btn-primary button" value="Submit">
    </fieldset>
  </form>
  <div class="link">
    <a href=https://www.instagram.com/ostmanjonathan/><i class="fa fa-instagram" aria-hidden="true"></i></a>
    <a href=https://www.facebook.com/jonathan.ostman.92><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
    <a href=https://github.com/JonathanOstman><i class="fa fa-github" aria-hidden="true"></i></a>
  </div>
  <footer>&copy; 2017</footer>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>