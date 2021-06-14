//Задание 1
var arr = [];
var str = '';

for (var i = 0; i <= 5; i++) {
    str += 'x';
    arr.push(str);
}
alert(arr);


//Задание 2
var arr = [];
var str = '';

for (var i=1; i<=5; i++) {
    str = '';
    for (var j=1; j<=i; j++) {
        str += i;
    }
        arr.push(str);
}
alert(arr);


//Задание 3
var arr = arrayFill('x', 5);

function arrayFill(a,b) {
    arr = []
    for(var i = 0; i<=b; i++){
        arr.push(a);
    }
    return arr;
}

alert (arr);



//Задание 4
var arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];
var sum = 0;

for (var i = 0; i < arr.length; i++) {
    sum += arr[i];
    if (sum > 10) {
        break;
    }
}
alert('Минимальное колличество элементов, сумма которых равнв 10ти: ' + i+1);


//Задание 5
var a = arr;

function arr(a) {
    var b = [];
    for (var i = a.length-1; i >= 0; i--){
        b.push(a[i]);
    }
    return b;
}

alert(arr([1, 2, 3, 4]));


//Задание 6
var arr = [[1, 2, 3], [4, 5], [6]];
var sum = 0;

for (var i = 0; i < arr.length; i++) {
    for (var j = 0; j < arr[i].length; j++) {
        sum += arr[i][j];
    }
}
    
alert('Сумма всех элементов двумерного массива = ' + sum);


//Задание 7
var arr = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
var sum = 0;

for (var i = 0; i < arr.length; i++) {
    for (var j = 0; j < arr[i].length; j++) {
        for (var l = 0; l < arr[j].length; l++){
            sum += arr[i][j][l]; 
        }
    }    
}

alert('Сумма трехмерного массива = ' + sum);