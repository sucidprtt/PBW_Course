//  If Else If
let username, password;
username = "Admin";
password = "qwerty";

const isSuccess = true;
const isFailed = false;

if(username ==="Admin" && password === "qwerty"){
    console.log(isSuccess);
}else if(username === "Admin" && password !== "qwerty"){
    console.log(isFailed);
}else if(username !== "Admin" && password === "qwerty"){
    console.log(isFailed);
}else{
    console.log(isSuccess);
}

// Nested  If Else
if(username == 'Admin'){
    if(password == 'qwerty'){
        console.log("Berhasil Masuk")  // console.log(isSuccess)
    }else{
        console.log("Password Salah") // console.log(isFailed)
    }
}else if(password == 'qwerty'){
    console.log("Username Salah") // console.log(isFailed)
}else{
    console.log("Gagal Masuk, Masukin yang benar dong!!!") // console.log(isFailed)
}

//Switch
let nilai = 90;
switch(nilai){
    case 100:
        console.log("Nilai Sempurna")
        break;
    case 90:
        console.log("Nilai Bagus")
        break;
    case 80:
        console.log("Nilai Cukup")
        break;
}

let grade = 'D';
switch(grade){
    case 'A':
        console.log("Very good");
        break;
    case 'B':
        console.log("Good");
        break;
    case 'C':
        console.log("Enough");
        break;
    case 'D':
        console.log("Very Enough");
        break;
    default:
        console.log("No Grade");
        break;
}

//Operator Conditional
let age = 18
let result = (age >= 18) ? "Eligible for voting" : "Not eligible for voting";
console.log(result)

let usia = 17
let hasil =(usia >= 18) ? "Adult" : "Underage"
console.log(hasil) //Underage

//For
for (let k = 0; k < 10; k++) {
    console.log("Halo Javascript"); 
}

for(let c = 0; c <= 5; c++){
    console.log(c)
}

//While
let i = 50;
while(i > 0){
    console.log(i + " * 5 = " + i*5);
    i = i - 5;
}

let p = 0
while (p <= 5){
    console.log(p)
    p++
}

//Do While
let f = 6
do {
    console.log(f)
    f++
}while (f <= 5 )

let j = 1;
do{
    console.log(j+" kuadrat = "+j*j);
    j = j + 1;
}while(j <= 10)

//For of
let myArray = ["Luke", "Hans", "Ray", "George"]
for (let t of myArray)
console.log(t)


let faculties = [
    "Fakultas Ilmu Komputer",
    "Fakultas Hukum",
    "Fakultas Pertanian",
    "Fakultas Ilmu Sosial dan Ilmu Politik",
    "Fakultas Teknik"
   ];

   for(let faculty of faculties){
    console.log(faculty);
   }

// Break dan Continue
for(let i = 1; i<=10; i++){
    if(i === 5){
    break;
    }
    console.log(i);
}
   for(let i = 1; i<=10; i++){
    if(i === 6){
    continue;
    }
    console.log(i);
}

// Nested Loop
let weeks = 3;
let days = 7;
for (let i = 1; i <= weeks; ++i) {
        console.log("Week: " + i);
    for (let j = 1; j <= days; ++j) {
            console.log(" Day: " + j);
        }
}


