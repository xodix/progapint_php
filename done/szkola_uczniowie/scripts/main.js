const buttons = document.querySelectorAll(".nav-item");
const iframe = document.querySelector("iframe");

for (const button of buttons) {
	button.addEventListener("click", (e) => {
		iframe.src = e.target.getAttribute("to");
	});
	button.addEventListener("mouseenter", e => {
		e.target.style.fontSize = "20px";
		e.target.style.backgroundColor = "black";
	});
	button.addEventListener("mouseleave", e => {
		e.target.style.fontSize = "";
		e.target.style.backgroundColor = "";
	});
}