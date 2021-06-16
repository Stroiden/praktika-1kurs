//Задание 1
var arr = [2, 1, 15, 5, 13, 76, 31];

first(arr);

function first(array){
    document.write(array.shift() + '<br>');

    if(array != 0) {
        first(array);
    }
}


//Задание 2
var num = 19;

function sumNine(n) {
    var arr = String(n).split('');
    var sum = 0;
    for (var i = 0; i < arr.length; i++){
        sum += Number(arr[i]);
    }
    if (sum > 9) {
        return sumNine(sum);  
    } else {
        return sum;
    }
}

alert(sumNine(num));


//Задание 3
for (var i = 1; i <= 100; i++) {
	document.write(i + '<br>');
}


//Задание 4
for (var i = 100; i >= 0; i--) {
	document.write(i + '<br>');
}


//Задание 5
for (var i = 0; i <= 100; i += 2) {
	document.write(i + '<br>');
}


//Задание 6
var arr = [];

for (var i = 0; i < 10; i++) {
	arr[i] = 'x';
}

alert('Массив заполненный иксами: ' + arr);


//Задание 7
var arr = [];

for (var i = 1; i <= 10; i++) {
	arr.push(i);
}

alert('Заполненный массив: ' + arr);


//Задание 8
var arr = [];

for (var i = 0; i < 10; i++) {
	arr.push(Math.random().toFixed(2));
}

alert('Массив заполненный дробными числами: ' + arr);


//Задание 9
var arr = [];

for (var i = 0; i < 10; i++) {
	arr.push(Math.round(Math.random() * 10) + 1);
}

alert('Массив заполненный рандомными числами: ' + arr);


//Задание 10
var arr = [1, 5, 9, 10, -1, -2];

for (var i = 0; i < arr.length; i++) {
	    if(arr[i] > 0 && arr[i] < 10) {
            document.write(arr[i]);
	}
}


//Задание 11
var arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

for (var i = 0; i < arr.length; i++) {
	if(arr[i] == 5) {
		alert('Есть!');
		break;
	}
}


//Задание 12
var arr = [1, 2, 3, 4, 5];
var sum = 0;

for (var i = 0; i < arr.length; i++) {
	sum += arr[i];
}

alert('Сумма элементов массива ' + arr + ' = ' + sum);


//Задание 13
var arr = [1, 2, 3, 4, 5];
var sum = 0;

for (var i = 0; i < arr.length; i++) {
	sum += arr[i] * arr[i];
}

alert('Сумма квадратов элементов массива ' + arr + ' = ' + sum);


//Задание 14
var arr = [1, 2, 3, 7, 6, 9];
var sum = 0;

for (var i = 0; i < arr.length; i++) {
	sum += arr[i];
}
var result = sum / arr.length;

alert('Среднее арифметическое элементов массива ' + arr + ' = ' + result);