function showLoader(){
    document.getElementsByClassName("progress-bar").classList.remove("d-none");
}

function hideLoader(){
    document.getElementsByClassName("progress-bar").classList.add("d-none");
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