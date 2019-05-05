let dropdown = document.getElementById("dropdown")

dropdown.addEventListener("click", function(e) {
	e.preventDefault();
	if (this.classList.contains("open")) {
		this.classList.remove("open");
	} else {
		this.classList.add("open");
	}
})
