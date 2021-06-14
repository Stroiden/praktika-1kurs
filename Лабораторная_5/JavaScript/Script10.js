//Задание 1
var str = '';
for(var i = 1; i <= 9; i++) {
    str += i;
}

alert(str);


//Задание 2
var str1 = '';
for(var i = 9; i >= 1; i--) {
    str1 += i;
}

alert(str1);


//Задание 3
var str2 = '';
for(var i = 1; i <= 9; i++) {
    str2 += '-' + i;
}
   
alert(str2 + '-');


//Задание 4
var str = '';

for (var i = 0; i < 20; i++) {
    str += 'x'
document.write(str + '<br>');
}


//Задание 5
for (var i = 1; i <= 9; i++) {
    for (var j = 1; j <= i; j++) {
        document.write(i);
    }
    document.write('<br>');
}


//Задание 6
var str = '';
for (var i = 1; i <=5; i++) {
    str += 'xx'
document.write(str + '<br>');
}