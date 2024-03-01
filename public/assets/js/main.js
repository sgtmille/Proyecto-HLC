import { slider } from "./functions/slider.js"
import { showFullscreenImg } from "./functions/fullscreen.js"
import { mobileMenu } from "./functions/mobile-menu.js"
import { auth } from "./functions/auth.js"
const d = document,
  $fullscreenContainer = d.getElementById("fullscreen-container"),
  usuario = localStorage.getItem("usuario"),
  $prevPage = d.getElementById("prev-page"),
  $nav = d.getElementById("nav"),
  $mainImage = document.getElementById('mainImage')

if(usuario) auth($nav,usuario)
if($nav) mobileMenu($nav)
if($mainImage) slider($mainImage,imgs)
if($fullscreenContainer) showFullscreenImg($fullscreenContainer)
if($prevPage) $prevPage.onclick =()=>history.back()
 

