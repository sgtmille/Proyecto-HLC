export const slider = (imgsForCarrousel,d=document)=>{
  const $carouselImg = d.getElementById("carousel-img"),
    $btnsContainer = d.getElementById("carousel-btns"),
    $indexsContainer = d.getElementById("carousel-indexs"),
    pathImgs = "/assets/imgs"

    // Si no hay imagenes se pone esto
    if(!imgsForCarrousel.length) return $carouselImg.src = `${pathImgs}/no-imgs.png`

}

