<div class="modal fade" id="access-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <h3 class=" mt-3 text-warning">Access Your Job</h3>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">ID</label>
                <input type="text" class="form-control" id="accessId" name="id">
              </div>
            <div class="mb-3">
                <label for="exampleFormControlInput3" class="form-label ms-4" id="">Access</label>
                  <input type="radio" class="ms-3" id="pending"  name="adminAccess" value="0">Pending
                  <input type="radio" class="ms-3" id="success"  name="adminAccess" value="1">Success
              </div>
          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" id="delete-modal-close" data-dismiss="modal">Close</button>
          <button type="button" onclick="accessPoint()" class="btn btn-danger">Access</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    fillFormAccess();
    async function fillFormAccess(){
      let id = document.getElementById("accessId").value;
      let data = {id:id}
        console.log(data);
        let res = await axios.post("/dashboard-admin-access",data,HeaderToken())
        console.log(res.data["message"]["adminAccess"]);

        if(res.data["message"]["adminAccess"] === "0"){
          document.getElementById("pending").value = res.data["message"]["adminAccess"]
          document.getElementById("pending").checked = true;
        }

        if(res.data["message"]["adminAccess"] === "1"){
          document.getElementById("success").value = res.data["message"]["adminAccess"];
          document.getElementById("success").checked = true;
        }  
    }



  // function accessPoint(){
  //   let success = document.getElementById("success").value;
  //   let pending = document.getElementById("pending").value;
  //   if(success){
  //     console.log("ni");
  //   }else(pending){
  //     console.log("ace");
  //   }

    



  // }


 
  </script>