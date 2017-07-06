$(document).ready(function(){
	$("#bind").bind("click", function(){
	    alert("The paragraph was clicked.");
	});
	$("input #blur").blur(function(){
	    alert("This input field has lost its focus.");
	});
	$("#change").change(function(){
	    alert("The text has been changed.");
	});
	$("#click").click(function(){
	    alert("The paragraph was clicked.");
	});
	$("#dblclick").dblclick(function(){
	    alert("The paragraph was double-clicked");
	});
	$("td").delegate("p", "click", function(){
	    $("p").css("background-color", "pink");
	});
	$("img").error(function(){
	    $("img").replaceWith("<p>Error loading image!</p>");
	});
	$("input #focus").focus(function(){
	    $("span").css("display", "inline").fadeOut(2000);
	});
	$("#hover").hover(function(){
    	$(this).css("background-color", "yellow");
    	}, function(){
        $(this).css("background-color", "pink");
    });
    $("#keydown").keydown(function(){
	    $("#keydown").css("background-color", "red");
	});
	$("#keypress").keypress(function(){
	    $("#ip").text(i += 1);
	});
	$("#up").keyup(function(){
	    $("#keyup").css("background-color", "pink");
	});
    $("#down").mousedown(function(){
	    $("#down input").after("Mouse button pressed down.");
	});
	$("#enter").mouseenter(function(){
	    $(this).css("background-color", "yellow");
	});
	$("#leave").mouseleave(function(){
	    $(this).css("background-color", "gray");
	});
	$("#over").mouseover(function(){
	    $(this).css("background-color", "yellow");
	});
	$("#mouseup").mouseup(function(){
	   $(this).after("Mouse button released.");
	});
});
