//Задание 1
var a = 2;

var a2 = kvadrat(a);
alert('квадрат числа ' + a + ': ' + a2);


function kvadrat(param1){
    return param1 *= param1;
}


//Задание 2
var b = 4;
var c = 10;

var s = symma(b, c);
alert('Сумма чисел ' + b + ' и ' + c + ' = ' + s);

function symma(chast1, chast2){
    return chast1 + chast2;
}


//Задание 3
var d = deystvie(a, b, c);
alert('Результат математических действий: ' + d);

function deystvie(umensh, vychit, delitel){
    return (umensh - vychit) / delitel;
}


//Задание 4
var ruDay = dayOfWeek(3);
alert('День недели на русском языке: ' + ruDay);

function dayOfWeek(numberOfDay) {
    var days = {1:'Понедельник', 2:'Вторник', 3:'Среда', 4:'Четверг', 5:'Пятница', 6:'Суббота', 7:'Воскресенье'};
    return (days[numberOfDay]);
}