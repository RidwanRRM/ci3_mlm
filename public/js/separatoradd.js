$(document).ready(function () {

	var luas = document.getElementById("luas");
	// var elem = document.getElementById("rpd_jan");

	luas.addEventListener("keydown", function (event) {
		var key = event.which;
		if ((key < 48 || key > 57) && key != 8) event.preventDefault();
	});

	luas.addEventListener("keyup", function (event) {
		var value = this.value.replace(/,/g, "");
		this.dataset.currentValue = parseInt(value);
		var caret = value.length - 1;
		while ((caret - 3) > -1) {
			caret -= 3;
			value = value.split('');
			value.splice(caret + 1, 0, ",");
			value = value.join('');
		}
		this.value = value;
	});
});
