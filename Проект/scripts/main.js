const login = document.getElementsByName('login') [0]
const password = document.getElementsByName('password') [0]
const error = document.querySelector('.error')
/*if (login.value === "test") {
alert("test")
}
document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var username = document.getElementById('login').value;
    var password = document.getElementById('password').value;
    // Дальше можно использовать полученные значения
    console.log('Username: ' + username + ', Password: ' + password);
  });
*/
document.querySelector("button").addEventListener("click", event => {
  //alert(login.value)
  if (login.value === "" || password.value === "") {error.innerHTML = "Поля не заполнены"; event.preventDefault();}
})
