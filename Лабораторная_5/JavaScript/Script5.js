//Задание 1
var a = 10;
var b = 3;
alert(a % b);

//Задание 2
var a = 7;
var b = 2;
var rest = a % b;
var dev = a / b;

if(rest == 0) {
    alert('Делится без остатка, результат деления: ' + dev);
} else {
    alert('Делится с остатком, результат деления: ' + rest);
}


//Задание 3
var st = Math.pow(2, 10);

alert('2 в 10й степени: ' + st);


//Задание 4
var result = Math.sqrt(245); 

alert('Корень из 245: ' + result);


//Задание 5
var arr = [4, 2, 5, 19, 13, 0, 10];
var result = 0;

for(var i = 0; i < arr.length; i++) {
    result += Math.pow(arr[i], 3);
}
alert(Math.sqrt(result)); 


//Задание 6
var num = Math.sqrt(379);
alert('Округление до целых: ' + num.toPrecision(2) + 
'\nОкругление до десятых: ' + num.toPrecision(3) + 
'\nОкругление до сотых: ' + num.toPrecision(4));


//Задание 7
var num = Math.sqrt(587);
var obj = {'floor': Math.floor(num), 'ceil': Math.ceil(num)};

alert('Округление в большую сторону числа ' + num + ' = '+ obj['ceil'] + 
'\nОкругление в меньшую сторону числа ' + num + ' = '+ obj['floor']);


//Задание 8
var arr = [4, -2, 5, 19, -130, 0, 10];

alert('Максимальное число из спиcка ' + arr + ' = ' + Math.max(4, -2, 5, 19, -130, 0, 10) + 
'\nМинимальное число из спиcка ' + arr + ' = ' + Math.min(4, -2, 5, 19, -130, 0, 10));


//Задание 9
alert(Math.floor(Math.random() * (100 - 1 + 1)) + 1);


//Задание 10
var arr = [];
for (i = 0; i < 10; i++) {
    arr[i] = Math.floor(Math.random() * (100 - 1 + 1)) + 1;
}
alert('Десять рандомных чисел ' + arr);


//Задание 11
var a = 7;
var b = 1;

alert(Math.abs(a - b));


//Задание 12
var a = 3;
var b = 5
var c = Math.abs(a - b);

alert(c);


//Задание 13
var a = 3;
var b = 5;
var c = Math.abs(a - b);

alert(c);

//Задание 14
var arr = [12, 15, 20, 25, 59, 79];
var num = 0;

for (var i = 0; i < arr.length; i++) {
    num += arr[i]
}
var average = num / arr.length;
alert('Среднее арифметическое массива ' + arr + ' = ' + average);


//Задание 15
var fact = 1;
var num = 4;

for (var i = 1; i <= num; i++) {
    fact = fact * i;
}
alert(fact);