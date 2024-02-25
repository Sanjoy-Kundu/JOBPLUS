<div class="container-fluid">

    <!-- Page Heading -->
    <div class="">
        <button class="btn btn-success" id="cadidateHide"><a href="#" style="text-decoration: none; color:white">CANDIDATE APPLYING LISTS</a></button>
        <button class="btn btn-success" id="cadidateHide"><a href="{{url('/dashboard-job')}}" target="_blank" style="text-decoration: none; color:white">ADD YOUR POST</a></button>
    </div>

    <div class="card w-100">
        <div class="card-header text-center"><h3>Job lists</h3></div>
        <div class="card-body">
          <table class="table table-bordered border-primary" id="tableData">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Job Name</th>
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
    joblist()
    async function joblist(){
      try{
        let res = await axios.get("/dashboard-job-lists",HeaderToken())
        let joblists = res.data["joblists"];


        //console.log(joblists)
        let tableData = $("#tableData");
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
                                    <button type="button" class="btn btn-danger deleteBtn"  data-id="${item['id']}">DELETE</button>
                                    <button type="button" class="btn btn-warning viewBtn" data-id="${item['id']}">VIEW</button>
                                    <button type="button" class="btn btn-success editBtn" data-id="${item['id']}">EDIT</button>
                                </div>
                            </td>
                        </tr>
          `
          tableList.append(row)
        });

        $(".deleteBtn").on("click",function(){
          let deleteId = $(this).data("id");
          $("#delete-modal").modal("show");
          $("#deleteID").val(deleteId);
          //alert(deleteId);
        })

        $(".viewBtn").on("click", function(){
          let viewId = $(this).data("id");
          alert(viewId);
        })

        $(".editBtn").on("click", function(){
          let editId = $(this).data("id");
          alert(editId);
        })



        new DataTable('#tableData',{
            order:[[0,'desc']],
            lengthMenu:[5,10,15,20,30]
        });
      }
       catch(e){
        console.log(e)
       }
    }
</script>