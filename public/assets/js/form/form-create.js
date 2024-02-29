export const formCreate = ($form,d=document)=>{
  $form.addEventListener("submit",e=>{
    e.preventDefault()
    const f = e.target
    const name = f.nombre.value
    const lastname = f.apellido.value
    const email = f.email.value
    const dni = f.dni.value
    const password = f.password.value
    const pais = f.pais.value
    if(!name,!lastname,!email,!dni,!password,!pais) return alert("Los campos son requeridos")

    const formData = new FormData()
    formData.append("nombre",name)
    formData.append("apellido",lastname)
    formData.append("email",email)
    formData.append("dni",dni)
    formData.append("password",password)
    formData.append("pais",pais)
    fetch("/api/usuario",{
      method:"POST",
      body:formData
    })
    .then(res=>res.ok ? alert("Se han enviado los datos") : Promise.reject(res))
    .catch(err=>alert("No se pudo enviar el formulario!"))
  })
}
