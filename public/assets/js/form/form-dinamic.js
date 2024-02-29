export const hiddenToggle = ($btn,d=document)=>{
  $btn.onclick = ()=>{
    const $parent = $btn.closest(".form-group") || $btn.closest(".box-container")
    const $input = $parent.querySelector("input")
    $input.type = $input.type=="password" ? $input.type="text" : $input.type="password"
  }
}