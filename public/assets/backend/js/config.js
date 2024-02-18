function showLoader(){
    document.getElementById("loader").classList.remove("d-none");
}

function hideLoader(){
    document.getElementById("loader").classList.add("d-none");
}



function setToken(token){
  localStorage.setItem("token",`Bearer ${token}`)
}

function getToken(){
  return localStorage.getItem("token")
}




function HeaderToken(){
  let token=getToken();
  return  {
       headers: {
           Authorization:token
       }
   }
}






















function errorToast(msg){
    Toastify({
        text: msg,
        duration: 3000,
        destination: "https://github.com/apvarun/toastify-js",
        newWindow: true,
        close: true,
        gravity: "bottom", // `top` or `bottom`
        position: "center", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
          background: "#eb3a13",
        },
        onClick: function(){} // Callback after click
      }).showToast();
}

function successToast(msg){
    Toastify({
        text: msg,
        duration: 3000,
        destination: "https://github.com/apvarun/toastify-js",
        newWindow: true,
        close: true,
        gravity: "bottom", // `top` or `bottom`
        position: "center", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
          background: "#008000",
          color:"white"
        },
        onClick: function(){} // Callback after click
      }).showToast();
}