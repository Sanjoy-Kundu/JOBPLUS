<div class="container-fluid">

    <!-- Page Heading -->
    <div class="">
        <button class="btn btn-success" id="cadidateHide"><a href="#" style="text-decoration: none; color:white">CANDIDATE APPLYING LISTS</a></button>
        <button class="btn btn-success" id="cadidateHide"><a href="{{url('/dashboard-job')}}" target="_blank" style="text-decoration: none; color:white">ADD YOUR POST</a></button>
    </div>

    <div class="card w-100">
        <div class="card-header text-center"><h3>Job lists</h3></div>
        <div class="card-body">
          <table class="table table-bordered border-primary" id="adminJoblists" style="width:100%">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Job Title</th>
                <th scope="col">Date</th>
                <th scope="col">Salary</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody id="tableLists">
 
            </tbody>
          </table>
        </div>
    </div>
</div>

<script>
       allJobList()
    async function allJobList(){
      try{

        let res = await axios.get("/dashboard-job-lists",HeaderToken())
        let joblists = res.data["allJobs"];
        let cadidateJobs = res.data["candidateApply"]


        //console.log(joblists)
        let tableData = $("#adminJoblists");
        let tableList = $("#tableLists");

        tableData.DataTable().destroy();
        tableList.empty();

        joblists.forEach((item,index) => {
          console.log(item["adminAccess"])
          // console.log(item["jobTitle"])
          // console.log(item["jobPublishDate"])
       
          let row = ` 
                      <tr>
                            <th scope="row">${index+1}</th>
                            <td>${item["jobTitle"]}</td>
                            <td>${item["jobPublishDate"]}</td>
                            <td>${item["minumumSalary"]}</td>
                            <td>
                              ${item["adminAccess"] == 0 ? "pending":"succes"}
                              </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <button type="button" class="btn btn-warning successBtn"  data-id="${item['id']}">Access</button>
                                </div>
                            </td>
                        </tr>
          `
          tableList.append(row)
        });



        cadidateJobs.forEach((item,index) => {
          console.log(item["user_id"])
          console.log(item["job_id"])
          // console.log(item["jobTitle"])
          // console.log(item["jobPublishDate"])
       
          // let row = ` 
          //             <tr>
          //                   <th scope="row">${index+1}</th>
          //                   <td>${item["jobTitle"]}</td>
          //                   <td>${item["jobPublishDate"]}</td>
          //                   <td>${item["minumumSalary"]}</td>
          //                   <td>
          //                     ${item["adminAccess"] == 0 ? "pending":"succes"}
          //                     </td>
          //                   <td>
          //                       <div class="btn-group" role="group" aria-label="Basic mixed styles example">
          //                           <button type="button" class="btn btn-warning successBtn"  data-id="${item['id']}">Access</button>
          //                       </div>
          //                   </td>
          //               </tr>
          // `
          // tableList.append(row)
        });














        $(".successBtn").on("click", function(){
          let id = $(this).data("id");
          //console.log(id);
          $("#accessId").val(id);
          $("#access-modal").modal("show");
          //await fillFormAccess(id)
          
        })

        // $(".viewBtn").on("click", async function(){
        //   let viewId = $(this).data("id");
        //  $("#view-modal").modal("show");
        //  await viewData(viewId);
        // })

        // $(".editBtn").on("click",async function(){
        //   let editId = $(this).data("id");
        //   $("#updateId").val(editId);
        //   $("#update-modal").modal("show");
        //   await getData(editId)
        //  // alert(editId);
        // })



        new DataTable('#adminJoblists',{
            order:[[0,'desc']],
            lengthMenu:[5,10,15,20,30]
        });
        //new DataTable('#adminJoblists');
      }
       catch(e){
        console.log(e)
       }
    }





    
</script>