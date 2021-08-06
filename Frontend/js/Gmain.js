document.addEventListener('DOMContentLoaded', () => {
	const imgLightBox = document.querySelectorAll('.galeria_img');
	M.Materialbox.init(imgLightBox, {
		inDuration: 250,
		outDuration: 250
	});
});