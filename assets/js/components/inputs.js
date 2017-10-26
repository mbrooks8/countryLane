function initInput(){
	$( ".text" ).focusin(function() {
		if(this.className.indexOf('active') == -1)
		{
			this.className = this.className+" active";
		}
	});
	$( ".text" ).focusout(function() {
		if(this.value == "")
		{

			var start = this.className.indexOf('active');
			if( start != -1)
			{
				this.className = this.className.replace("active", "");
			}
		}
	});
	$(".text").each(function(){
		if(this.value != "")
		{
			this.className = this.className+" active";
		}
	});
}
