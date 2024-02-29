export const auth = ($nav,usuario)=>{
  $nav.querySelector(".user").textContent = usuario
  const $login = $nav.querySelector(".login")
  $login.textContent = "Logout"
  $login.href = "#"
  $login.onclick = ()=>{
    localStorage.removeItem("usuario")
    location.reload()
  }
}