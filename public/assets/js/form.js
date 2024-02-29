import { formCreate } from "./form/form-create.js"
import { buy } from "./form/form-crompra.js"
import { hiddenToggle } from "./form/form-dinamic.js"
import { login } from "./form/form-login.js"

const d = document,
$prevPage = d.getElementById("prev-page"),
  usuario = localStorage.getItem("usuario"),
  $formCreate = d.getElementById("form-create"),
  $btnPass = d.querySelector(".btn-password"),
  $formLogin = d.getElementById("form-login"),
  $formBuy = d.getElementById("form-compra")

if($formCreate) formCreate($formCreate)
if($btnPass) hiddenToggle($btnPass)
if($prevPage) $prevPage.onclick =()=>history.back()
if($formLogin) login($formLogin)
if($formBuy) buy($formBuy,usuario)