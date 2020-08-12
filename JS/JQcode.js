// let turinioBusena = false;
// let turinys = document.getElementById('sleptiTurini');
//
// function sleptiTurini() {
//     if (turinioBusena) {
//         $('main').hide();
//     } else {
//         $('main').show();
//     }
//     turinioBusena = !turinioBusena;
// }

$('header').click(
    function () {
        $('main').toggle()
    }
);