<style>
.modal-body .form-horizontal .col-sm-2,
.modal-body .form-horizontal .col-sm-10 {
    width: 100%
}

.modal-body .form-horizontal .control-label {
    text-align: left;
}
.modal-body .form-horizontal .col-sm-offset-2 {
    margin-left: 15px;
}

select {
  width: 55%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.navbar-nav .nav-item .nav-link  a:hover:not(.active) {
    border-bottom: 2px solid #fff;
    transition: .1s all ease-out;
}
.form-group label{
    color:black;
    font-weight:bold;
}

</style>
<div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo">
                                <a href="index.html">
                                    <h1 style="font-size:40px;">Vidhi Chambers</h1>
                                    <!-- <img src="img/logo.jpg" alt="Logo"> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="top-bar-right">
                             
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-light">
                        <a href="#" style="color:black;" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span  class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto" id="navbar-nav">
                                <a href="home.php" id="this1" style="color:black;" class="nav-item nav-link">Home</a>
                                <a href="about.php" id="this2" style="color:black;" class="nav-item nav-link">About</a>
                                <a href="service.php" id="this3" style="color:black;" class="nav-item nav-link">Practice Areas</a>
                                <a href="team.php" id="this4" style="color:black;" class="nav-item nav-link">Our Team</a>
                                <a href="portfolio.php" style="color:black;" id="this5" class="nav-item nav-link">Updates</a>
                                <a href="contact.php" style="color:black;" id="this6" class="nav-item nav-link">Contact US</a>
                            </div>
                            <div class="ml-auto">
                                <a class="btn" href="appointment.php?status=empty">Get Appointment</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->



<script>
    var upperData = window.location.href;
var first = document.getElementById('this1');
var second = document.getElementById('this2');
var third = document.getElementById('this3');
var fourth = document.getElementById('this4');
var fifth= document.getElementById('this5');
var sixth= document.getElementById('this6');
if (upperData.includes("home")) {
    first.className += " active";
    second.className.replace(" active", "");
    third.className.replace(" active", "");
    fourth.className.replace(" active", "");
    fifth.className.replace(" active", "");
    sixth.className.replace(" active", "");
} else {
    if (upperData.includes("about")) {
        document.getElementById('this2').className += " active";
        first.className.replace(" active", "");
        third.className.replace(" active", "");
        fourth.className.replace(" active", "");
        fifth.className.replace(" active", "");
        sixth.className.replace(" active", "");
    } else {
        if (upperData.includes("service")) {
            third.className += " active";
            first.className.replace(" active", "");
            second.className.replace(" active", "");
            fourth.className.replace(" active", "");
            fifth.className.replace(" active", "");
            sixth.className.replace(" active", "");
        } else {
            if (upperData.includes("team")) {
                fourth.className += " active";
                first.className.replace(" active", "");
                second.className.replace(" active", "");
                third.className.replace(" active", "");
                fifth.className.replace(" active", "");
                sixth.className.replace(" active", "");
            }
         else {
            if (upperData.includes("portfolio")) {
                fifth.className += " active";
                first.className.replace(" active", "");
                second.className.replace(" active", "");
                third.className.replace(" active", "");
                fourth.className.replace(" active", "");
                sixth.className.replace(" active", "");
            }
        

        else {
            if (upperData.includes("contact")) {
                sixth.className += " active";
                first.className.replace(" active", "");
                second.className.replace(" active", "");
                third.className.replace(" active", "");
                fifth.className.replace(" active", "");
                fourth.className.replace(" active", "");
            }
        }
    }
    }
        
    }
}
    var aTagContainer = document.getElementById("navbar-nav");
    var aTags = aTagContainer.getElementsByClassName("nav-item nav-link");
    for (var i = 0; i < aTags.length; i++) {
        aTags[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }

    
    
</script>