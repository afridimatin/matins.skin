// Add your JS customizations here

var Form1 = document.getElementById("form1");

var Form2 = document.getElementById("form2");

var FormNeeds = document.getElementById("formNeeds");
var FormConcerns = document.getElementById("formConcerns");

var Form4 = document.getElementById("form4");

var next3 = document.getElementById("prev3");
var prev3 = document.getElementById("prev3");

var next1  = document.getElementById("next1");
var prev1  = document.getElementById("prev1");

var next2  = document.getElementById("next2");
var prev2  = document.getElementById("prev2");

var Concerns = document.getElementById("concerns");
var Needs = document.getElementById("needs");

var submit  = document.getElementById("submitAction");


next1.onclick = function(){
	Form1.style.bottom = "-600px";
	Form2.style.bottom = "310px";
	
}

prev1.onclick = function(){
	Form2.style.bottom = "-300px";
	Form1.style.bottom = "0";
	
}

next2.onclick = function(){
	Form4.style.bottom = "690px";
	Form2.style.bottom = "-300px";
	
}

prev2.onclick = function(){
	Form4.style.bottom = "200px";
	Form2.style.bottom = "300px";
	
}


Needs.onclick = function(){
	Form4.style.bottom = "-300px";
	FormNeeds.style.bottom = "1431px";
	
	
}

Concerns.onclick = function(){
	Form4.style.bottom = "200px";
	FormConcerns.style.bottom = "931px";
	
	
}

prev3.onclick = function(){
	Form2.style.bottom = "350px";
	Form4.style.bottom = "-600px";
	
}

