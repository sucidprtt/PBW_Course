// Contoh Function
function sapaan(){
    console.log("Good Morning");
    console.log("Good Afternoon");
    console.log("Good Night");
}
// Cara Memanggil Function
sapaan()

// Return Function
function greet(){
    return "Good Morning";
}
   let regard = greet();
   console.log(regard);
   console.log(greet());

// Return Function Array
function hobbies(){
    const listHobbies =
["Footbal","Swimming","Reading","Writing","Coding"];
    return listHobbies;
}
let hobby = hobbies();
for (const iterator of hobby) {
    console.log(iterator);
}

// Function Parameter
function sum(number1, number2){
    let results = number1 + number2;
    return results;
}
console.log(sum(5,5));

// Spread Operator
function average(...index){
    let jumlah = index.length;
    let hasil = 0;
    for(const i of index){
    hasil += i;
    }
    return hasil/jumlah;
}
   let x = average(4,8,3,7);
   console.log(x);


// Arrow Function
// Tanpa Parameter
const nyapa = () =>{
    console.log('Good Morning');
}
   nyapa();

// Dengan Parameter
const jml = (x, z) => {
    let hsl = x + z;
    return hsl;
   }
   let hsl1 = jml(5,10);
   console.log(hsl1);
   