(function(){
	const btnLeft = document.querySelector('.arrow-left');
	const btnRight = document.querySelector('.arrow-right');
	const ul = document.querySelector('.review-stories ul');
	const li = document.querySelectorAll('.review-stories ul li');
	let init = 0;
	let amount = 20;
	let index = 0;

	btnRight.addEventListener("click", function() {
		if (init < (li.length - 1) * amount) {
			init += amount;
			ul.style.transform = "translateX(-" + init + "%)";
			index++;
		} else {
			ul.style.transform = "translateX(-" + 0 + "%)";
			init = 0
			index = 0;
		}
		for (var i = 0; i < li.length; i++) {
			li[i].className = li[i].className.replace(/\bactive\b/g, "");
			li[index].className = 'active';
		}
	});

	btnLeft.addEventListener("click", function() {
		if (init > 0) {
			init -= amount;
			ul.style.transform = "translateX(-" + init + "%)";
			index--;
		} else {
			init = ((li.length - 1) * amount);
			ul.style.transform = "translateX(-" + init + "%)";
			index = 4;
		}
		for (var i = 0; i < li.length; i++) {
			li[i].className = li[i].className.replace(/\bactive\b/g, "");
			li[index].className = 'active';
		}
	});
}());
