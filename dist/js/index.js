window.onload = function(){ // hides the Signup Div part
	$('#signup').css('display','none');

	var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth()+1; //January is 0!
	var yyyy = today.getFullYear();

	if(dd<10) {
    	dd = '0' + dd;
	} 

	if(mm<10) {
    	mm = '0' + mm;
	}

	var currentDate = yyyy + '-' + mm +'-' + dd;
	document.getElementById("fromDate").min = currentDate;
	document.getElementById("returnDate").min = currentDate;
}

function swapVal(){// swap the source & destination
	//window.location.reload();
	var tempSrc = document.getElementById("src").value;
	var tempDest = document.getElementById("dest").value;
	document.getElementById("src").value = document.getElementById("dest").value;// destination value to source value
	$("#dest").val(tempDest).find("option[value=" + tempDest +"]").attr("hidden", true);// add hidden tag to the old value
	$("#dest").val(tempSrc).find("option[value=" + tempSrc +"]").attr("hidden", false);// remove the hidden tag of new value
	document.getElementById("dest").value = tempSrc;// set the new value
}

function showLogin(){//display/hide the Login alert 
	var value = document.getElementById("loginNav").value;
	if(value == "1"){
		$("#alertLogin").css("display","block");
		document.getElementById("loginNav").value = "0";
	}else{
		$("#alertLogin").css("display","none");
		document.getElementById("loginNav").value = "1";
	}
	return true;
}

function showTravelInfo(){//display/hide the Travel Info alert
	var value = document.getElementById("travelInfoNav").value;
	if(value == "1"){
		$("#alertTravelInfo").css("display","block");
		document.getElementById("travelInfoNav").value = "0";
	}else{
		$("#alertTravelInfo").css("display","none");
		document.getElementById("travelInfoNav").value = "1";
	}
	return true;
}

//swap between login & signup container/jumbotron
function hide(frame1,frame2,btn1,btn2){//(frame-to-disable, frame-to-enable, btn-to-deactivate, btn-to-activate)
	$(frame1).hide('slow');
	$(frame2).show('slow');
	$(btn1).removeClass('active');
	$(btn2).addClass('active');
}

function reset(){//to clear the value
	$('#email').value='';
	$('pass').value='';
	$('cnpass').value='';
}

// for signup verification
function verify(){//verify(email,password,confirm-password)
	var x = document.forms["formCreate"]["email"].value;
	var y = document.forms["formCreate"]["pass"].value;
	var z = document.forms["formCreate"]["cnpass"].value;
	var radio = $('input[name=memberCreate]:checked').length; //checks if the any radio button of that group is chosen
	var passPattern =  "^[a-zA-Z0-9_]*$";//"/\d+/";

    if (x == null || x == "" || y == null || y == "" || z == null || z == "" || radio <= 0) {
        alert("Please complete the form");
        return false;
    }else if(!y.match(/\d+/) || !y.match("^[a-zA-Z0-9_]*$")){
    	alert("The password is not Alpha Numeric!");
    	return false;
    }else if (y != z){
    	alert("Password Incorrect!");
    	return false;
    }
}

// for login verification
function verifyLogin() {// verify the attributes in the the login Form
	var user = document.forms["formLogin"]["userid"].value;
	var pass = document.forms["formLogin"]["pass"].value;
	var radio = $('input[name=memberLog]:checked').length;

	if(user==null||user==""||pass==null||pass=="" || radio <= 0){//if radio < 0 , then none selected
		alert("Please enter UserId and Password");
        return false;	
	}
}

var mainbottom = $('#intro').offset().top + $('#intro').height();
// on scroll, 
$(window).on('scroll',function(){
    // we round here to reduce a little workload
    var stop = Math.round($(window).scrollTop());
    if (stop > mainbottom) {
        //$('.nav').addClass('past-main');
        $('#navDraw').removeClass('coll');
        $('#navDraw').addClass('coll2');
    } else {
    	//$('.nav').removeClass('past-main');
        //$('.coll').css('background','#000000');
        $('#navDraw').removeClass('coll2');
        $('#navDraw').addClass('coll');
    }
});