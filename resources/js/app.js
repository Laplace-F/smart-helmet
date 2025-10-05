import './bootstrap';
function handleSubmit(e){
e.preventDefault();
const email = document.getElementById('email').value.trim();
const password = document.getElementById('password').value;


// contoh validasi sederhana
if(!email || !password){
alert('Mohon isi email dan password.');
return false;
}


// Di sini Anda bisa panggil API atau melakukan pemeriksaan
console.log('Login attempt', {email});
// Simulasi sukses
alert('Login berhasil (simulasi). Email: ' + email);
return false;
}