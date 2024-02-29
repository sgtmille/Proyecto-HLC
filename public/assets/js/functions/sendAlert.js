export const sendAlert = (obj={},d=document)=>{
  const $templateAlert = d.getElementById("template-alert").content,
    alert = $templateAlert.cloneNode(true)

  let {title="Warning!!!",text="lorem ipsum",cb=false} = obj
    
  alert.querySelector(".title").textContent = title
  alert.querySelector(".text").textContent = text
  alert.querySelector(".btn-close").onclick = ()=>d.body.removeChild(d.body.querySelector(".alert"))
  alert.querySelector(".cb").onclick = ()=>{
    if(cb) cb()
    d.body.removeChild(d.body.querySelector(".alert"))
  }
  d.body.appendChild(alert)
}