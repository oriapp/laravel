// function fizzBuzz(first, until) {
//     if (first > until || typeof first != `number` || typeof until != `number`) return;


//     if (first % 5 == 0 && first % 3 == 0) console.log(`Fizz Buzz`)
        
//     else if (first % 5 == 0) console.log(`Fizz`)
        
//     else if (first % 3 == 0) console.log(`Buzz`)
        
//     else console.log(first)

//     fizzBuzz(first + 1, until) 
// }
  


// fizzBuzz(0,100)


// const cleanNames = (names) => names.filter((name) => name.length > 2);

// let res = cleanNames(["ab", "moshe", "shimi", "dj", "h"]);
// console.log(res);


// let funki = (numbersArray, num) => numbersArray.map(x => x * num)


// console.log(funki([10, 2, 1], 2))


const cool = (sign, ...rest) => {
    return `${sign}${rest}`;
}

console.log(cool("!", "a", "b", "c", "d", "u"));