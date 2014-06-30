// JavaScript Document

var layout = {} // the layout class

$(document).ready(function(){	
	layout = new Layout('#container');
	
	loginPage = new Page('login','templates/login.html');
	loginPage.show();
	
	signupPage = new Page('signup','templates/signup.html');
	getAdvisorPage = new Page('getAdvisor','templates/getAdvisor.html');
});
