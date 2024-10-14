document.getElementById('loginForm').addEventListener('submit', function(event){
    event.preventDefault();

    const correctUsername = "Tsaqib";
    const correctPassword = "Tsaqib";

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value; 

    if(username === correctPassword && password === correctPassword){
        alert("login berhasil");
        window.location.href = '/index';
    }else{
        alert("username atau password tidak sesuai");
    }
});