let show = true;

menuSection = document.querySelector(".menu-section");
menuToggle = menuSection.querySelector(".menu-toggle");

aTag = menuSection.getElementsByTagName("A");

menuToggle.addEventListener("click", () => {
	document.body.style.overflow = show ? "hidden" : "initial"
	menuSection.classList.toggle("on", show)
	
	show = ! show;
})

