// 1. Operator Aritmatika
// melakukan perhitungan

// Pertambahan
let pertambahan = 10 + 10
console.log(pertambahan) //20

// Pengurangan
let pengurangan = 10 - 10
console.log(pengurangan) //0

// Perkalian
let perkalian = 10 * 10
console.log(perkalian) //100

// Pembagian
let pembagian = 10 / 10
console.log(pembagian) //1

// Modulus 
let modulus = 10 % 10
console.log(modulus) //0

let results = 10 + 15 * 2 / 2
console.log(results) //25


// 2. Operator Perbandingan
// membandingkan dua buah operator/lebih, mengembalikan nilai true/false

//lebih dari
let lebihDari = 10 > 10
console.log(lebihDari) //false
let hasil = 10 > 5
console.log(hasil) //true

//kurang dari
let kurangDari = 10 < 10
console.log(kurangDari) //false
let mines = 5 < 10
console.log(mines) //true

//lebih dari sama dengan
let lebihDariSamaDengan = 10 >= 10
console.log(lebihDariSamaDengan) //true

// kurang dari sama dengan
let kurangDariSamaDengan = 10 <= 10
console.log(kurangDariSamaDengan) //true

//sama dengan
let samaDengan = 10 == 10
console.log(samaDengan) //true


// 3. Operator Logika
//membandingkan 2 buah kondisi logika nilai bertipe boolean

// AND
let and = true && true
console.log(and) //true
let bool = true && false 
console.log(bool) //false

// OR
let or = true || false 
console.log(or) //true
let bole = true || true || false
console.log(bole) //true

// NOT
let not = !true
console.log(not) //false

//Campur
let lean = true && false || true
console.log(lean) //true

// 4. Operator String/Ternary
//melakukan penyambutan string, mneggunakan simbol +

let namaDepan, namaBelakang, namaLengkap
namaDepan = 'Lee'
namaBelakang = 'Juyeon'
namaLengkap = namaDepan + " " + namaBelakang
console.log(namaLengkap)

console.log("Halo, cici's boyfriend is " +namaLengkap)

let students = ["Lavanya", "Telukaram", "Anasera", "Dermaga"];
console.log(students[0]+" dan "+students[2]+" merupakan teman dekat");
let exam = students[3] +" mendapatkan nilai " + 9*9;
console.log(exam)

// 5. Operator Spread
// menggabungkan array, menggunakan simbol (...)

let angka = [1, 2, 3, 4, 5]
let angka2= [...angka, 6, 7, 8, 9, 10]
console.log(angka2) //> (10) [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]

let male = ['Baswara','Alugara','Artasena'];
console.log(male); // >(3) ['Baswara', 'Alugara', 'Artasena']
let female = ["Jenar","Arumi","Cendana"];
console.log(female); // >(3) ['Jenar', 'Arumi', 'Cendana']
let murid = [...male,...female];
console.log(murid); // > (6) ['Baswara', 'Alugara', 'Artasena', 'Jenar', 'Arumi', 'Cendana']


