$(document).ready(function(){
	var person = {	"firstname" : "Himani", 
					"lastname" : "Tayal", 
					"dob" : "10/07/1994"
				};
	$("#details").append("<tr><td>"+person.firstname+" "+person.lastname+"</td><td>"+person.dob+"</td></tr>");

	var person2 = [{
						"firstname" : "Himani", 
						"lastname" : "Tayal", 
						"dob" : "10/07/1994"
					},
					{
						"firstname" : "Alpha", 
						"lastname" : "Chaudhary", 
						"dob" : "30/05/1992"
					},
					{
						"firstname" : "Beta", 
						"lastname" : "Sharma", 
						"dob" : "20/08/1990"
					},
					{
						"firstname" : "Gamma", 
						"lastname" : "Singhal", 
						"dob" : "16/01/1992"
					},
					{
						"firstname" : "Sin", 
						"lastname" : "Tomar", 
						"dob" : "13/10/2002"
					}];
		var i = 0;
		for(i = 0; i < person2.length; i++){
			$("#array").append("<tr><td>"+person2[i].firstname+" "+person2[i].lastname+"</td><td>"+person2[i].dob+"</td></tr>");
		}
});
