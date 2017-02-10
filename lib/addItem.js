let arr = [1, 2, 3, 4, 5];

let newNum = 7;

const addItem = (list, num) => [...list, num];

// This also works
// const addItem = (list, num) => return { [...list,num] };

const addItem2 = (list, num) => list.concat(num);

let arr2 = addItem(arr, newNum);
let arr3 = addItem2(arr2, newNum);
console.log(arr);
console.log(arr2);
console.log(arr3);