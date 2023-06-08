let scrollPrecentage = () =>{
	let scrollProgress = document.getElementById("progress");
	let progressValue = document.getElementById("progress-value");
	let pos = document.documentElement.scrollTop;
	let calcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
	let scrollValue = Math.round(pos * 100 / calcHeight);
	scrollProgress.style.background = `conic-gradient(#e70634 ${scrollValue}%, #2b2f38 ${scrollValue}%)`;
}
window.onscroll = scrollPrecentage;
window.onload = scrollPrecentage;