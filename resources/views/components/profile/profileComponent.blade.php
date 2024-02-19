<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profile</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-8 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <section id="dashboard=profile">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" readonly class="form-control" id="email" name="readonly" placeholder="Enter email">
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail1">User Name</label>
                          <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Role</label>
                          <input type="text" readonly class="form-control" id="role">
                        </div>
                        <button  class="btn btn-primary" onclick="updateProfile()">Submit</button>
                      </section>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    getProfile()
    async function getProfile(){
        try{
            let res = await axios.get("/user-profile",HeaderToken())
            //console.log(res.data["data"])
            document.getElementById("name").value = res.data["data"]["name"]
            document.getElementById("email").value = res.data["data"]["email"]
            document.getElementById("role").value = res.data["data"]["role"]
        }
        catch(e){
            console.log(e)
        }  
    }

    
  
    async function updateProfile(){
        try{

            let name = document.getElementById("name").value
            let email = document.getElementById("email").value
            let postData = {
                name:name,
                email:email
            }
            console.log(postData)
            let res = await axios.post("/user-profile-update",postData,HeaderToken())
            if(res.data["status"] === "success"){
                successToast(res.data["message"]);
                await getProfile()
            }
           
        }
        catch(e){
            console.log(e)
        }  
    }


</script>