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

</style>
<div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo">
                                <a href="index.html">
                                    <h1 style="font-size:40px;">Vidhi Chamber</h1>
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
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="home.php" class="nav-item nav-link active">Home</a>
                                <a href="about.php" class="nav-item nav-link">About</a>
                                <a href="service.php" class="nav-item nav-link">Practice Areas</a>
                                <a href="team.php" class="nav-item nav-link">Our Team</a>
                                <a href="portfolio.php" class="nav-item nav-link">Updates</a>
                                <a href="contact.php" class="nav-item nav-link">Contact US</a>
                            </div>
                            <div class="ml-auto">
                                <a class="btn" href="https://htmlcodex.com/law-firm-website-template" data-toggle="modal" data-target="#myModalNorm">Get Appointment</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->

<div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
             <!-- Modal Body -->
            <div class="modal-body">
                
                <form role="form">
                  <div class="form-group">
                    <label for="exampleInputEmail1" style="font-weight:bold;color:black">Email address</label>
                      <input type="email" class="form-control"
                      id="exampleInputEmail1" placeholder="Enter email"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1" style="font-weight:bold;color:black">Name</label>
                      <input type="password" class="form-control"
                          id="exampleInputPassword1" placeholder="Enter name"/>
                  </div>

                 <label id="label_p" for="profession" style="font-weight:bold;color:black">Select slot </label><br>
                    <select id="profession" name="profession">
                    <option value="Student">Mon: 11:00 am - 5:30 am</option>
                    <option value="Govt Employee">Tue: 11:00 am - 8:00 pm</option>
                    <option value="Pvt Employee">Wed: 11:00 am - 8:00 pm</option>
                    <option value="Businessman">Thurs: 11:00 am - 8:00 pm</option>
                    <option value="Professional">Fri: 11:00 am - 8:00 pm</option>
                    <option value="Retired">Sat: 11:00 am - 8:00 pm</option>
                    <option value="Housewife">Sun: 5:30 am - 8:00 pm</option>
                    </select>
                 
                 
                 <br> <br><button type="button" class="btn" style="background:black; colo:white">
                    Submit
                </button>      
                </form>        
            </div>   
        </div>
    </div>
</div>

