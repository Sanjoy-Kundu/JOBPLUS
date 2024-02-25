@extends('layout.frontend.app')
@section("content")
    @include("components.frontend.home.headerComponent") 

    <section id="services" class="services">
        <div class="container" data-aos="fade-up">
            <header class="section-header">
            <h2>Job Details</h2>
            </header>
    
            <div class="row gy-4">
                <div class="col-lg-10 col-md-10 mx-auto p-3">
                    <div class="card p-3">

                        <div class="job-view-header-section" style="display: flex; justify-content:space-between; padding:5px 5px;">
                            <div class="title">
                                <h4>EchoLogyx Ltd.</h4>
                                <h5>Dynamics 365 Business Central Developer</h5>
                            </div>
                            <div class="logo"><span>logo</span></div>
                        </div>

                        <div class="job-view-bottom-header" style="display: flex; justify-content:space-between; padding:5px 5px;">
                            <p>Application Deadline: <span>20 Mar 2024</span></p>
                            <div>
                                <button class="btn-primary" style="width:120px; background-color: green; color:white; border:1px solid gray; padding:5px;">Apply</button>
                                <button class="btn-primary" style="width:120px; background-color: orange; color:white; border:1px solid gray; padding:5px">Print</button>
                            </div>
                        </div>
                        <div class="job-summary">
                            <div class="card p-2 py-4" style="background-color: rgba(246, 244, 240, 0.679)">
                                <h6 class="text-warning">Summary</h6>
                                    <div class="summary-header" style="display: flex; justify-content:space-between; align-item:center">
                                        <div class="one">
                                            <ol>
                                                <li>Vacancy: <span style="font-weight: bolder">10</span> </li>
                                                <li>Salary : <span style="font-weight: bolder">Negotiable</span> </li>
                                            </ol>
                                        </div>
                                        <div class="two">
                                            <ol>
                                                <li>Age: <span style="font-weight: bolder" >20 to 35</span> years</li>
                                                <li>Experience: <span style="font-weight: bolder">At least 1 year</span></li>
                                            </ol>
                                        </div>
                                        <div class="three">
                                            <ol>
                                                <li>Location: <span style="font-weight: bolder">Dhaka (Uttara Sector 4)</span></li>
                                                <li>Published: <span style="font-weight: bolder">20 Feb 2024</span></li>
                                            </ol>
                                        </div>
                                    </div>
                            </div>
                        </div>

                        <div class="requirements">
                            <div class="card p-2 py-4 mt-2" style="background-color: rgba(246, 244, 240, 0.679)">
                                <div class="education">
                                    <h6><b>Eduction</b></h6>
                                    <ul>
                                      <li>3 to 5 years</li>
                                    </ul>
                                  </div>

                                  <div class="additional-requirement">
                                    <h6><b>Additional Requirements</b></h6>
                                    <ul>
                                      <li>Age 20 to 35 years</li>
                                    </ul>
                                  </div>

                                  <div class="skill">
                                    <h6><b>Skills & Expertise</b></h6>
                                    <ul>
                                      <li>Html</li>
                                      <li>CSS</li>
                                      <li>Javascript</li>
                                    </ul>
                                  </div>
                                  <div class="compensation-other-benefits">
                                    <h6><b>Compensation & Other Benefitse</b></h6>
                                    <ul>
                                      <li>Performance based yearly increment. Six-month probation period then permanent with a revised salary</li>
                                      <li>Mobile Bill</li>
                                    </ul>
                                  </div>
                                  <div class="employee-status">
                                    <h6><b>Employee Statys</b></h6>
                                    <p><span>Full Time</span></p>
                                  </div>

                                  <div class="job-location">
                                    <h6><b>Job Location</b></h6>
                                    <p><span>Dhaka</span></p>
                                  </div>
                            </div>
                        </div>


{{-- 
                        <div class="card-body">
                            <h6>Dynamics 365 Business Central Developer</h6>
                            <p>EchoLogyx Ltd.</p>
                            <div>
                                <p><i class="fa fa-map-marker text-danger" aria-hidden="true"></i> <span>Location</span></p>
                                <p><i class="fa fa-briefcase text-primary" aria-hidden="true"></i> job</p>
                                <p><i class="fa fa-calendar text-primary" aria-hidden="true"></i> date</p>
                            </div>
                        <p>Description: <br> <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, dolor.</span></p>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        </section>
      




    @include("components.frontend.home.footerComponent")
@endsection