// Tipe Data Number
let phi, price, quantity

phi = 3.14
price = 1000
quantity = -2

// atau bisa dituliskan seperti ini:
// let ipk = 3.90
// let pricce = 1500

console.log('Nilai Phi = ' + phi)
console.log('Nilai Price =' , price)
console.log('Nilai Quantity =' , quantity)

//Tipe Data String
let nama, kota 

nama = 'Budi'
kota = "Jakarta"

console.log('Nama = ' +nama)
console.log('Kota =', kota)

// atau bisa ditulis seperti ini
// activity = "Hello World" / 'Hello World'
// console.log(activity)

// Boolean
let isMarried, isStudent

isMarried = true
isStudent = false

console.log('Status Married = ' + isMarried)
console.log('Status Student =', isStudent)

// Tipe Data Array
let fruits = [
    'Apple',
    ' Banana',
    ' Cherry'
]

console.log('Buah = ' + fruits)
console.log('Apple =' ,fruits[0])
console.log('Banana =' +fruits[1])
console.log('Cherry =' +fruits[2])

// manggil fungsifruit bisa pake + dan ,

fruits[1] = 'Mango'
console.log(fruits)

// Tipe Data Array 2 Dimensi
let students = [
    ['Budi', 'Jakarta'],
    ['Andi', 'Bandung'],
    ['Cici', 'Bekasi'],
    [0,3]
]

console.log(students)
console.log(students[0][0])
console.log(students[0][1])

console.log(students[1][0])
console.log(students[1][1])

console.log(students[2][0])
console.log(students[2][1])
