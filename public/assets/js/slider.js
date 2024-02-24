export const slider = (d,imgsForCarrousel)=>{
  const $carouselImg = d.getElementById("carousel-img"),
    $prev = d.getElementById("prev"),
    $next = d.getElementById("next"),
    $btnsContainer = d.getElementById("carousel-btns"),
    $indexsContainer = d.getElementById("carousel-indexs"),
    pathImgs = "/public/assets/imgs"

    // Si no hay imagenes se pone esto
    if(!imgsForCarrousel.length) return $carouselImg.src = `${pathImgs}/no-imgs.png`
    $carouselImg.src =  `${pathImgs}/${imgsForCarrousel[0]}`
    const generateIndex = (array)=>{
      const $fragment = d.createDocumentFragment()
      if(array.length>1){
        $btnsContainer.classList.remove("one")
        $prev.classList.remove("none")
        $next.classList.remove("none")

        array.forEach((el,i)=>{
          const $circle = d.createElement("div")
          $circle.classList.add("circle") 
          if(i===0) $circle.classList.add("active")
          $fragment.appendChild($circle)
        })
        $indexsContainer.appendChild($fragment)    
      }
    }
    
    generateIndex(imgsForCarrousel)
    const $indexs = Array.from($indexsContainer.children)
    let i = 0
    
    $next.onclick = ()=>{
      if(i<imgsForCarrousel.length-1){
        $indexs[i].classList.remove("active")
        i++
        $carouselImg.src = `${pathImgs}/${imgsForCarrousel[i]}` 
        $indexs[i].classList.add("active")
      }
    }
    $prev.onclick = ()=>{
      if(i>0){
        $indexs[i].classList.remove("active")
        i--
        $carouselImg.src = `${pathImgs}/${imgsForCarrousel[i]}` 
        $indexs[i].classList.add("active")
      }
    }
    $indexs.forEach((el,index)=>{
      el.onclick = ()=>{
        $indexs[i].classList.remove("active")
        i = index
        $carouselImg.src = `${pathImgs}/${imgsForCarrousel[i]}` 
        el.classList.add("active")
      }
    })
}

