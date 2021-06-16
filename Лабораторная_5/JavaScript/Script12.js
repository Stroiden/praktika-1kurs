//Зaдание 1
var a = 12;

var num = isNumberInRange(a);
alert(num);

/*
функция определяет находится ли число в диапазоне между 0 и 10
 */
function isNumberInRange(num){
    if (num > 0 && num < 10){
        return true;
    } else {
        return false;
    }
}


//Задание 2
var oldArr = [2, -10, 1, 12];

/*
функция, которая вохвращает новый массив, с элементами
бильше 0 и меньше 10
*/
function getNewArray(arr){
    var newArr = [];
    for (var i = 0; i < arr.length; i++){
        if(isNumberInRange(arr[i])) {
            newArr.push(arr[i]);
        }
    }
    return newArr;
}

alert(getNewArray(oldArr));


//Задание 3
var num = 123;

function getDigitsSum(num){
    var sum = 0;
    var dts = getDigits(num);

    for (var i = 0; i < dts.length; i++){
        sum += Number(dts[i]);
    }
    return sum;
}

function getDigits(num) {
    return String(num).split('');
}

alert(getDigitsSum(num));


//Задание 4

function summYear(){
    var arrYear = [];

    for(var i = 1; i <= 2020; i++){
        if (getDigitsSum(i) == 13){
            arrYear.push(i);
        }
    }
    return arrYear;
}

alert(summYear());


//Задание 4
var arr = [2, 1, 17, 6, 12, 5];
var result = [];



function isEven(a){
    if(a%2 == 0){
        return true;
    } else {
        return false;
        }
    }


//Задание 5

    for (var i = 0; i < arr.length; i++) {
        if (isEven(arr[i])) {
            result.push(arr[i]);
    }
}

alert(result);

//Задание 6
var x = 24;

function getDivisors(num){
    var arrDel = [];
    for (var i = 0; i <= num; i++){
        if(num%i == 0){
            arrDel.push(i);
        }
    }
    return arrDel;
}

alert(getDivisors(x));


//Задание 7
var strUp = 'заглавный символ строки';

function ucFirst(strUp) {
    var strArr = strUp.split(' ');
    var newArr = [];

    for (var i = 0; i < strArr.length; i++) {
        newArr.push(strArr[i][0].toUpperCase() + strArr[i].slice(1));
    }

    return newArr.join(' ');
}

alert(ucFirst(strUp));

//Задание 8

var str = ('var_Text_Hello');

function strConvert(str) {
var arr = str.split('_');
 for (var i = 1; i < arr.length; i++) {
  arr[i] = (arr[i]);
 }
return arr.join('');
}

alert(strConvert(str));



//Задание 9
var str = '123456';

function revNumber(str) {
    var arr = str.split('');
    var newArr = [];
    for (var i = 1; i < arr.length; i += 2) {
        newArr.push(arr[i] + arr[i - 1]);
    }
    return newArr.join('');
    }

alert(revNumber(str));