<div class="container-fluid">

    <!-- Page Heading -->
    <div class="">
        <h1 class="h4 mb-0 text-gray-800 text-center">JOB PAGE</h1>
        <button class="btn btn-primary"><a href="{{url('/dashboard-job-lists-page')}}" style="text-decoration: none; color:white">YOUR JOB LISTS</a></button>
        <button class="btn btn-success" id="cadidateHide"><a href="#" style="text-decoration: none; color:white">CANDIDATE APPLYING LISTS</a></button>
        <button class="btn btn-warning" id="onlyAdmin"><a href="{{url("/dashboard-all-job-lists")}}" style="text-decoration: none; color:white">ALL JOB LISTS</a></button>
    </div>

    <!-- Content Row -->
    <div class="row mt-2" id="formHideCadidate">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-10 col-md-8 mb-4 mx-auto">
            <div class="card border-left-primary border-bottom-primary shadow h-100 py-2">
                <div class="card-header">
                    <h2 class="text-center">Upload Your Job</h2>
                </div>
                <div class="card-body">
                    <form id="reset-form" onsubmit="event.preventDefault();">
                        <div class="row mb-3">
                          <label for="companyName" class="col-sm-2 col-form-label">Company Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control"  id="companyName" name="companyName" placeholder="Enter Your Company Name">
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                          <label for="jobTitle" class="col-sm-2 col-form-label">Job Title</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="jobTitle" name="jobTitle" placeholder="Enter Your Job Title">
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                          <label for="minumumSalary" class="col-sm-2 col-form-label">Minumum Salary</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="minumumSalary" name="minumumSalary" placeholder="Enter Your Salary">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="jobLocation" class="col-sm-2 col-form-label">Job Location</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="jobLocation" name="jobLocation" placeholder="Enter Your Job Location">
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="jobExperience" class="col-sm-2 col-form-label">Experience</label>
                          <div class="col-sm-10">
                            {{-- <input type="text" class="form-control" id="jobExperience" name="jobExperience" placeholder="Textarea"> --}}
                            <textarea class="form-control" id="jobExperience" name="jobExperience" cols="30" rows="10" placeholder="Enter Your Experience"></textarea>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="jobAdditionalRequirement" class="col-sm-2 col-form-label">Additional Requirement</label>
                          <div class="col-sm-10">
                            {{-- <input type="text" class="form-control" id="jobAdditionalRequirement" name="jobAdditionalRequirement" placeholder="Textarea"> --}}
                            <textarea class="form-control" id="jobAdditionalRequirement" name="jobAdditionalRequirement" cols="30" rows="10" placeholder="Enter Your Additional Requirement"></textarea>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="jobPublishDate" class="col-sm-2 col-form-label">Publish Date</label>
                          <div class="col-sm-10">
                            <input type="date" class="form-control" id="jobPublishDate" name="jobPublishDate" placeholder="Enter Your job publish date">
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="jobSkill" class="col-sm-2 col-form-label">Skills & Expertise</label>
                          <div class="col-sm-10">
                            {{-- <input type="text" class="form-control" id="jobSkill" name="jobSkill" placeholder="Textarea"> --}}
                            <textarea class="form-control" id="jobSkill" name="jobSkill" cols="30" rows="10" placeholder="Enter Your Skill and Expertise"></textarea>
                          </div>
                        </div>

                        
                        <div class="row mb-3">
                          <label for="jobCompnayOtherBenifits" class="col-sm-2 col-form-label">Compensation & Other Benefits</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="jobCompnayOtherBenifits" name="jobCompnayOtherBenifits" placeholder="Enter Your Compensation & Other Benefits">
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label for="jobEmployeeStatus" class="col-sm-2 col-form-label">Employment Status</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="jobEmployeeStatus" name="jobEmployeeStatus" placeholder="Enter Your Employment Status">
                          </div>
                        </div>
                        <button class="btn btn-primary" onclick="postJob()">POST JOB</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>



<script>

jobComponent()
async function jobComponent(){
  
    try{
        let res = await axios.get("/user-profile",HeaderToken())
            if(res.data["data"]["role"] === "candidate"){
                document.getElementById("onlyAdmin").classList.add("d-none")
                document.getElementById("cadidateHide").classList.add("d-none")
                document.getElementById("formHideCadidate").classList.add("d-none")
            }

            if(res.data["data"]["role"] === "companies"){
                document.getElementById("onlyAdmin").classList.add("d-none")
            }
    }
    catch(e){
        console.log(e)
    } 
}






async function postJob(){


  let companyName              = document.getElementById("companyName").value;
  let jobTitle                 = document.getElementById("jobTitle").value;
  let minumumSalary            = document.getElementById("minumumSalary").value;
  let jobLocation              = document.getElementById("jobLocation").value;
  let jobExperience            = document.getElementById("jobExperience").value;
  let jobAdditionalRequirement = document.getElementById("jobAdditionalRequirement").value;
  let jobPublishDate           = document.getElementById("jobPublishDate").value;
  let jobSkill                 = document.getElementById("jobSkill").value;
  let jobCompnayOtherBenifits  = document.getElementById("jobCompnayOtherBenifits").value;
  let jobEmployeeStatus        = document.getElementById("jobEmployeeStatus").value;




      if(companyName === ""){
        errorToast("Name field is required");
      }else if(jobTitle === ""){
        errorToast("Title field is required");
      }else if(minumumSalary === ""){
        errorToast("Salary field is required");
      }else if(jobLocation === ""){
        errorToast("Location field is required");
      }else if(jobExperience === ""){
        errorToast("Job Experience field is required");
      }else if(jobAdditionalRequirement === ""){
        errorToast("Additional Requirement field is required");
      }else if(jobPublishDate === ""){
        errorToast("Please select date");
      }else if(jobEmployeeStatus === ""){
        errorToast("Employee field is required");
      }



      let postData = {
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
      console.log(postData)

      showLoader()
      let res = await axios.post("/dashboard-job-insert",postData,HeaderToken());
      document.getElementById("reset-form").reset();
      hideLoader()
      if(res.data["status"] === "success"){
      
        successToast(res.data["message"]);
      }
    

}

</script> 
