let dropdown = document.getElementById("dropdown")
let dropdownList = document.getElementById("dropdown-list")

dropdown.addEventListener("click", function(e) {
	e.preventDefault();
	if (this.classList.contains("open")) {
		this.classList.remove("open");
		dropdownList.classList.add("hide");
	} else {
		this.classList.add("open");
		dropdownList.classList.remove("hide");
	}
})
