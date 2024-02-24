export const showFullscreenImg = (d,$fullscreenContainer)=>{
  const $fullscreenImg = d.getElementById("fullscreen-img"),
    $btnClose = d.getElementById("close-fullscreen-container")

  $btnClose.onclick = ()=>{
    d.body.classList.remove("no-scroll")
    $fullscreenContainer.classList.add("none")
  }
  
  d.addEventListener("click",e=>{
    if(e.target.matches(".showFullscreen")){
      $fullscreenImg.src = e.target.src
      d.body.classList.add("no-scroll")
      return $fullscreenContainer.classList.remove("none")
    }
    if(e.target.matches(".fullscreen-container")){
      d.body.classList.remove("no-scroll")
      return $fullscreenContainer.classList.add("none")
    }
  })
}