<?php
$whitelist = array(
    '127.0.0.1',
    '::1'
);
if(isset ($_POST['submit'])){
	$to='gdesouza0688@gmail.com';
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	//$sendthis="NAME: ".$name."<br/>EMAIL: ".$email."<br/>MESSAGE: ".$message;
	$sendthis="
    <!DOCTYPE html>
		<html>
			<head>
			<style>
				table{
					width: 100%;
					padding: 10px;
					box-shadow: 1px 2px 10px gray;
				}
				table thead{
					padding: 10px;
					background: #ECF0F1;
					border: 1px;
					font-weight: bold;
				}
				table tr{
					padding: 10px;
					background: #ECF0F1;
					border: 1px;
				}
				table td{
					text-align: center;
					padding: 10px;
					border: 1px solid #D6DBDF;
					color: black;
				}
			</style>
			</head>
			<body>
				<div>
					<div style='text-align: center;'>
						<h1 style='margin:0; padding:0; margin-bottom: 50px;'>
						New Messages</h1>
					</div>
					<table>
						<thead>
							<td>Name</td>
							<td>Email</td>
							<td>Message</td>
						</thead>
						<tr>
							<td>$name</td>
							<td>$email</td>
							<td>$message</td>
						</tr>
					</table>
				</div>
			</body>
		</html>
			";
			
	$subject="Got an email";
	$sent=0;
if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
	 $headers='X-Mailer: PHP/' . phpversion()."MIME-Version: 1.0\r\n"."Content-Type: text/html; charset=ISO-8859-1\r\n";
	
	if(mail($to,$subject,$sendthis,$headers)){
		$sent=1;
	}
}else{
	date_default_timezone_set('Etc/UTC');
	require 'phpmailer/PHPMailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->SMTPDebug = 0;
	$mail->Debugoutput = 'html';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = "gdesouza0688@gmail.com";
	$mail->Password = "@Zarius@@420";
	//$mail->setFrom('', 'Ricardo');
	$mail->addAddress($to,$name);
	$mail->Subject = $subject;
	$mail->msgHTML('<!DOCTYPE html><html><body>' .$sendthis. '</body></html>');
	$mail->AltBody = $subject;
	
		if (!$mail->send()) {
			echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
			$sent=1;
		}
	}
	
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Animate On Scroll Library reference: https://michalsnik.github.io/aos/ -->
    <link rel="stylesheet" href="css/aos.css">

    <!-- Google fonts CSS : https://fonts.google.com/ -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">


    <!-- Bootstrap Icons: https://icons.getbootstrap.com/ -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


    <!-- Bootstrap Css reference: https://getbootstrap.com/docs/5.0/getting-started/introduction/ -->


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Lightbox Gallery: https://lokeshdhakar.com/projects/lightbox2/ -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/main.css">

    <!-- Fotnt Awesome -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

    <!-- OWL CARROULEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css">





</head>

<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <div class="loader_bg">

        <div class="loader">
            <img class="im" src="/images/loader/logo.PNG">
        </div>
    </div>

    <!-- NAV BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <a class="navbar-brand" href="index.html">Ricardo Janovits</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link smoothScroll">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a href="#class" class="nav-link smoothScroll">Classes and Price</a>
                    </li>

                    <li class="nav-item">
                        <a href="#results" class="nav-link smoothScroll">Results</a>
                    </li>

                    <li class="nav-item">
                        <a href="#footer" class="nav-link smoothScroll">Contact</a>
                    </li>
                </ul>

                <ul class="social-icon ms-auto">
                    <li><a href="#" class="bi bi-facebook"></a></li>
                    <li><a href="#" class="bi bi-whatsapp"></a></li>
                    <li><a href="#" class="bi bi-instagram"></a></li>

                </ul>
            </div>

        </div>
    </nav>


    <!-- HERO PAGE -->
    <section id="home" class="hero d-flex flex-column justify-content-center align-items-center">

        <div class="background-effect"></div>

        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-10 mx-auto col-12">
                    <div class="hero-text mt-5 text-center">


                        <h6 data-aos="fade-up" data-aos-delay="300"></h6>
						<?php if($sent){?>
                        <h1 class="text-white" data-aos="fade-up" data-aos-delay="300">Message Sent<br>
                            We will get back to you soon
						</h1>
						<?php }else{?>
						<h1 class="text-white" data-aos="fade-up" data-aos-delay="300">Message Not Sent<br>
                            Please Try again
						</h1>
						<?php } ?>
						

                        <a href="index.php" class="btn btn-custom bordered mt-3" data-aos="fade-up"
                            data-aos-delay="300">Home</a>




                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- copyright Section Begins -->
    <section id="copyright" class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h6> Created by 20052 - Gustavo Henrique || Check my <a
                            href="https://www.linkedin.com/in/gustavo-de-souza-8b7896169/" target="_blank">Linkedin</a>
                    </h6>
                </div>
            </div>
        </div>
    </section>
    <!-- copyright Section Ends -->


    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
    </script>

    <script src="js/aos.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/main.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js">
    </script>




    <!-- PRE LOADER SCRIPT  -->
    <script>
        setTimeout(function () {

            $('.loader_bg').fadeToggle();
        }, 500);
    </script>


</body>

</html>