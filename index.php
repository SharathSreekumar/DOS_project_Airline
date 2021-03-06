<!DOCTYPE html>
<html>
<head>
	<title>Jet Airlines</title>
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="dist/css/style.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top coll" id="navDraw">
		<div class="container-fluid">
			<div class="navbar-header">
				<div class="navbar-brand">
					<h4 style="margin-top:-5px"><label style="font-family:'Monotype Corsiva';font-size:30px">Jet Airlines</label></h4>
				</div>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    	      		<ul class="nav navbar-nav navbar-right">
        	    		<li><a href="#info" onclick="showTravelInfo()" value="1" id="travelInfoNav">Travel Info</a></li>
            			<li><a href="#content">Contact Us</a></li>
          			</ul>
        			<ul class="nav navbar-nav navbar-right">
		            	<li><a href="/expt8/">Home</a></li>
    		        	<li class="dropdown"><a href="#My_Trip" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Trip</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-header">Get to know about your trip</li>
                                <li style="margin-top:5px"><a href="#">Manage Booking</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">PNR Status</a></li>
                                <li role="separator" class="divider"></li>
                                <li style="margin-bottom:5px"><a href="#">Flight Status</a></li>
                            </ul>
                        </li>
    		        	<li><a href="#login" onclick="showLogin()" value="1" id="loginNav">Login</a></li>
        			</ul>
        	</div>
		</div>
	</nav>
    <div class="container" style="display:none;" id="alertTravelInfo">
        <div class="alert alert-warning fade in" role="alert" style="position:fixed;top:8.5%;margin-left:-1.5%;z-index:10;border-color:transparent;">
            <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
            <div class="container row">
                <div class="col-lg-4">
                    <h4>Airports & Lounges</h4>
                    <a href="#airportInfo">Airport Information</a><br/>
                    <a href="#lounges">Lounges</a>
                </div>
                <div class="col-lg-4">
                    <h4>Baggage</h4>
                    <a href="#cabinPackage">Cabin Baggage</a><br/>
                    <a href="#backageGuidelines">Baggage Guidelines</a>
                </div>
                <div class="col-lg-4">
                    <h4>Tips & Tools</h4>
                    <a href="#dosNdonts">Do's & Dont's</a><br/>
                    <a href="#currencyConverter">Currency Converter</a><br/>
                    <a href="#timeZoneConverter">Time Zone Converter</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="display:none;" id="alertLogin">
        <div class="alert alert-info fade in" id="alertbox" style="position:fixed;top:8%;margin-left:-7.7%;z-index:10; width:100%;height:100%;background-color:rgba(0,0,0,0.6);border-color:transparent;">
            <!-- Close button-->
            <a href="#" class="close" data-dismiss="alert" aria-label="close" style="color:#fff" onclick="showLogin()">&times;</a>
            <div class="row">
                <div class="container col-lg-4"></div>
                <div class="container col-lg-4">
                    <ul class="nav nav-pills" role="tablist">
                        <li role="presentation" id="indexLogin" class="active"><a href="#" onClick="hide(signup,login,indexSignup,indexLogin)">Login</a></li>
                        <li role="presentation" id="indexSignup"><a href="#" onClick="hide(login,signup,indexLogin,indexSignup)">Create Account</a></li>
                    </ul>
                    <!--Login-->
                    <div class="jumbotron" id="login">
                        <form action="login.php" method="post" id="formLogin" onSubmit="return verifyLogin()">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="email" class="form-control" id="userid" name="uname" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" id="pass" name="lpwrd" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2" style="padding-left:0px">Member:</label>
                                <label class="col-lg-5" style="padding-right:0px"><input type="radio" name="memberLog" id="employee" value="employee"/>Employee</label>
                                <label class="col-lg-5" style="padding-left:5px"><input type="radio" name="memberLog" id="customer" value="customer"/>Customer</label>
                            </div>
                            <button type="submit" class="btn btn-default">Login</button> <button type="reset" onClick="reset()" class="btn btn-danger" id="resetText">Reset</button>
                        </form>
                    </div>
                    <!--Signup-->
                    <div class="jumbotron" id="signup" style="display:none;"><!--Initially hiding the sign-up div/frame-->
                        <form action="signup.php" method="post" id="formCreate" onSubmit="return verify()"><!--return is necessary, else will redirect to action="<path>"-->
                            <div class="form-group">
                                <label>Username</label>
                                <input type="email" class="form-control" id="email" name="user" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" id="pass" name="pwrd" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" id="cnpass" name="cnpwrd" placeholder="Confirm-Password">
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2" style="padding-left:0px">Member:</label>
                                <label class="col-lg-5" style="padding-right:0px"><input type="radio" name="memberCreate" id="employee" value="employee"/>Employee</label>
                                <label class="col-lg-5" style="padding-left:0px"><input type="radio" name="memberCreate" id="customer" value="customer"/>Customer</label>
                            </div>
                            <button type="submit" class="btn btn-success" id="createAcc">Create Account</button> <button type="reset" onClick="reset()" class="btn btn-danger" id="resetText">Reset</button>
                        </form>
                    </div>
                </div>
                <div class="container col-lg-4"></div>
            </div>
        </div>
    </div>
	<div id="intro" class="container">
        <div class="container">
            <br><br><br>
            <h1>Welcome to <label style="font-family:'Monotype Corsiva';">Jet Airlines</label></h1>
            <div class = "container">
            	<div class="jumbotron jumboBack">
            		<form action="" method="post" id="my_form">
            			<div class="form-group">
            				<input type="radio" name="direction" value="return"><label>Return</label>
            				<input type="radio" name="direction" value="oneway"><label>One way</label>
            			</div>
            			<div class="form-group">
                            <select type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="src" name="newSrc" onchange="this.form.submit()">
            					<option value="0">-- Select Source --</option>
            					<?php
                                    $conn = oci_connect('airlinetry', 'airlinetry', '//localhost/xe'); 
                                    if (!$conn) {
                                        $m = oci_error();
                                        echo $m['message'], "\n";
                                        exit;
                                    } else { 
                                        //echo Date("Y-m-d");
                                        if(isset($_POST['newSrc']))
                                            $src = $_POST['newSrc'];

                                        $query = "SELECT * FROM places ORDER BY state_city ASC";
                                        
                                        $result = oci_parse($conn,$query);
                                        oci_execute($result);
                                        //oci_fetch_all($result, $res);
                                        while ($row = oci_fetch_array($result, OCI_RETURN_NULLS+OCI_BOTH)) {
                                            if($src == $row[2])
                                                echo "<option value=".$row[2]." selected>".$row[1]." (".$row[2].")</option>";
                                            else
                                                echo "<option value=".$row[2].">".$row[1]." (".$row[2].")</option>";
                                        }
                                    }
                                ?>
            				</select>
                            <!-- <a href="#" type="submit" onclick="document.getElementById('my_form').submit(); return false;"><span class="glyphicon glyphicon-retweet" aria-hidden="true"></span></a> -->
                            <a href="javascript:void(0)" type="submit" onclick="swapVal()"><span class="glyphicon glyphicon-retweet" aria-hidden="true"></span></a>
                            <input type="hidden" name="tempDest" id="tempdest" value="noval"/>
            				<select class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dest" name="newDest" onchange="this.form.submit()">
            					<option value="0">-- Select Destination --</option>
            					<?php
                                    $conn = oci_connect('airlinetry', 'airlinetry', '//localhost/xe'); 
                                    if (!$conn) {
                                        $m = oci_error();
                                        echo $m['message'], "\n";
                                        exit;
                                    } else { 
                                        //echo Date("Y-m-d");
                                        if(isset($_POST['newDest']))
                                            $dest = $_POST['newDest'];

                                        if(isset($_POST['newSrc']))
                                            $src = $_POST['newSrc'];

                                        /*if(isset($_POST['newSrc'])){
                                            $src = $_POST['newSrc'];
                                            $query = "SELECT * FROM places WHERE state_city != '$src'  ORDER BY state_city ASC";
                                        }else*/
                                            $query = "SELECT * FROM places ORDER BY state_city ASC";

                                        
                                        $result = oci_parse($conn,$query);
                                        oci_execute($result);
                                        //oci_fetch_all($result, $res);
                                        while ($row = oci_fetch_array($result, OCI_RETURN_NULLS+OCI_BOTH)) {
                                            if(isset($_POST['newSrc']) && $src == $row[2])
                                                echo "<option value=".$row[2]." hidden>".$row[1]." (".$row[2].")</option>";
                                            else if($dest == $row[2])
                                                echo "<option value=".$row[2]." selected>".$row[1]." (".$row[2].")</option>";
                                            else
                                                echo "<option value=".$row[2].">".$row[1]." (".$row[2].")</option>";
                                        }
                                    }
                                ?>
            				</select>
            			</div>
                        <div class="form-group">
                            <label>Depart: <input type="date" id="fromDate" class="btn btn-default dropdown-toggle"/></label><br/>
                            <label>Return: <input type="date" id="returnDate" class="btn btn-default dropdown-toggle"/></label>
                        </div>
                        <div class="form-group row" style="margin-top:-20px">
                            <div class="col-lg-4">
                                <div class="dropdown">
                                    <table class="table no-border">
                                        <tr>
                                            <th>Adult <label style="font-size:10px">(12yrs+)</label></th>
                                            <th>Child <label style="font-size:10px">(2 - 11yrs)</label></th> 
                                            <th>Infant <label style="font-size:10px">(Below 2yrs)</label></th> 
                                        </tr>
                                        <tr>
                                            <td>
                                                <select id="adult_no" class="btn btn-default dropdown-toggle" style="margin-top:-20px">
                                                <option value="0">0</option>
                                                <option value="1" selected>1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select id="child_no" class="btn btn-default dropdown-toggle" style="margin-top:-20px">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select id="infant_no" class="btn btn-default dropdown-toggle" style="margin-top:-20px"> 
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-8"></div>
                        </div>
                        <button type="submit" formaction="list.php" class="btn btn-default" style="background-color:#f0f0f0;margin-top:-30px">Show Flights <img src="dist/images/paperPlane.png" height="25"></button>
            		</form>
            	</div>
            </div>
        </div>
    </div>
    <br/><br/>
    <div class="container" id="content">
        <h2>About Us</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="container">
        <hr><footer class="foo"><p> Copyrights &copy Jet Airlines </p></footer>
    </div>
    <script src="dist/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="dist/js/index.js"></script>
    <script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="dist/js/scroll.js"></script>
</body>
</html>