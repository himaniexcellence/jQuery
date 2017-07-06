$(document).ready(function(){
    $('#myform').validate({ 
        onclick: false,
    	rules: {
    		name: {
    			required: true,
    		},
            email: {
                required: true,
                email: true
            },
            pswd: {
                required: true,
                minlength: 5
            },
            cpswd: {
                required: true,
                equalTo: "#pswd"
            },
            agree: "required"
        },
        messages: {
        	name: {
        		required: "Enter Valid Name",
        	},
            email: {
            	required: "Email is not Valid",
            },
            pswd: {
            	required: "Enter Valid Password",
            },
            cpswd: "Password not Matched",
            agree: "Please Agree To Terms and Conditions"
        },
         errorPlacement: function (error, element) {
            alert(error.text());
        },
        submitHandler: function(form) {
        	var name = $("#name").val();
        	var email = $("#email").val();
        	var pswd =  $("#pswd").val();
            $("#submit").click(function() {
                alert("Data Submitted Successfully!\nName : "+ name +"\nEmail : "+ email +"\nPassword : "+ pswd);
                form.submit();
                alert("Data Submitted Successfully!\nName : "+ name +"\nEmail : "+ email +"\nPassword : "+ pswd);
                return false;
            });
        }
    });
});