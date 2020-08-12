console.log('Hello world');
let year = 2000;
let month = 11;
let day = 15;
let sum = year % 10 + month % 10 + day % 10;
console.log('Sum of last number: ' , sum);


let a = 1;
let b = 3;
let c = 2;
let d = 4;

if (a < c ) {
    x = c;
} else {
    x = a;
}
if (b < d) {
    y = b;
} else {
    y = d;
}
if ( a < b && c < d && b > c && d > a) {
    console.log('connecting points: x=' + x + ' y=' + y)
} else {
    console.log('There is no connecting points!!!')
}

let lemposBusena = false;
let lempa = document.getElementById('lempute');

function toggleLamp() {
    if (lemposBusena) {
        lempa.src = 'https://previews.123rf.com/images/ericmilos/ericmilos0912/ericmilos091200136/6109526-3d-render-of-light-bulb-on-white.jpg';
    } else {
        lempa.src = 'https://previews.123rf.com/images/murika/murika1511/murika151100069/48123160-bright-glowing-incandescent-light-bulb-on-a-white-background.jpg';
    }
    lemposBusena = !lemposBusena;
}
