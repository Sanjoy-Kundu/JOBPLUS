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
        joblists.forEach((index,item) => {
            console.log(index);
            console.log(item);
            let job = ` 
             <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h6>Dynamics 365 Business Central Developer</h6>
                        <p>EchoLogyx Ltd.</p>
                        <div>
                            <p><i class="fa fa-map-marker text-danger" aria-hidden="true"></i> <span>Location</span></p>
                            <p><i class="fa fa-briefcase text-primary" aria-hidden="true"></i> job</p>
                            <p><i class="fa fa-calendar text-primary" aria-hidden="true"></i> date</p>
                        </div>
                        <p>Description: <br> <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, dolor.</span></p>
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
        joblists.forEach((index,item) => {
            console.log(index);
            console.log(item);
            let job = ` 
             <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h6>Dynamics 365 Business Central Developer</h6>
                        <p>EchoLogyx Ltd.</p>
                        <div>
                            <p><i class="fa fa-map-marker text-danger" aria-hidden="true"></i> <span>Location</span></p>
                            <p><i class="fa fa-briefcase text-primary" aria-hidden="true"></i> job</p>
                            <p><i class="fa fa-calendar text-primary" aria-hidden="true"></i> date</p>
                        </div>
                        <p>Description: <br> <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, dolor.</span></p>
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


