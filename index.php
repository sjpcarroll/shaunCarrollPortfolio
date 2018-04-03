<?php
    $isSend = false;
    $isSendEmail = false;
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $from = $name;
        $to = 'me@shauncarroll.com';
        $subject = $name . ' left a message from shauncarroll.com';
        $body = "From: $name\n \n E-Mail: $email\n \n Message:\n $message";
        // Check if name has been entered
        if (empty($_POST['name'])) {
            $errName = 'Please enter your name';
            $isSend = false;
        }
        else {
            $isSend = true;
        }

        // Check if email has been entered and is valid
        if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email';
            $isSendEmail = false;
        }
        else {
            $isSendEmail = true;
        }

        //Check if message has been entered
        if (empty($_POST['message'])) {
            $errMessage = 'Please enter a message';
            $isSend = false;
        }
        else {
            $isSend = true;
        }

        // If there are no errors, send the email
        if ($isSend && $isSendEmail) {
            $result = '<div class="alert alert-success">Thank You! I will be in touch</div>';
            mail($to, $subject, $body);
        }
        else {
            $result = '<div class="alert alert-danger">Please fill out all fields.</div>';
        }
    }
?>

<?php include_once("templates/header.php"); ?>
<header>
    <section class="hero">
        <div class="container">
            <div class="row vertical-center">
                <div class="col-md-5 col-xs-11">
                    <h1 class="heroName">SHAUN</h1>
                    <h1 class="heroName blueText">CARROLL</h1>
                </div>
                <div class="col-md-7 col-xs-11">
                    <h3 class="heroText">I'm a Brisbane based web designer who creates <strong class="blueText">clean</strong> and <strong class="blueText">modern</strong> websites for internet users.</h3>
                </div>
            </div>
        </div>
    </section>
</header>
<hr>
<section id="aboutMe">
    <div class="container">
        <div class="row">
            <header class="col-md-5">
                <h2 class="heading">01 | About Me</h2>
            </header>
            <div class="col-md-7 col-sm-12 blurb">
                <div class="row">
                    <div class="col-md-12">
                        <p>Hello I'm Shaun Carroll, I create websites that help people interact with computers by focusing on the <strong class="blueText">users first.</strong> I always strive to write elegant and efficient code, whether its HTML, CSS, PHP or JQuery.</p>
                        <p>I believe in maintaining a healthy balance between unreality and visual impact in all my work ensuring every site is <strong class="blueText">appealing</strong> and <strong class="blueText">functional.</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<section id="myWorks">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2 class="heading">02 | My Works</h2>
            </div>
            <div class="col-md-7 blurb">
                <div class="row">
                    <div class="col-md-6 myWorksImage">
                        <a href="http://primedinterviews.com.au/" title="Primed Interviews" target="_blank"><img alt="" class="img-responsive" src="images/primedInterviews_logo_color.jpg"></a>
                    </div>
                    <div class="col-md-6 myWorksImage">
                        <a href="http://www.redfrogfitness.com.au/" title="Red Frog Fitness" target="_blank"><img alt="" class="img-responsive" src="images/rff_logo.png"></a>
                    </div>
                    <div class="col-md-6 myWorksImage">
                        <a href="https://spendtolend.com/" title="Spend To Lend" target="_blank"><img alt="" class="img-responsive" src="images/spendToLendLogo.jpg"></a>
                    </div>
                    <div class="col-md-6 myWorksImage">
                        <a href="http://www.grainservices.com.au/" title="Finacial Intergration" target="_blank"><img alt="" class="img-responsive" src="images/ggtlogo.png"></a>
                    </div>
                    <div class="col-md-6 myWorksImage">
                        <a href="https://kcosmeticsboutique.com/" title="KcosmeticsBoutique" target="_blank"><img alt="" class="img-responsive" src="images/kCosLogo.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contactMe">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2 class="heading">03. Contact Me</h2>
            </div>
            <div class="col-md-7 blurb">
                <div class="col-md-12">
                    <form action="#contactMe" class="contactForm" id="contactForm" method="post" name="contactForm">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                    <div class="redText">
                                        <?php echo $errName; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="form-control" id="email" name="email" placeholder="Email" type="email">
                                </div>
                            </div>
                            <div class="redText">
                                <?php echo $errEmail; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea class="form-control" cols="30" id="message" name="message" placeholder="Message" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="redText">
                                <?php echo $errMessage; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <input class="btn btn-primary btn-outline btn-lg btn-block" id="submitBtn" name="submit" type="submit" value="Submit">
                                </div>
                                <div class="col-md-6 text-right" id="formPrompt">
                                    <small class="redText">All fields are required</small>
                                </div>
                            </div>
                        </div>
                        <div class="greenText">
                            <?php echo $result ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-5 section-heading"></div>
            <div class="col-md-7">
                <div class="col-md-12">
                    <p>Made with <i aria-hidden="true" class="fa fa-heart redText"></i> by Shaun Carroll</p>
                </div>
            </div>
        </div>
    </div>
</footer><!-- jQuery -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> <!-- Stellar -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script src="js/main.js"></script>

</html>
