<div class="modal fade" id="update-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog w-100">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="">Update JOB</h5>
          <button type="button" class="close" id="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
            <input class="form-control d-none" id="updateId" name="id"/>
            <section class="update-form">
                <form id="reset-form" onsubmit="event.preventDefault();">
                    <div class="row mb-3">
                      <label for="companyName" class="col-sm-2 col-form-label">Company Name</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control"  id="updatecompanyName" name="companyName" placeholder="Enter Your Company Name">
                      </div>
                    </div>
                    
                    <div class="row mb-3">
                      <label for="jobTitle" class="col-sm-2 col-form-label">Job Title</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="updatejobTitle" name="jobTitle" placeholder="Enter Your Job Title">
                      </div>
                    </div>
                    
                    <div class="row mb-3">
                      <label for="minumumSalary" class="col-sm-2 col-form-label">Minumum Salary</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="updateMinumumSalary" name="minumumSalary" placeholder="Enter Your Salary">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="jobLocation" class="col-sm-2 col-form-label">Job Location</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="updateJobLocation" name="jobLocation" placeholder="Enter Your Job Location">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="jobExperience" class="col-sm-2 col-form-label">Experience</label>
                      <div class="col-sm-10">
                        {{-- <input type="text" class="form-control" id="jobExperience" name="jobExperience" placeholder="Textarea"> --}}
                        <textarea class="form-control" id="updateJobExperience" name="jobExperience" cols="30" rows="10" placeholder="Enter Your Experience"></textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="jobAdditionalRequirement" class="col-sm-2 col-form-label">Additional Requirement</label>
                      <div class="col-sm-10">
                        {{-- <input type="text" class="form-control" id="jobAdditionalRequirement" name="jobAdditionalRequirement" placeholder="Textarea"> --}}
                        <textarea class="form-control" id="updateJobAdditionalRequirement" name="jobAdditionalRequirement" cols="30" rows="10" placeholder="Enter Your Additional Requirement"></textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="jobPublishDate" class="col-sm-2 col-form-label">Publish Date</label>
                      <div class="col-sm-10">
                        <input type="date" class="form-control" id="updateJobPublishDate" name="jobPublishDate" placeholder="Enter Your job publish date">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="jobSkill" class="col-sm-2 col-form-label">Skills & Expertise</label>
                      <div class="col-sm-10">
                        {{-- <input type="text" class="form-control" id="jobSkill" name="jobSkill" placeholder="Textarea"> --}}
                        <textarea class="form-control" id="updateJobSkill" name="jobSkill" cols="30" rows="10" placeholder="Enter Your Skill and Expertise"></textarea>
                      </div>
                    </div>

                    
                    <div class="row mb-3">
                      <label for="jobCompnayOtherBenifits" class="col-sm-2 col-form-label">Compensation & Other Benefits</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" id="updateJobCompnayOtherBenifits" name="jobCompnayOtherBenifits" cols="30" rows="10" placeholder="Enter Your Skill and Expertise"></textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="jobEmployeeStatus" class="col-sm-2 col-form-label">Employment Status</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="updateJobEmployeeStatus" name="jobEmployeeStatus" placeholder="Enter Your Employment Status">
                      </div>
                    </div>
                    <button class="btn btn-primary" onclick="updateJob()">Update JOB</button>
                  </form>
            </section>
        </div>
      </div>
    </div>
  </div>

  <script>
      async function getData(editId){
    try{
      let id = document.getElementById("viewId").value = editId;
      let data = {id:id}
      //console.log(id);
      let res = await axios.post("/dashboard-view-job",data,HeaderToken())
      console.log(res.data["data"]["companyName"])
      document.getElementById("updatecompanyName").value = res.data["data"]["companyName"];
      document.getElementById("updatejobTitle").value = res.data["data"]["jobTitle"];
      document.getElementById("updateMinumumSalary").value = res.data["data"]["minumumSalary"];
      document.getElementById("updateJobLocation").value = res.data["data"]["jobLocation"];
      document.getElementById("updateJobExperience").value = res.data["data"]["jobExperience"];
      document.getElementById("updateJobAdditionalRequirement").value = res.data["data"]["jobAdditionalRequirement"];
      document.getElementById("updateJobPublishDate").value = res.data["data"]["jobPublishDate"];
      document.getElementById("updateJobSkill").value = res.data["data"]["jobSkill"];
      document.getElementById("updateJobCompnayOtherBenifits").value = res.data["data"]["jobCompnayOtherBenifits"];
      document.getElementById("updateJobEmployeeStatus").value = res.data["data"]["jobEmployeeStatus"];
    }catch(e){
      console.log(e);
    }
  }







  async function updateJob(){
    try{
        let id = document.getElementById("updateId").value;
      let companyName = document.getElementById("updatecompanyName").value;
      let jobTitle = document.getElementById("updatejobTitle").value;
      let minumumSalary = document.getElementById("updateMinumumSalary").value;
      let jobLocation = document.getElementById("updateJobLocation").value;
      let jobExperience = document.getElementById("updateJobExperience").value;
      let jobAdditionalRequirement = document.getElementById("updateJobAdditionalRequirement").value;
      let jobPublishDate = document.getElementById("updateJobPublishDate").value;
      let jobSkill = document.getElementById("updateJobSkill").value;
      let jobCompnayOtherBenifits = document.getElementById("updateJobCompnayOtherBenifits").value;
      let jobEmployeeStatus = document.getElementById("updateJobEmployeeStatus").value;

      let postData =  {
        id:id,
        companyName:companyName,
        jobTitle:jobTitle,
        minumumSalary:minumumSalary,
        jobLocation:jobLocation,
        jobExperience:jobExperience,
        jobAdditionalRequirement:jobAdditionalRequirement,
        jobPublishDate:jobPublishDate,
        jobSkill:jobSkill,
        jobCompnayOtherBenifits:jobCompnayOtherBenifits,
        jobEmployeeStatus:jobEmployeeStatus
      }
      console.log(postData);
      

      let res = await axios.post("/dashboard-job-update",postData,HeaderToken());

      if(res.data["status"] === "success"){
        document.getElementById("close").click();
        await joblist();
        successToast(res.data["message"])
      }
    }catch(e){
        console.log(e);
    }



  }


  </script>