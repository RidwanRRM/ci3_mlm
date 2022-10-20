$(document).ready(function() {
    
    

    var upagu = document.getElementById("upagu");
    upagu.addEventListener("keydown", function(event) {
        var key = event.which;
        if ((key < 48 || key > 57) && key != 8) event.preventDefault();
    });

    upagu.addEventListener("keyup", function(event) {
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
        var urpd_jan = document.getElementById("urpd_jan");
		urpd_jan.addEventListener("keydown", function(event) {
			var key = event.which;
			if ((key < 48 || key > 57) && key != 8) event.preventDefault();
		});

		urpd_jan.addEventListener("keyup", function(event) {
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
        var urpd_feb = document.getElementById("urpd_feb");
		urpd_feb.addEventListener("keydown", function(event) {
			var key = event.which;
			if ((key < 48 || key > 57) && key != 8) event.preventDefault();
		});

		urpd_feb.addEventListener("keyup", function(event) {
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
        var urpd_mar = document.getElementById("urpd_mar");
		urpd_mar.addEventListener("keydown", function(event) {
			var key = event.which;
			if ((key < 48 || key > 57) && key != 8) event.preventDefault();
		});

		urpd_mar.addEventListener("keyup", function(event) {
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
        var urpd_apr = document.getElementById("urpd_apr");
		urpd_apr.addEventListener("keydown", function(event) {
			var key = event.which;
			if ((key < 48 || key > 57) && key != 8) event.preventDefault();
		});

		urpd_apr.addEventListener("keyup", function(event) {
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
        var urpd_mei = document.getElementById("urpd_mei");
		urpd_mei.addEventListener("keydown", function(event) {
			var key = event.which;
			if ((key < 48 || key > 57) && key != 8) event.preventDefault();
		});

		urpd_mei.addEventListener("keyup", function(event) {
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
        var urpd_jun = document.getElementById("urpd_jun");
		urpd_jun.addEventListener("keydown", function(event) {
			var key = event.which;
			if ((key < 48 || key > 57) && key != 8) event.preventDefault();
		});

		urpd_jun.addEventListener("keyup", function(event) {
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
        var urpd_jul = document.getElementById("urpd_jul");
		urpd_jul.addEventListener("keydown", function(event) {
			var key = event.which;
			if ((key < 48 || key > 57) && key != 8) event.preventDefault();
		});

		urpd_jul.addEventListener("keyup", function(event) {
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
        var urpd_aug = document.getElementById("urpd_aug");
		urpd_aug.addEventListener("keydown", function(event) {
			var key = event.which;
			if ((key < 48 || key > 57) && key != 8) event.preventDefault();
		});

		urpd_aug.addEventListener("keyup", function(event) {
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
        var urpd_sep = document.getElementById("urpd_sep");
		urpd_sep.addEventListener("keydown", function(event) {
			var key = event.which;
			if ((key < 48 || key > 57) && key != 8) event.preventDefault();
		});

		urpd_sep.addEventListener("keyup", function(event) {
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
        var urpd_okt = document.getElementById("urpd_okt");
		urpd_okt.addEventListener("keydown", function(event) {
			var key = event.which;
			if ((key < 48 || key > 57) && key != 8) event.preventDefault();
		});

		urpd_okt.addEventListener("keyup", function(event) {
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
        var urpd_nov = document.getElementById("urpd_nov");
		urpd_nov.addEventListener("keydown", function(event) {
			var key = event.which;
			if ((key < 48 || key > 57) && key != 8) event.preventDefault();
		});

		urpd_nov.addEventListener("keyup", function(event) {
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
        var urpd_des = document.getElementById("urpd_des");
		urpd_des.addEventListener("keydown", function(event) {
			var key = event.which;
			if ((key < 48 || key > 57) && key != 8) event.preventDefault();
		});

		urpd_des.addEventListener("keyup", function(event) {
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
        var urealisasi_jan = document.getElementById("urealisasi_jan");
		urealisasi_jan.addEventListener("keydown", function(event) {
			var key = event.which;
			if ((key < 48 || key > 57) && key != 8) event.preventDefault();
		});

		urealisasi_jan.addEventListener("keyup", function(event) {
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
        var urealisasi_feb = document.getElementById("urealisasi_feb");
		urealisasi_feb.addEventListener("keydown", function(event) {
			var key = event.which;
			if ((key < 48 || key > 57) && key != 8) event.preventDefault();
		});

		urealisasi_feb.addEventListener("keyup", function(event) {
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
        var urealisasi_mar = document.getElementById("urealisasi_mar");
		urealisasi_mar.addEventListener("keydown", function(event) {
			var key = event.which;
			if ((key < 48 || key > 57) && key != 8) event.preventDefault();
		});

		urealisasi_mar.addEventListener("keyup", function(event) {
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
        var urealisasi_apr = document.getElementById("urealisasi_apr");
		urealisasi_apr.addEventListener("keydown", function(event) {
			var key = event.which;
			if ((key < 48 || key > 57) && key != 8) event.preventDefault();
		});

		urealisasi_apr.addEventListener("keyup", function(event) {
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
        var urealisasi_mei = document.getElementById("urealisasi_mei");
		urealisasi_mei.addEventListener("keydown", function(event) {
			var key = event.which;
			if ((key < 48 || key > 57) && key != 8) event.preventDefault();
		});

		urealisasi_mei.addEventListener("keyup", function(event) {
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
        var urealisasi_jun = document.getElementById("urealisasi_jun");
		urealisasi_jun.addEventListener("keydown", function(event) {
			var key = event.which;
			if ((key < 48 || key > 57) && key != 8) event.preventDefault();
		});

		urealisasi_jun.addEventListener("keyup", function(event) {
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
        var urealisasi_jul = document.getElementById("urealisasi_jul");
		urealisasi_jul.addEventListener("keydown", function(event) {
			var key = event.which;
			if ((key < 48 || key > 57) && key != 8) event.preventDefault();
		});

		urealisasi_jul.addEventListener("keyup", function(event) {
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
        var urealisasi_aug = document.getElementById("urealisasi_aug");
		urealisasi_aug.addEventListener("keydown", function(event) {
			var key = event.which;
			if ((key < 48 || key > 57) && key != 8) event.preventDefault();
		});

		urealisasi_aug.addEventListener("keyup", function(event) {
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
        var urealisasi_sep = document.getElementById("urealisasi_sep");
		urealisasi_sep.addEventListener("keydown", function(event) {
			var key = event.which;
			if ((key < 48 || key > 57) && key != 8) event.preventDefault();
		});

		urealisasi_sep.addEventListener("keyup", function(event) {
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
        var urealisasi_okt = document.getElementById("urealisasi_okt");
		urealisasi_okt.addEventListener("keydown", function(event) {
			var key = event.which;
			if ((key < 48 || key > 57) && key != 8) event.preventDefault();
		});

		urealisasi_okt.addEventListener("keyup", function(event) {
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
        var urealisasi_nov = document.getElementById("urealisasi_nov");
		urealisasi_nov.addEventListener("keydown", function(event) {
			var key = event.which;
			if ((key < 48 || key > 57) && key != 8) event.preventDefault();
		});

		urealisasi_nov.addEventListener("keyup", function(event) {
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
        var urealisasi_des = document.getElementById("urealisasi_des");
		urealisasi_des.addEventListener("keydown", function(event) {
			var key = event.which;
			if ((key < 48 || key > 57) && key != 8) event.preventDefault();
		});

		urealisasi_des.addEventListener("keyup", function(event) {
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