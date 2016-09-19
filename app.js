/**
 * 
 */

$(function() {

	$("#reg").click(function () {
        
        var username = $("#username").val();
        var password = $("#password").val();
        var email = $("#email").val();

        $("#registerForm").submit(function(e){
            e.preventDefault();
        });
        
        var data = {
        		username: username,
        		password: password,
        		email: email
        	}
        
        if (validateEmail(email) == true && username != "" && password != "") {
        	$.ajax({
        		method: 'POST',
       			dataType: 'json',
       			data: data,
       			url: "assets/server/signup.php"
       		}).then(function(data) {
        		if (data.success == true) {
        			$("#success1").css({
           				display: "block"
           			});			
           			$("#signInForm").css({
           				display: "none"
           			});
           			$("#registerForm").css({
           				display: "none"
           			});
            			
           			$("#signup").css({
           				display: "none"
           			});
           			$("#login").css({
           				display: "none"
           			});
       			} else {
           			alert("Username already exists!");
       			}
       		});
        	
        } else {
        	if ($("#username").val() == "") {
        		alert("Enter a valid username!");
        	} else if ($("#password").val() == "") {
        		alert("Enter a valid password!");
        	} else if (!validateEmail(email)) {
        		$("#email").css({
            		backgroundColor: "red"
            	});
        		alert("Enter a valid email!");
        	}
        }
    });
	
	$("#go").click(function () {
        
        var username = $("#user").val();
        var password = $("#pass").val();

        $("#signInForm").submit(function(e){
            e.preventDefault();
        });
        
        var data = {
    		username: $('#user').val(),
    		password: $('#pass').val()
    	}
    		
    	$.ajax({
    		method: 'POST',
   			dataType: 'json',
   			data: data,
   			url: "assets/server/signin.php"
   		}).then(function(data) {
    		if (data.success) {
    			window.location.href = "http://localhost/S6Web3/WebApp/page2.php";    			
   			} else {
   				$("#wrongInput").css({
    				display: "block"
    			});
   			}
   		})

    });
	
	$("#butt1").click(function () {
	
		var result = $("#game1").val();
		var homeTeam = $("#home1").html();
	
		var data = {
			result: $("#game1").val(),
			home: $("#home1").html()
		}

        $("#myPredictions").submit(function(e){
            e.preventDefault();
        });
		
		$.ajax({
    		method: 'POST',
   			dataType: 'json',
   			data: data,
   			url: "assets/server/predictions.php"
   		}).then(function(data) {
   			if (data.success) {
   	   			$("#prediction1").html($("#game1").val());
   			}
   		})

    });
	
	$("#butt2").click(function () {
		
		var result = $("#game2").val();
		var homeTeam = $("#home2").html();
	
		var data = {
			result: $("#game2").val(),
			home: $("#home2").html()
		}

        $("#myPredictions").submit(function(e){
            e.preventDefault();
        });
		
		$.ajax({
    		method: 'POST',
   			dataType: 'json',
   			data: data,
   			url: "assets/server/predictions.php"
   		}).then(function(data) {
   			if (data.success) {
   	   			$("#prediction2").html($("#game2").val());
   			}
   		})

    });
	
	$("#butt3").click(function () {
		
		var result = $("#game3").val();
		var homeTeam = $("#home3").html();
	
		var data = {
			result: $("#game3").val(),
			home: $("#home3").html()
		}

        $("#myPredictions").submit(function(e){
            e.preventDefault();
        });
		
		$.ajax({
    		method: 'POST',
   			dataType: 'json',
   			data: data,
   			url: "assets/server/predictions.php"
   		}).then(function(data) {
   			if (data.success) {
   	   			$("#prediction3").html($("#game3").val());
   			}
   		})

    });
	
	$("#butt4").click(function () {
		
		var result = $("#game4").val();
		var homeTeam = $("#home4").html();
	
		var data = {
			result: $("#game4").val(),
			home: $("#home4").html()
		}

        $("#myPredictions").submit(function(e){
            e.preventDefault();
        });
		
		$.ajax({
    		method: 'POST',
   			dataType: 'json',
   			data: data,
   			url: "assets/server/predictions.php"
   		}).then(function(data) {
   			if (data.success) {
   	   			$("#prediction4").html($("#game4").val());
   			}
   		})

    });
	
	$("#butt5").click(function () {
		
		var result = $("#game5").val();
		var homeTeam = $("#home5").html();
	
		var data = {
			result: $("#game5").val(),
			home: $("#home5").html()
		}

        $("#myPredictions").submit(function(e){
            e.preventDefault();
        });
		
		$.ajax({
    		method: 'POST',
   			dataType: 'json',
   			data: data,
   			url: "assets/server/predictions.php"
   		}).then(function(data) {
   			if (data.success) {
   	   			$("#prediction5").html($("#game5").val());
   			}
   		})

    });
	
	$("#butt6").click(function () {
		
		var result = $("#game6").val();
		var homeTeam = $("#home6").html();
	
		var data = {
			result: $("#game6").val(),
			home: $("#home6").html()
		}

        $("#myPredictions").submit(function(e){
            e.preventDefault();
        });
		
		$.ajax({
    		method: 'POST',
   			dataType: 'json',
   			data: data,
   			url: "assets/server/predictions.php"
   		}).then(function(data) {
   			if (data.success) {
   	   			$("#prediction6").html($("#game6").val());
   			}
   		})

    });
	
	$("#butt7").click(function () {
		
		var result = $("#game7").val();
		var homeTeam = $("#home7").html();
	
		var data = {
			result: $("#game7").val(),
			home: $("#home7").html()
		}

        $("#myPredictions").submit(function(e){
            e.preventDefault();
        });
		
		$.ajax({
    		method: 'POST',
   			dataType: 'json',
   			data: data,
   			url: "assets/server/predictions.php"
   		}).then(function(data) {
   			if (data.success) {
   	   			$("#prediction7").html($("#game7").val());
   			}
   		})

    });
	
	$("#butt8").click(function () {
		
		var result = $("#game8").val();
		var homeTeam = $("#home8").html();
	
		var data = {
			result: $("#game8").val(),
			home: $("#home8").html()
		}

        $("#myPredictions").submit(function(e){
            e.preventDefault();
        });
		
		$.ajax({
    		method: 'POST',
   			dataType: 'json',
   			data: data,
   			url: "assets/server/predictions.php"
   		}).then(function(data) {
   			if (data.success) {
   	   			$("#prediction8").html($("#game8").val());
   			}
   		})

    });
	
	$("#butt9").click(function () {
		
		var result = $("#game9").val();
		var homeTeam = $("#home9").html();
	
		var data = {
			result: $("#game9").val(),
			home: $("#home9").html()
		}

        $("#myPredictions").submit(function(e){
            e.preventDefault();
        });
		
		$.ajax({
    		method: 'POST',
   			dataType: 'json',
   			data: data,
   			url: "assets/server/predictions.php"
   		}).then(function(data) {
   			if (data.success) {
   	   			$("#prediction9").html($("#game9").val());
   			}
   		})

    });
	
	$("#standings").click(function () {
		
		var data = {};

        $("#myPredictions").submit(function(e){
            e.preventDefault();
        });
		
		$.ajax({
    		method: 'POST',
   			dataType: 'json',
   			data: data,
   			url: "assets/server/newfile.php"
   		}).then(function(data) {
   			if (data.success) {
   				window.location.href = "http://localhost/S6Web3/WebApp/page3.php";
   			}
   		})
	
	});
	
	$("#logout").click(function () {

        window.location.href = "http://localhost/S6Web3/WebApp/page1.php";
	
	});
	
	function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

});