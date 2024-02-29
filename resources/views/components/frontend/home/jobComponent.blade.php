<section id="services" class="services">
    <div class="container" data-aos="fade-up">

        <header class="section-header">
        <h2>JOBS</h2>
        <p>Our Latest Job</p>
        </header>
        <div class="row gy-4" id="jobCard">

        </div>
        {{-- onclick="jobPage()" --}}
        <button  id="showMorejob" style="width: 150px; margin-top:6px; background-color:rgb(89, 202, 89); padding:10px 10px; border:1px solid gray"><a href="{{url('/jobs')}}" style="text-decoration:none; color:white" target="_blank">Show More job</a></button>
    </div>
</section>
  

<script>




    async function showSixJob(){
        try{
            let allJobs = await axios.get("/alljobs");
            let joblists = allJobs.data["sixjobs"];
            console.log(joblists);
            let jobCard = $('#jobCard');
            for (let key in joblists) {
            if (joblists.hasOwnProperty(key)) {
                let value = joblists[key];
                //console.log(value); // Output: { job: "..." } for each iteration
                let id = joblists[key].id
                let jobTitle = joblists[key].jobTitle
                let companyName = joblists[key].companyName
                let employeeStatus = joblists[key].jobEmployeeStatus
                let publishDate = joblists[key].jobPublishDate
                let minumumSalary = joblists[key].minumumSalary
                let jobLocation = joblists[key].jobLocation
                let job = ` 
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h6>${jobTitle}</h6>
                                <p>${companyName}</p>
                                <div>
                                    <input type="text" name="job_id" id="job_id_six" value="${id}" class="d-none">
                                    <p><i class="fa fa-map-marker text-danger" aria-hidden="true"></i> <span>Location: ${jobLocation}</span></p>
                                    <p><i class="fa fa-briefcase text-primary" aria-hidden="true"></i>${employeeStatus}</p>
                                    <p><i class="fa fa-calendar text-primary" aria-hidden="true"></i> ${publishDate}</p>
                                </div>
                                <p>Salary: ${minumumSalary}</span></p>
                            </div>
                            <div style="display:flex; justify-content:space-between; align-item:center; padding:10px 10px">
                                <button onclick="applySixJob()" id="sixapplybtn"  style="width: 100px;background-color: #49c849; padding: 8px 2px;border: 1px solid #d3cfcf;color: white;font-weight: bolder;">  
                                    Apply
                                </button>
                              
                                
                            </div>
                        </div>
                    </div>
            `
            jobCard.append(job)
            }
          }
        }catch(e){
            console.log(e)
        }
         
    }


    async function showallJobs(){
        let allJobs = await axios.get("/alljobs");
        let joblists = allJobs.data["allJobs"];
        
        let jobCard = $('#jobCard');
        for (let key in joblists) {
            if (joblists.hasOwnProperty(key)) {
                let value = joblists[key];
                //console.log(value); // Output: { job: "..." } for each iteration
                let id = joblists[key].id
                let jobTitle = joblists[key].jobTitle
                let companyName = joblists[key].companyName
                let employeeStatus = joblists[key].jobEmployeeStatus
                let publishDate = joblists[key].jobPublishDate
                let minumumSalary = joblists[key].minumumSalary
                let jobLocation = joblists[key].jobLocation


                let job = ` 
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h6>${jobTitle}</h6>
                                <p>${companyName}</p>
                                <div>
                                    <input type="text" name="job_id" id="job_id" value="${id}" class="d-none">
                                    <p><i class="fa fa-map-marker text-danger" aria-hidden="true"></i> <span>Location: ${jobLocation}</span></p>
                                    <p><i class="fa fa-briefcase text-primary" aria-hidden="true"></i>${employeeStatus}</p>
                                    <p><i class="fa fa-calendar text-primary" aria-hidden="true"></i> ${publishDate}</p>
                                </div>
                                <p>Salary: ${minumumSalary}</span></p>
                            </div>
                            <div style="display:flex; justify-content:space-between; align-item:center; padding:10px 10px">
                                <button onclick="applyAllJob()" style="width: 100px;background-color: #49c849; padding: 8px 2px;border: 1px solid #d3cfcf;color: white;font-weight: bolder;" >Apply</button>
                                
                            </div>
                        </div>
                    </div>
            `
            jobCard.append(job)
            }
        }
    }


    if(location.pathname == "/"){
        showSixJob();
    }

    if(location.pathname == "/jobs"){
       
        showallJobs();
        document.getElementById("showMorejob").style="display:none"
    }



    async function userCheck(){
    let res = await axios.get("/user-profile",HeaderToken())
    console.log(res.status)
    //console.log(res.data["data"]["role"])

    }






    async function applySixJob(){
      let jobId = document.getElementById("job_id_six").value 
      let data = {
        job_id:jobId
      }
      let res = await axios.post("/customer-job-apply",data,HeaderToken());

      if(res.data["status"] === "success"){
        successToast(res.data["message"])
      }

    }

    async function applyAllJob(){
        let jobId = document.getElementById("job_id").value 
        let data = {
        job_id:jobId
      }
      let res = await axios.post("/customer-job-apply",data,HeaderToken());

      if(res.data["status"] === "success"){
        successToast(res.data["message"])
      }
  
    }









    let check = HeaderToken();
    let authChekc = check.headers.Authorization
    console.log(authChekc);

if(authChekc === null ){
        console.log("login route e jabe")
}else{
    console.log("apply korbo")
}


    
 
</script>


