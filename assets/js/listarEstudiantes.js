var select

function selected(categoria) {

    select=categoria
    localStorage.setItem("Categoria",select)
  //  alert(select)
}

function listar(){
    var recuperar=localStorage.getItem("Categoria")
   
    
    return recuperar

}

