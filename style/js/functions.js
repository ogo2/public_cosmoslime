$(document).ready(function(){
	var open = false;
	var what_faq_num = 0;
	var button_click = 0;
	$(document).on('click', '.plus_faq', function () {
		if (open===false){
			var text_faq = document.getElementById(`${this.value}`)
			what_faq_num = this.value;
			text_faq.style.display = '';
			button_click = this;
			this.style.transform = 'rotate(45deg)';
			console.log(button_click);
			open = true;
		}else{
			console.log(this.value);
			var text_faq_close = document.getElementById(`${what_faq_num}`)
			if (this.value===what_faq_num){
				text_faq_close.style.display = 'none';
				button_click.style.transform = '';
				open = false;
			}else{
			var text_faq = document.getElementById(`${this.value}`)
			console.log(button_click);
			text_faq_close.style.display = 'none';
			text_faq.style.display = '';
			button_click.style.transform = '';
			this.style.transform = 'rotate(45deg)';
			console.log(text_faq);
			button_click = this;
			what_faq_num = this.value;
			};
		}
	})
})