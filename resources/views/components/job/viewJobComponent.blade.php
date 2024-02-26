 <!-- Modal -->
 <div class="modal fade w-100" id="view-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="">VIEW JOB</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
            <input class="form-control d-none" id="viewId" name="id"/>
            <section class="table">
              <table class="table table-striped">
                  <tr>
                    <th scope="col">Company Name</th>
                    <td scope="col"><span id="companyName"></span></span></td>
                  </tr>

                  <tr>
                    <th scope="col">Job  Title</th>
                    <td scope="col"><span id="jobTitle"></span></td>
                  </tr>

                  <tr>
                    <th scope="col">Job  Salary</th>
                    <td scope="col"><span id="jobSalary"></span></span></td>
                  </tr>

                  <tr>
                    <th scope="col">Job  Location</th>
                    <td scope="col"><span id="jobLocation"></span></td>
                  </tr>

                  <tr>
                    <th scope="col">Job  Publish Date</th>
                    <td scope="col"><span id="jobDate"></span></td>
                  </tr>

                  <tr>
                    <th scope="col">Job  Skill</th>
                    <td scope="col"><span id="jobSkill"></span></td>
                  </tr>

                  <tr>
                    <th scope="col">Job  Status</th>
                    <td scope="col"><span id="jobStatus"></span></td>
                  </tr>
             
              </table>
            </section>
        </div>
      </div>
    </div>
  </div>


  <script>
    async function viewData(viewId){
      try{
        let id = document.getElementById("viewId").value = viewId;
        let data = {id:id}
        console.log(id);
        let res = await axios.post("/dashboard-view-job",data,HeaderToken())
        console.log(res.data["data"]["companyName"])
        document.getElementById("companyName").innerText = res.data["data"]["companyName"];
        document.getElementById("jobTitle").innerText = res.data["data"]["jobTitle"];
        document.getElementById("jobSalary").innerText = res.data["data"]["minumumSalary"];
        document.getElementById("jobLocation").innerText = res.data["data"]["jobLocation"];
        document.getElementById("jobDate").innerText = res.data["data"]["jobPublishDate"];
        document.getElementById("jobSkill").innerText = res.data["data"]["jobSkill"];
        document.getElementById("jobStatus").innerText = res.data["data"]["jobEmployeeStatus"];
      }catch(e){
        console.log(e);
      }
    }
  </script>