<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 text-center">CONTACT</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-8 col-md-6 mb-4 mx-auto">
            <div class="card border-left-primary border-bottom-primary shadow h-100 py-2">
                <div class="card-header">
                    <h2 class="text-center">Contact Form</h2>
                </div>
                <div class="card-body">
                    <section id="dashboard-profile">
                        <div class="form-group d-none">
                          <label for="email">Updae id*</label>
                          <input type="email" class="form-control" id="id" name="id" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                          <label for="email">Email*</label>
                          <input type="email" class="form-control" id="contact_email" name="contact_email" placeholder="Enter email">
                        </div>

                        <div class="form-group">
                          <label for="number">Phone*</label>
                          <input type="tel" class="form-control" id="contact_mobile" name="contact_mobile" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Address</label>
                          <textarea class="form-control" id="contact_address" name="contact_address" cols="30" rows="10"></textarea>
                        </div>
                        <button  class="btn btn-primary" onclick="sumbmitContact()">Submit</button>
                      </section>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
  getContactInfo()
  async function getContactInfo(){
    try{

      let res = await axios.get("/web-contact-get",HeaderToken())

      document.getElementById("contact_email").value = res.data["data"]["contact_email"];
      document.getElementById("contact_mobile").value = res.data["data"]["contact_mobile"];
      document.getElementById("contact_address").value = res.data["data"]["contact_address"];
      document.getElementById("id").value = res.data["data"]["id"];
      console.log(res.data["data"]["id"])
      console.log(res.data["data"]["contact_email"])
      console.log(res.data["data"]["contact_mobile"])
      console.log(res.data["data"]["contact_address"])

    }catch(e){
      console.log(e)
    }
  }



  async function sumbmitContact(){
    let id = document.getElementById("id").value
    let email = document.getElementById("contact_email").value
    let mobile = document.getElementById("contact_mobile").value
    let address = document.getElementById("contact_address").value

    let postData = {
      id:id,
      contact_email:email, 
      contact_mobile:mobile,
      contact_address:address
    }

    showLoader()
    let res = await axios.post("/web-contact-update",postData,HeaderToken());
    hideLoader()
    if(res.data["status"] === "success"){
      successToast(res.data["message"]);
      await getContactInfo();
    }
  }
</script>