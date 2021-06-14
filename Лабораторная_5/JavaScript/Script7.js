// Задание 1
var arr1 = [1, 2, 3];
var arr2 = [4, 5, 6];
var arr4 = [1, 2, 3];

var arr3 = arr1.concat(arr2);
alert('Склеенный массив: ' + arr3);


//Задание 2
alert('Перевернутый массив: ' + arr1.reverse());


//Задание 3
arr1.push(4, 5, 6);
arr4.unshift(4, 5, 6);

alert('Добавление элементов в конец: ' + arr1 + '\nДобавление элементов в начало: ' + arr4); 


//Задание 4 
var arr5 = ['js', 'css', 'jq'];

alert('Первый элеменит массива: '+ arr5 + ' = ' + arr5.shift() + '\nПоследний элемнт массива ' + ' = ' + arr5.pop());


//Задание 5
var arr6 = [1, 2, 3, 4, 5];
var arr7 = arr6.slice(0, 3);
var arr8 = arr6.slice(3,5);

alert('Новый массив от массива ' + arr6 + ' : ' + arr7 + '\nНовый массив от массива ' + arr6  + ' : ' + arr8);


//Задание 6
var arr9 = [1, 2, 3, 4, 5];

arr9.splice(1,2);

alert(arr9);


//Задание 7
var arr10 = [1, 2, 3, 4, 5];

arr10.splice(0,1);
arr10.splice(3,1);

alert(arr10);


//Задание 8
var arr11 = [1, 2, 3, 4, 5];

arr11.splice(3,0, 'a', 'b', 'c');

alert(arr11);


//Задание 9
var arr12 = [1, 2, 3, 4, 5];

arr12.splice(1,0, 'a', 'b');
arr12.splice(6,0, 'c');
arr12.splice(8,0, 'е');

alert(arr12);


//Задание 10
var arr13 = [3, 4, 1, 2, 7];

alert('Массив псле сортировки:' + arr13.sort());


//Задание 11
var obj = {js:'test', jq: 'hello', css: 'world'};

alert('Ключи объекта: ' + Object.keys(obj));