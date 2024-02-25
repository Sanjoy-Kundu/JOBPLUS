<section id="services" class="services">
    <div class="container" data-aos="fade-up">

        <header class="section-header">
        <h2>JOBS</h2>
        <p>Our Latest Job</p>
        </header>
        <div class="row gy-4" id="jobCard">
        </div>

        <button  id="showMorejob" style="width: 150px; margin-top:6px; background-color:rgb(89, 202, 89); padding:10px 10px; border:1px solid gray" onclick="jobPage()"><a href="{{url('/jobs')}}" style="text-decoration:none; color:white" target="_blank">Show More job</a></button>
    </div>
</section>
  

<script>
    async function showSixJob(){
        let allJobs = await axios.get("/alljobs");
        let joblists = allJobs.data["sixjobs"];
        let jobCard = $('#jobCard');
        joblists.forEach((item,index) => {
            // console.log(item)
            // console.log(item["jobEmployeeStatus"])
            // console.log(item["minumumSalary"])
            let job = ` 
             <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h6>${item["jobTitle"]}</h6>
                        <p>${item["companyName"]}</p>
                        <div>
                            <p><i class="fa fa-map-marker text-danger" aria-hidden="true"></i> <span>Location: ${item["jobLocation"]}</span></p>
                            <p><i class="fa fa-briefcase text-primary" aria-hidden="true"></i>${item["jobEmployeeStatus"]}</p>
                            <p><i class="fa fa-calendar text-primary" aria-hidden="true"></i> ${item["jobPublishDate"]}</p>
                        </div>
                        <p>Salary: ${item["minumumSalary"]}</span></p>
                    </div>
                    <div style="display:flex; justify-content:space-between; align-item:center; padding:10px 10px">
                        <button style="width: 100px;background-color: #49c849; padding: 8px 2px;border: 1px solid #d3cfcf;color: white;font-weight: bolder;">Apply</button>
                        <button style="width: 100px;background-color: orange; padding: 8px 2px;border: 1px solid #d3cfcf;color: white;font-weight: bolder;">View</button>
                    </div>
                </div>
             </div>
            `
            jobCard.append(job)
            //jobCard.append(job)
        });
    }


    async function showallJobs(){
        let allJobs = await axios.get("/alljobs");
        let joblists = allJobs.data["allJobs"];
        let jobCard = $('#jobCard');
        joblists.forEach((item,index) => {
            console.log(index);
            console.log(item);
            let job = ` 
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h6>${item["jobTitle"]}</h6>
                        <p>${item["companyName"]}</p>
                        <div>
                            <p><i class="fa fa-map-marker text-danger" aria-hidden="true"></i> <span>Location: ${item["jobLocation"]}</span></p>
                            <p><i class="fa fa-briefcase text-primary" aria-hidden="true"></i>${item["jobEmployeeStatus"]}</p>
                            <p><i class="fa fa-calendar text-primary" aria-hidden="true"></i> ${item["jobPublishDate"]}</p>
                        </div>
                        <p>Salary: ${item["minumumSalary"]}</span></p>
                    </div>
                    <div style="display:flex; justify-content:space-between; align-item:center; padding:10px 10px">
                        <button style="width: 100px;background-color: #49c849; padding: 8px 2px;border: 1px solid #d3cfcf;color: white;font-weight: bolder;">Apply</button>
                        <button style="width: 100px;background-color: orange; padding: 8px 2px;border: 1px solid #d3cfcf;color: white;font-weight: bolder;">View</button>
                    </div>
                </div>
             </div>
            `
            jobCard.append(job)
            //jobCard.append(job)
        });
    }


    if(location.pathname == "/"){
        showSixJob();
    }

    if(location.pathname == "/jobs"){
       
        showallJobs();
        document.getElementById("showMorejob").style="display:none"
    }
</script>


