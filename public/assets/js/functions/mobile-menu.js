export const mobileMenu = ($nav,d=document)=>{
  const $navLists = d.querySelectorAll(".sub-menu-container"),
    $close = d.getElementById("mobile-menu-close"),
    $show = d.getElementById("mobile-menu-show"),
    $btnNav = d.getElementById("mobile-menu")
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