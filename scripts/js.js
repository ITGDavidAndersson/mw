function obj(id) {
	return document.getElementById(id);
}
function ajax_get(callback, doc, method, data) {
	method = typeof method !== 'undefined' ? method : "GET";
	data = typeof data !== 'undefined' ? data : null;
	if(doc === null) {
		return false;
	} else if(callback === null) {
		return false;
	} else {
		var xhr = new XMLHttpRequest();
		xhr.open(method, doc, true);
		xhr.onreadystatechange = function () {
		    var DONE = 4;
		    var OK = 200;
		    if(xhr.readyState === DONE) {
		    		if(xhr.status === OK) {
		    			callback(xhr.response);
		    		} else {
		    			callback("Error: "+xhr.status);
		    		}
		    }
		};
		xhr.send(null);
	}
}
function addModule(module) {
	ajax_get(addModule2, "get_module.php?q="+module, "GET");
}
function addModule2(data) {
	var insert = document.createElement("div");
	insert.innerHTML = data;
	document.getElementById("content").appendChild(insert);
}
function openMenu(obj) {
	closeSubmenus(obj);
	if(obj.parentNode.children[1].style.maxWidth == '50vw') {
		obj.parentNode.children[1].style.maxWidth = '0vw';
	} else {
		obj.parentNode.children[1].style.maxWidth = '50vw';
	}
}
function closeSubmenus(obj) {
	var list = document.getElementsByClassName("cat");
	for(var q = 0; q < list.length; q++) {
		if(list[q] != obj) {
			for(var c = 0; c < list[q].children.length; c++) {
				list[q].children[c].style.maxWidth = "0vw";
			}
		}
	}
}