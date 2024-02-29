import { formLogin } from "./form-login.js"
import { hiddenToggle } from "./form-dinamic.js"
const d = document,
  $formLogin = d.getElementById("form-login"),
  $btnPass = d.querySelector(".btn-password")

if($formLogin) formLogin($formLogin)
if($btnPass) hiddenToggle($btnPass)