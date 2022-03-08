const buttons = document.querySelectorAll(".nav-item");
const iframe = document.querySelector("iframe");

for (const button of buttons) {
	button.addEventListener("click", (e) => {
		iframe.src = e.target.getAttribute("to");
	});
}