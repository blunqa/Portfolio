// valitse modalien avausnapit
var open_modals = document.getElementsByClassName('open-modal');

// valitse modalien sulkemisnapit
var close_modals = document.getElementsByClassName('close-modal');

// avoinna oleva modal
var open_modal = null;

var xhr = new XMLHttpRequest();
for (var i = 0; i < open_modals.length; i++){
	open_modals[i].addEventListener('click', function(evt){
		evt.preventDefault();
		// sulje mahdollisesti avoinna oleva modal
		try {
			open_modal.style.display = 'none';
		} catch (e) {}
		
		// console.log(this);
		var modal = this.getAttribute('data-target');
		var element = document.getElementById(modal);
		element.style.opacity = 0;
		element.style.display = 'block';
		fadeIn(element);
		open_modal = element;
	});
}

// modalin sulkeminen
for( var i = 0; i < close_modals.length; i++ ){
	close_modals[i].addEventListener('click',function(evt){
		evt.preventDefault();
		var element = this.parentNode;
		fadeOut(element);
	});
}

// häivytys sisään
var fadeIn = function(element){
	var op = Number(element.style.opacity);
	element.style.opacity = op + 0.05;
	if (op < 1){
		window.requestAnimationFrame(function(){
			fadeIn(element);
		});
	} else {
		element.style.opacity = 1;
	}
}

// häivytys ulos
var fadeOut = function(element){
	var op = Number(element.style.opacity);
	element.style.opacity = op - 0.05;
	if (op > 0){
		window.requestAnimationFrame(function(){
			fadeOut(element);
		});
	} else {
		element.style.opacity = 0;
		element.style.display = 'none';
	}
}

//uusi rivi
var add = function(){
    var element = document.createElement("input");
    element.setAttribute("type", "file");    
    element.setAttribute("name", "fileToUpload");
    element.setAttribute("id", "fileToUpload");
    var addto = document.getElementById("newfile"); 
    var br = document.createElement("br");
    addto.appendChild(br);
    
    addto.appendChild(element);
    
}

