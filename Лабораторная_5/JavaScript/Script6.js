//Задание 1
var str = 'js';
alert(str.toUpperCase());


//Задание 2
var str = 'JS';
alert(str.toLowerCase());


//Задание 3
var str = 'Я учу JavaScript!';
alert('Количесво символов в строке ' + str + ' = ' + str.length);


//Задание 4
var str = 'я учу JavaScript!';
alert(str + '\n' + 
str.substr(2, 4) + '\n' +
str.substr(6, 17));

alert(str + '\n' + 
str.substring(2, 5) + '\n' +
str.substring(6, 16));

alert(str + '\n' + 
str.slice(2, 5) + '\n' +
str.slice(6, 16));


//Задание 5
var str = "я учу javascript!";
alert('Позиция подстроки ' + str.indexOf('учу'));


//Задание 6
var str = 'я учу javascript!';
var n = [6, str.length, 20];

for(var i=0; i < n.length; i++){
    if (str.length > n[i]) {
        var result = str.substr(0, n[i]) + '...';
    } else {
        var result = str;
    }
    alert(result);
}


//Задание 7
var str = 'Я-учу-JavaScript!';

alert (str.replace(/-/g, '!'));


//Задание 8
var str = 'Я учу JavaScript!'
var arr = str.split(' ');

for(var i=0; i < arr.length; i++){
    arr[i];
}
alert('Слова строки массивом: ' + arr);


//Задание 9
var str = 'я учу javascript!';
var arr = str.split('');

for(var i=0; i<arr.length; i++){
    arr[i];
}
alert('Символы строки массивом: ' + arr);


//Задание 10
var date = '2025-12-31';
var newDate = date.replace(/-/g,'.'); 

alert(newDate.slice(8) + newDate.slice(4,-2) + newDate.slice(0,4));


//Задание 11
var a = ['я', 'учу', 'javascript', '!'];
alert(a.join('+'));


//Задание 12
var str = 'я учу javascript!';

var b = str.slice(0,1).toUpperCase();
var e = str.slice(1, str.length);

alert(b + e); 

//Задание 13
var str = 'я учу javascript!';
var arr = str.split(' ');

for (var i = 0; i < arr.length; i++) {
    arr[i] = arr[i].slice(0, 1).toUpperCase() + arr[i].slice(1);
}
alert(arr.join(' '));


//Задание 14
var str = 'var_test_text';
var arr = str.split('_');

for (var i = 1; i < arr.length; i++) {
    arr[i] = arr[i].substr(0, 1).toUpperCase() + arr[i].substring(1);
}
alert(arr.join(''));