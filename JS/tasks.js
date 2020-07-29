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

/*
if (a < c ) {
    x = c;
}
if (a > c) {
    x = a;
}
if (b < d) {
    y = b;
}
if ( b > d ) {
    y = d;
}

if ( a < b && c < d && b > c) {
    console.log(x , y)
} else {
    console.log('There is no connecting points!!!')
}
*/

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

