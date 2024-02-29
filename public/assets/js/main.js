import { slider } from "./slider.js"
import { showFullscreenImg } from "./fullscreen.js"
import { mobileMenu } from "./mobile-menu.js"
const d = document,
  $fullscreenContainer = d.getElementById("fullscreen-container"),
  $prevPage = d.getElementById("prev-page"),
  $nav = d.getElementById("nav")

if($nav) mobileMenu($nav)
if(d.getElementById("img-carousel")) slider(imgs)
if($fullscreenContainer) showFullscreenImg($fullscreenContainer)
if($prevPage) $prevPage.onclick =()=>history.back()

// const test = ()=>{
//   const formData = new FormData()
//   formData.append("namee","Alvaro")
//   fetch("api/usuario",
//   {
//     method:"POST",
//     body:formData
//   })
//   .then(res=>res.ok ? console.log(res.statusText) : Promise.reject(res))
//   .catch(err=>console.log(err))
// }
// test()