 <!-- Modal -->
  <div class="modal fade" id="delete-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
            <h3 class=" mt-3 text-warning">Delete !</h3>
            <p class="mb-3">Once delete, you can't get it back.</p>
            <input class="form-control d-none" id="deleteID" name="id"/>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" id="delete-modal-close" data-dismiss="modal">Close</button>
          <button type="button" onclick="itemDelete()" class="btn btn-danger">DELETE</button>
        </div>
      </div>
    </div>
  </div>



  <script>
    async  function  itemDelete(){
           try {
               let id=document.getElementById('deleteID').value;
               document.getElementById('delete-modal-close').click();
               showLoader();
               let res=await axios.post("/dashboard-delete-job",{id:id},HeaderToken())
               hideLoader();
               if(res.data['status']==="success"){
                   successToast(res.data['message'])
                   await joblist();
               }
               else{
                   errorToast(res.data['message'])
               }
           }catch (e) {
               console.log(e);
           }
    }
</script>