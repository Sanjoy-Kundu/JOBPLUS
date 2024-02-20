<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <div class="row gx-0">

        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
            <h2><span id="about_title"></span></h2>
            <p><span  id="about_description"></span></p>
            </div>
        </div>

        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{asset('assets/frontend')}}/assets/img/about.jpg" class="img-fluid" alt="">
        </div>

        </div>
    </div>
    </section>


    <script>
            frontendAboutInfo()
    async function frontendAboutInfo(){
      let res = await axios.get("/frontend-about-details");
      document.getElementById("about_title").innerText = res.data["data"]["about_title"];
      document.getElementById("about_description").innerText = res.data["data"]["about_description"];
    }
    </script>