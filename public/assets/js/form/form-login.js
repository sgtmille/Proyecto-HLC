import { sendAlert } from "../functions/sendAlert.js"

export const login = ($form,d=document)=>{
  $form.addEventListener("submit",e=>{
    e.preventDefault()
    const f = e.target
    const name = f.usuario.value
    const password = f.password.value
    fetch(`/login/${name}/${password}`)
    .then(res=>{
      if(!res.ok) Promise.reject(res)
      localStorage.setItem("usuario",name)
      location.href= "/"
    })
    .catch(err=>sendAlert({
      title:"Upss...",
      text:"No se ha podido iniciar sesion revisa tu contraseña y usuario"
    }))
  })
}
