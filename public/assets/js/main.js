import { slider } from "./slider.js"
import { showFullscreenImg } from "./fullscreen.js"
const d = document,
  $fullscreenContainer = d.getElementById("fullscreen-container"),
  $prevPage = d.getElementById("prev-page"),
  $nav = d.getElementById("nav"),
  $btnNav = d.getElementById("mobile-menu")

if($btnNav){
  const $navLists = d.querySelectorAll(".sub-menu-container"),
    $close = d.getElementById("mobile-menu-close"),
    $show = d.getElementById("mobile-menu-show")
  addEventListener("resize",e=>{
    return window.innerWidth>768 
    ? $navLists.forEach(el=>el.classList.add("hover-list"))
    : $navLists.forEach(el=>el.classList.remove("hover-list"))
  })

  $btnNav.onclick = ()=>{
    d.body.classList.toggle("no-scroll")
    $nav.classList.toggle("--mobile-nav")
    $btnNav.classList.toggle("active")
    $show.classList.toggle("none")
    $close.classList.toggle("none")
    return $navLists.forEach(el=>el.classList.remove("hover-list"))
  }
  $nav.onclick = e=>{
    if(e.target.matches(".sub-menu-container > a")){
      e.preventDefault()
      const $parent = e.target.closest(".sub-menu-container")
      return $parent.querySelector(".sub-menu").classList.toggle("active")
    }
  }
}

if(d.getElementById("img-carousel")) slider(d,imgs)
if($fullscreenContainer) showFullscreenImg(d,$fullscreenContainer)
if($prevPage) $prevPage.onclick =()=>history.back()
