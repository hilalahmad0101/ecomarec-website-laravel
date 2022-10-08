const sidebar = document.getElementById("side-bar")
const toggleof = document.getElementById("toggleof")
const menuIcon = document.getElementById("menuIcon")
const hidelogo = document.getElementById("hidelogo")
const movilng  = document.getElementById("movilng")
const movilng2  = document.getElementById("movilng2")

let toggle = true
menuIcon.addEventListener("click",()=>{
    if (toggle) {
        sidebar.style.left= "-100%"
        hidelogo.style.display = "block !important"
        movilng.style.paddingLeft = "0px"
        movilng2.style.paddingLeft = "0px"
        
        toggle = !toggle;
        

      } else {
        movilng.style.paddingLeft = "220px"
        movilng2.style.paddingLeft = "300px"

        hidelogo.style.display = "none !important"

        sidebar.style.left= "0%"
        

        
        
  
        toggle = !toggle;
      }

} )
toggleof.addEventListener("click",()=>{
    if (toggle) {


        movilng.style.paddingLeft = "220px"
        movilng2.style.paddingLeft = "300px"

        hidelogo.style.display = "none !important"

        sidebar.style.left= "0%"


        
        toggle = !toggle;

      } else {
      
        sidebar.style.left= "-100%"
        hidelogo.style.display = "block !important"
        movilng.style.paddingLeft = "0px"
        movilng2.style.paddingLeft = "0px"

        
        
  
        toggle = !toggle;
      }

} )


