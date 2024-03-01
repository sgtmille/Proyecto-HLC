export const slider = ($mainImage,imgsForCarrousel,d=document)=>{
  const $imagesCarousel = document.getElementById('imagesCarousel'),
    pathImgs = "/assets/imgs"

  // Si no hay imagenes se pone esto
  if(!imgsForCarrousel.length) return $mainImage.src = `${pathImgs}/no-imgs.png`

  const $fragment = d.createDocumentFragment()
  imgsForCarrousel.forEach((el,i)=>{
    const path = `${pathImgs}/${el}`
    const $li = d.createElement("li")
    const $img = d.createElement("img")
    if(!i){
      $li.classList.add("selected")
      $mainImage.src = path
    } 
    $img.src = path
    $li.appendChild($img)
    $fragment.appendChild($li)
  })
  $imagesCarousel.appendChild($fragment)
  
  $imagesCarousel.addEventListener('click', e=> {
    if(e.target.matches("img")) {
      $imagesCarousel.querySelector(".selected").classList.remove("selected")
      e.target.parentElement.classList.add('selected');
      $mainImage.src = e.target.src;
    }
  })
}

