//E-MAIL_FORM//
		 
$("form").submit(function (){
	//e.preventDefault();
	let error = "";
	if($("#email").val() == ""){
		error +=  "Please, fill in the email field.<br>";
	}
	if($("#subject").val() == ""){
	    error +=  "Please, fill in the subject field.<br>";
    }
	if($("#content").val() == ""){
	    error +=  "Please, fill in the content field.";
    }
    if (error != ""){
        $("#error").html('<div class="alert alert-danger alert-dismissible fade show" role="alert"><p>There was an error(s) in you form:</p> '+error +' <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');	
		return false;	
	}else{
        //$("form").unbind('submit').submit();
		return true;
	}
});

//ARROW_UP//

$(function($) {
//show up when scroll is using//
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) $('.scrollup').fadeIn();
             else $('.scrollup').fadeOut();
    });
});

//HOURGLASS//

function hourglass() {
    let a;
    a = document.getElementById("div1");
    a.innerHTML = "&#xf251;";
    setTimeout(function() {
        a.innerHTML = "&#xf252;";
    }, 1000);
    setTimeout(function() {
        a.innerHTML = "&#xf253;";
    }, 2000);
}
hourglass();
setInterval(hourglass, 3000);

//AUDIO//
		
$(function(){
    document.querySelector('.playmusic').onclick = function() {
        if (document.querySelector(".music").paused) {
            document.querySelector(".music").play();
            this.innerHTML = "PAUSE";
        } else {
            document.querySelector(".music").pause();
            this.innerHTML = "PLAY";
        }
    }
});	

//CLOCK//

function setTime(){
    let canvas = document.getElementById("clock");
    let context = canvas.getContext("2d");
    let clockRadius = canvas.width / 2;
//clock's field/circle//
    context.beginPath();
    context.fillStyle = "#FFC107";
    context.arc(clockRadius, clockRadius, clockRadius, 0, 2 * Math.PI);
    context.fill();
//hands' color//
     context.fillStyle = "white";
// circle in the middle of clock//
    context.beginPath();
    context.arc(clockRadius, clockRadius, 2, 0, 2 * Math.PI);//10
	context.fill();
//10
    context.font = clockRadius / 6 + "px arial";
//hands' position//
    context.fillAlign = "center";
    context.textBaseline = "middle";
// drawing numbers on the clock's screen//
    for (let i = 1; i <= 12; i++) {
    context.fillText(i, clockRadius + clockRadius * 0.9 * Math.sin(i * 2 * Math.PI / 12), clockRadius - (clockRadius * 0.9 * Math.cos(i * 2 * Math.PI / 12)));
    }
//measure the time
    let hours = new Date().getHours();
    let minutes = new Date().getMinutes();
    let seconds = new Date().getSeconds();
    let fullHours = hours % 12 + minutes / 60 + seconds / 3600;
    let hoursAngle = fullHours * 2 * Math.PI / 12;
    let minutesAngle = minutes * 2 * Math.PI / 60;
    let secondsAngle = seconds * 2 * Math.PI / 60;
    context.strokeStyle = "white";
//hours' hand//
    context.moveTo(clockRadius, clockRadius);
    context.lineTo(clockRadius + clockRadius * 0.7 * Math.sin(hoursAngle), clockRadius - (clockRadius * 0.7 * Math.cos(hoursAngle)));
    context.lineWidth = 3;
    context.stroke();
//minutes hand//
    context.moveTo(clockRadius, clockRadius);
    context.lineTo(clockRadius + clockRadius * 0.8 * Math.sin(minutesAngle), clockRadius - (clockRadius * 0.8 * Math.cos(minutesAngle)));
    context.lineWidth = 2;
    context.stroke();
//seconds' hand//
    context.moveTo(clockRadius, clockRadius);
    context.lineTo(clockRadius + clockRadius * 0.9 * Math.sin(secondsAngle), clockRadius - (clockRadius * 0.9 * Math.cos(secondsAngle)));
    context.lineWidth = 1;
    context.stroke();
};
setInterval(setTime, 1000);

//TOOLTIP//

$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();   
});
		


		
			
			
		