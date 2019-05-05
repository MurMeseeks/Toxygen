let dropdown = document.getElementById("dropdown")
let dropdownList = document.getElementById("dropdown-list")

dropdown.addEventListener("click", function() {
	if (dropdown.classList.contains("open")) {
		dropdown.classList.remove("open");
		dropdownList.classList.add("hide");
	} else {
		dropdown.classList.add("open");
		dropdownList.classList.remove("hide");
	}
})
