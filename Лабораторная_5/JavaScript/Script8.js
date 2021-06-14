//Задание 1
var str = 'javascript';

var b = str.slice(0,1).toUpperCase();
var e = str.slice(1, str.length);

alert('Способ замены с помощью глобального поиска: ' + str.replace(/j/g, 'J') + 
'\nСпособ обрезания симола строки и переведения его в верхний регистр: ' + b + e);


//Задание 2
var str2 = '123456';
var str3 = str2.split("").reverse().join("");

alert('Реверс строки ' + str2 + ' : ' + str3);


//Задание 3
var str4 = 'https://github.com/';
var h = '.html';

if(str4.includes('http://')){
    alert('Строка ' + str4 + ' ' + 'начинается с http://')
} else {
    alert('Строка ' + str4 + ' ' + 'не начинается с http://');
}

var a = str4.length;
var b = str4.indexOf('.html');
var c = h.length;

var o = a - b - c;

if (o !== 0) {
    alert('Строка ' + str4 + ' ' + 'не заканчивается на .html');
} else {
    alert('Строка ' + str4 + ' ' + 'заканчивается на .html');
}