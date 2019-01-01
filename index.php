<html>
<head>
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="assests/jquery/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container bg-light">
    <div class="row mt-3">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-sm bg-info navbar-dark">
                    <div class="container">
                        <a href="index.php" class="btn"><h2 class="text-light mr-3">Dream School</h2></a>
                        <button type="button" class="navbar-toggler" data-target="#menu" data-toggle="collapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="menu">
                            <ul class="navbar-nav mr-auto">
                                <li><a href="#about" class="nav-link">About</a></li>
                                <li><a href="#contact" class="nav-link" >Cotact Us</a></li>
                            </ul>
                            <ul class="navbar-nav">
                                <li><a href="" class="nav-link"  data-toggle="modal" data-target="#modal5">Login</a></li>
                            </ul>
                        </div>

                        <div class="modal fade" id="modal5">
                            <div class="modal-dialog">
                                <div class="col-md-6 modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&Cross;
                                        </button>
                                    </div>
                                    <center>
                                    <div class="modal-body">
                                        <a href="admin/index.php" class="btn btn-info btn-lg btn-block mt-3" >Admin</a>
                                        <a href="teacher/index.php" class="btn btn-info btn-block btn-lg mt-3" >Teacher</a>
                                        <a href="student/index.php" class="btn btn-info btn-block btn-lg mt-3">Student</a>
                                        <a href="librarien/index.php" class="btn btn-info btn-block btn-lg mt-3">Librarien</a>
                                    </div>
                                    </center>
                                    <div class="modal-footer"> <button type="button" class="btn btn-warning" data-dismiss="modal">Close
                                    </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
    </div>
    <div class="row">
        <div class="col-md-8 ">
            <img src="image/p2.jpg" class="img-fluid img-thumbnail w-100" style="height: 350px;"/>
           <div class="bg-dark">
            <h3 class="text-info p-3" id="about">About Me</h3>
            <p class="text-primary p-3">Some Contant here.Some Contant here.Some Contant here.Some Contant here.Some Contant here.
                Some Contant here.Some Contant here.Some Contant here.Some Contant here.Some Contant here.Some Contant here.Some Contant here.Some Contant here.Some Contant here.Some Contant here.
                Some Contant here.Some Contant here.Some Contant here.Some Contant here.Some Contant here.Some Contant here.Some Contant here.Some Contant here.Some Contant here.Some Contant here.
                Some Contant here.Some Contant here.Some Contant here.Some Contant here.Some Contant here.Some Contant here.Some Contant here.Some Contant here.Some Contant here.Some Contant here.
                Some Contant here.Some Contant here.Some Contant here.Some Contant here.Some Contant here.Some Contant here.Some Contant here.Some Contant here.Some Contant here</p>
        </div>
        </div>
        <div class="col-md-4">
            <div class="card mt-2">
                <div class="card-header"><h3 class="text-primary">আমাদের লক্ষ্য:</h3></div>
                <div class="card-body"><p class="text-info">Some Contant here.Some Contant here.Some Contant here.Some Contant here.Some Contant here.
                    Some Contant here.Some Contant here.Some Contant here.Some Contant here.Some Contant here.Some Contant here.Some Contant here</p></div>
               <div class="card-footer"><button type="button" class="btn bg-primary" data-toggle="modal" data-target="#modal1" style="float:right; margin:3px;">Read More</button> </div>
            </div>
            <div class="modal fade" id="modal1">
                <div class="modal-dialog">
                    <div class="modal-content bg-info">
                        <div class="modal-header">
                            <h3></h3>
                            <button type="button" class="close" data-dismiss="modal">&Cross;
                            </button>
                        </div>
                        <div class="modal-body">
                            <h4>আমাদের লক্ষ্য:</h4>
                            <p>Some content here...Some content here...
                                Some content here...Some content here...
                                Some content here...Some content here...
                                Some content here...Some content here...
                                Some content here...Some content here...
                                Some content here...Some content here...
                                Some content here...Some content here...
                                Some content here...Some content here...
                                Some content here...Some content here...
                                Some content here...Some content here...
                                Some content here...Some content here...
                                Some content here...Some content here...
                                Some content here...Some content here...
                                Some content here...Some content here...
                                Some content here...Some content here...
                                Some content here...Some content here...</p>

                        </div>
                        <div class="modal-footer"> <h6>This is footer</h6></div>
                    </div>
                </div>
            </div>

            <div class="card mt-1">
                <div class="card-header"><h3 class="text-primary">আমাদের বৈশিষ্ট্য:</h3></div>
                <div class="card-body"><p class="text-info">Some Contant here.Some Contant here.Some Contant here.Some Contant here.Some Contant here.
                    Some Contant here.Some Contant here.Some Contant here.Some Contant here.Some Contant here.Some Contant here.</p></div>
                <div class="card-footer"><button type="button" class="btn bg-primary" data-toggle="modal" data-target="#modal2" style="float:right; margin:3px;">Read More</button> </div>
            </div>
            <div class="modal fade" id="modal2">
                <div class="modal-dialog">
                    <div class="modal-content bg-success">
                        <div class="modal-header">
                            <h3></h3>
                            <button type="button" class="close" data-dismiss="modal">&Cross;
                            </button>
                        </div>
                        <div class="modal-body">
                            <h4>আমাদের বৈশিষ্ট্য:</h4>
                            <p>Some content here...Some content here...
                                Some content here...Some content here...
                                Some content here...Some content here...
                                Some content here...Some content here...
                                Some content here...Some content here...
                                Some content here...Some content here...
                                Some content here...Some content here...
                                Some content here...Some content here...
                                Some content here...Some content here...
                                Some content here...Some content here...
                                Some content here...Some content here...
                                Some content here...Some content here...
                                Some content here...Some content here...
                                Some content here...Some content here...
                                Some content here...Some content here...
                                Some content here...Some content here...</p>

                        </div>
                        <div class="modal-footer"> <h6>This is footer</h6></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr/>
    <div id="contact">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center m-3 p-2"><b>Contact Us</b></h3>
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-6">
            <h4 class="text-center mb-5">Contact Information</h4>
         <table class="table w-75 p-5">
             <tr>
                 <td  class="w-50">
                     <span><img src="image/home.png" height="28px" width="30px" /></span>
                     <b>Address:</b></td>
                 <td >
                     <b>Your Company Name.</b><br/>
                     Address line one.<br/>
                     Address line tow.
                 </td>
             </tr>
             <tr>
                 <td>
                     <span><img src="image/massage.png" height="28px" width="30px" /></span>
                     <b>Email:</b></td>
                 <td >
                     www.toaha@gmail.com<br/>
                     www.raju@gmail.com<br/>
                     www.bappy@gmail.com
                 </td>
             </tr>
             <tr>
                 <td>
                     <span><img src="image/call.png" height="28px" width="30px" /></span>
                     <b>Phone No:</b></td>
                 <td >
                     +8801823456789<br/>
                     +8801723456789
                 </td>
             </tr>
             <tr>
                 <td>
                     <span><img src="image/web.png" height="28px" width="30px" /></span>
                     <b>Web:</b></td>
                 <td >
                    www.bits.org.com<br/>
                     www.personal.org.com
                 </td>
             </tr>

         </table>
        </div>
        <div class="col-md-6">
            <h4 class="text-center mb-5">Contact Form</h4>
                <form>
                    <label>Your Name:</label>
                    <input type="text" class="form-control"/>
                    <label>Your Email:</label>
                    <input type="text" class="form-control"/>
                    <label>Subject:</label>
                    <input type="text" class="form-control"/>
                    <label>Your Massage:</label>
                    <textarea class="form-control">
                    </textarea>
                    <input type="submit" class="btn btn-block btn-primary mt-3" value="Submit"/>

                </form>
        </div>
    </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-12 bg-dark"><p class="text-light ml-5">@ CopyRight All received 'Dream School'</p></div>
    </div>
</div>
<script src="js/bootstrap.js"></script>
<script src="assests/jquery/jquery.min.js"></script>
</body>
</html>