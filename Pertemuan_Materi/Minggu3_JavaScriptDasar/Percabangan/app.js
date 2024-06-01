let gender = "Perempuan"
// if, dan IF Else
if (gender === 'Laki-Laki'){
    console.log("Selamat Datang, Tuan!")
} else {
    console.log('Selamat Datang, Nyonya!')
}

// If Else If
let username, password;

username= "Admin";
password = "qwerty";

if (username === "Admin" && password === "qwerty") {
    console.log("Login Berhasil")
} else if (username == "Admin" && password !== "qwerty"){
    console.log("Pasword Salah")
} else {
    console.log("Tidak Dapat Login")
}

// Nested If Else
if (username === 'Admin'){
    if (password === 'qwerty'){
        console.log("Login Berhasil")
    }
    else{
        console.log("Pasword Salah")
    }
}else(
    console.log("User tidak Ditemuksn") 
)

if(username == 'Admin'){
    if(password == 'qwerty'){
        console.log("Berhasil Masuk")
    } else{
        console.log("Usename Salah")
    }
}else if(password == 'qwerty'){
    console.log("Password Salah")
}else{
    console.log("Gagal Masuk, Masukin yang benar dong!!!")
}