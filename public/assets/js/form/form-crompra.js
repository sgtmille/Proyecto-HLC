import { sendAlert } from "../functions/sendAlert.js"
export const buy = ($form,usuario=false,d=document)=>{
  $form.addEventListener("submit",e=>{
    e.preventDefault()
    if(!usuario) return sendAlert({
      title:"Error",
      text:"No has iniciado sesion"
    })
    const f = e.target
    const dni = f.dni.value
    const idProducto = f.id_producto.value
    const formData = new FormData()
    formData.append("dni",dni)
    formData.append("id_producto",idProducto)
    fetch("/api/compras",{
      method:"POST",
      body:formData
    })
    .then(res=>res.ok 
      ? sendAlert({
        title:"Exito!!",
        text:"Se ha realizado la compra",
        cb:()=>{
          f.reset()
          location.href = "/"
        }
      })
      : Promise.reject(res)
    )
    .catch(err=>
      sendAlert({
        title:"Upps...",
        text:"Ha ocurrido un error y no se ha podido realizar la compra"
    }))
  })
}