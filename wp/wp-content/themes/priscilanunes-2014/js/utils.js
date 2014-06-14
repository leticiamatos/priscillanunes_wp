$(function() {
	console.log("oi!");
	$('.bxslider-banner').bxSlider({
	  nextSelector: '#control_next',
	  prevSelector: '#control_prev',
	  auto: true,
	  pager: false,
	  mode: 'horizontal',
	  pause: 8000
	});

	// Menu dropdown	
	startList = function() {
		if (document.all&&document.getElementById) {
			navRoot = document.getElementById("menu-primario");
			for (i=0; i<navRoot.childNodes.length; i++) {
				node = navRoot.childNodes[i];
				if (node.nodeName=="LI") {
					node.onmouseover=function() {
						this.className+=" over";
		  		}
		  		node.onmouseout=function() {
		  			this.className=this.className.replace(" over", "");
		   		}
		   	}
		  }
		}
	}
	window.onload=startList;

})