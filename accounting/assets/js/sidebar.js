var drpd1 = document.getElementById("dropdown1");
var isRotated = false; 

function rotateIcon() {
    var icon1 = document.getElementById("icon1");

    if(isRotated) {
        icon1.classList.remove("rotate");
        isRotated = false;
    } else {
        icon1.classList.add("rotate");
        isRotated = true;
    }
}

$('#submenu1').on('show.bs.collapse', function() {
	rotateIcon();
})

$('#submenu1').on('hide.bs.collapse', function() {
	rotateIcon();
})

