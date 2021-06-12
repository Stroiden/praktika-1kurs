//Задание 1
var i = 1; 

while (i <= 100) {
    document.write(i + '<br>');
   i++;
}

for (var i = 1; i <= 100; i++){
    document.write(i + '<br>');
}


//Задание 2
var i = 11;

while (i <= 33){
    document.write( i + '<br>');
i++;
}

for(var i = 11; i <= 33; i++){
    document.write(i + '<br>');
}


//Задание 3
var i = 0;
while (i <= 100){
    document.write( i + '<br>');
i += 2;
}

for (var i = 0; i <= 100; i +=2){
    document.write (i + '<br>')
}

//Задание 4
var i = 1;
var b = 0;
while(i <= 100) {
    b = b + i;
    i++;
}
alert('Сумма чисел от 1 до 100 циклом while = ' + b);

for (var i = 1, b = 0; i<= 100; i++) {
    b = b + i;
}
alert('Сумма чисел от 1 до 100 циклом for = ' + b);


//Задание 5
var arr = [1,2,3,4,5];

for (var i = 0; i < arr.length; i++) {
    alert('Элементы массива ' + arr + ': ' + arr[i]); 
}


//Задание 6
var arr = [1, 2, 3, 4, 5];
var result = 0;

for(var i = 0; i < arr.length; i++) {
    result += arr[i];
}
alert('Сумма всех элементов массива ' + arr + ': ' + result);


//Задание 7
var obj = {green: 'зеленый', red: 'красный', blue: 'голубой'};

for (key in obj){
    alert (key);
    alert (obj[key]);
}


//Задание 8
var obj = {Коля: '200', Вася: '300', Петя: '400'};

for (var key in obj){
    alert (key + ' - зарплата ' + obj[key] + ' долларов');
}


//Задание 9
var arr = [2, 5, 9, 15, 0, 4];
for(i = 0; i < arr.length; i++) {
    if(arr[i] > 3 && arr[i] < 10) {
        document.write(arr[i] + '<br>');
    }
}


//Задание 10
var arr = [1, 3, 4, -1, -5, 9];
var sum = 0;

for (i = 0; i < arr.length; i++) {
    if (arr[i] >= 0) {
        sum += arr[i];
    }
}
alert('Сумма положительных элементов ' + sum);



//Задание 11
var arr = [1, 2, 5, 9, 4, 13, 4, 10];

for (var i = 0; i < arr.length; i++) {
    if (arr[i] == 4) {
        alert('Есть!');
    break;
    }
}


//Задание 12
var arr = ['10', '20', '30', '50', '235', '3000'];

for (var i = 0; i < arr.length; i++) {
    if (arr[i][0] == '1' || arr[i][0] == '2' || arr[i][0] == '5') {
        alert('Числа начинающиеся на 1, 2 и 5 ' + arr[i]);
    }
}


//Задание 13
var arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
var str = '';

for (var i = 0; i < arr.length; i++) {
    str += '-' + arr[i];
}
document.write(str + '-' + '<br>');


//Задание 14
var days = ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'];

for(var i= 0; i < days.length; i++) {
    if (i == 5 || i == 6) {
        document.write('<b>' + days[i] + '</b><br>');
    } else {
        document.write(days[i] + '<br>');
    }
}


//Задание 15
var day = 4;

for (var i = 0; i < days.length; i++) {
    if (i == day) {
        document.write('<i>' + days[i] + '</i><br>');
    } else {
        document.write(days[i] + '<br>');
    }
}


//Задание 15
var n = 1000;
var num = 0;

while (n > 50) {
    num++;
    n /= 2;
}
alert(n);
alert(num);
