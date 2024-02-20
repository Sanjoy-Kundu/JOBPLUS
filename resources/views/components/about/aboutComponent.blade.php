<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 text-center">ABOUT US</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-8 col-md-6 mb-4 mx-auto">
            <div class="card border-left-primary border-bottom-primary shadow h-100 py-2">
                <div class="card-header">
                    <h2 class="text-center">About Us Form</h2>
                </div>
                <div class="card-body">
                    <section id="dashboard-profile">
                        <div class="form-group d-none">
                          <label for="email">Updae id*</label>
                          <input type="email" readonly class="form-control" id="id" name="id" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                          <label for="title">Title*</label>
                          <input type="text" class="form-control" id="about_title" name="about_title" placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Description*</label>
                          <textarea class="form-control" id="about_description" name="about_description" cols="30" rows="10"></textarea>
                        </div>
                        <button  class="btn btn-success" onclick="InsertAbout()">INSERT</button>
                        <button  class="btn btn-primary" onclick="updateAbout()">UPDATE</button>
                      </section>
                </div>
            </div>
        </div>
    </div>
</div>


<script>

   aboutDetails();
    async function aboutDetails(){
        try{
            let res = await axios.get("/dashboard-about-details",HeaderToken());

            document.getElementById("id").value = res.data["data"]["id"];
            document.getElementById("about_title").value = res.data["data"]["about_title"];
            document.getElementById("about_description").value = res.data["data"]["about_description"];
            // console.log(res.data["data"]["id"])
            // console.log(res.data["data"]["about_title"])
            // console.log(res.data["data"]["about_description"])
        }catch(e){
            console.log(e);
        }
    }




    async function InsertAbout(){
        try{
            let title       =  document.getElementById("about_title").value;
            let description =  document.getElementById("about_description").value;

            let postData = {
            about_title:title,
            about_description:description,
           }

           showLoader()
           let res = await axios.post("/dashboard-about-insert",postData,HeaderToken())
           hideLoader()

           if(res.data["status"] === "success"){
            window.location.href="/dashboard-about"
            successToast(res.data["message"]);
           }

           if(res.data["status"] === "fail"){
            errorToast(res.data["message"]);
           }


        }catch(e){
            console.log(e)
        }
    }





    async function updateAbout(){
        try{
            let id =  document.getElementById("id").value;
            let title =  document.getElementById("about_title").value;
            let description =  document.getElementById("about_description").value;

            let postData = {
            id:id,
            about_title:title,
            about_description:description,
           }
           //console.log(postData)
           showLoader()
           let res = await axios.post("/dashboard-about-update",postData,HeaderToken())
           hideLoader()

           if(res.data["status"] === "success"){
            successToast(res.data["message"]);
            await aboutDetails()
           }
        }
        catch(e){
            console.log(e)
        }
     
        
    }
</script>

 