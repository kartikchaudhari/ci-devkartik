<!-- Page Wrapper -->
<div id="wrap"> 

  <!-- Content -->
  <main class="cd-main-content">
    <div id="content">
      <div class="resume">
        <div class="container"> 
          <!-- Resume -->
          <div class="row"> 
            
            <!-- Sidebar -->
            <div class="col-md-4">
              <?php $this->load->view('common/sidebar',['page'=>'about','details'=>$details]); ?>
            </div>
            <!--./side bar-->
            
            <!-- MAIN CONTENT -->
            <div class="col-md-8"> 
            <!-- navbar -->              
            <?php $this->load->view('common/nav',['item'=>'about']); ?>
            <!--./navbar-->  
              
              
              <div class="tab-content"> 
                
                <!-- ABOUT ME -->
                <div role="tabpanel" class="tab-pane fade in active" id="about-me">
                  <div class="inside-sec"> 
                    <!-- BIO AND SKILLS -->
                    <h5 class="tittle">About Me</h5>
                    
                    <!-- Blog -->
                    <section class="about-me padding-top-10"> 
                      
                      <!-- Personal Info -->
                      <ul class="personal-info">
                        <li>
                          <p> <span> Name</span> <?=$details['professional_details']['name'];?> </p>
                        </li>
                        <li>
                          <p> <span> Age</span> <?=$details['professional_details']['age'];?> Years </p>
                        </li>
                        <li>
                          <p> <span> Location</span> <?=$details['professional_details']['location'];?> </p>
                        </li>
                        <li>
                          <p> <span> Experience</span> <?=$details['professional_details']['experience'];?> </p>
                        </li>
                        <li>
                          <p> <span> Degree</span> <?=$details['professional_details']['degree'];?> </p>
                        </li>
                    
                        <li>
                          <p> <span> Phone</span> (91) <?=$details['professional_details']['phone'];?></p>
                        </li>
                        <li>
                          <p> <span style="width: 80px;"> E-mail</span> <a href="mailto:<?=$details['professional_details']['email'];?>"> <?=$details['professional_details']['email'];?></a> </p>
                        </li>
                        <li>
                          <p> <span> Website</span><a href="<?=$details['professional_details']['website'];?>"> <?=$details['professional_details']['website'];?> </a></p>
                        </li>
                      </ul>
                      
                      <!-- I’m Web Designer -->
                      <h5 class="tittle">I’m Web Developer</h5>
                      <div class="padding-20">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam. <br>
                          <br>
                          Quisque semper justo at risus. Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet, elit magna vulputate arcu, vel tempus metus leo non est. Etiam sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque. Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor, et mollis pede metus eget nisi. <br>
                          <br>
                        </p>
                      </div>
                      
                      <!-- Services -->
                      <h5 class="tittle">Services</h5>
                      <div class="row padding-20 margin-top-50"> 
                        
                        <!-- Icon -->
                        <div class="col-md-4 text-center">
                          <div class="icon-box i-large ib-black">
                            <div class="ib-icon"> <i class="fa fa-whatsapp"></i> </div>
                            <div class="ib-info">
                              <h4 class="h6">WEB DEVELOPMENT</h4>
                              <p>We have created the new macbook psd version with scalable vector shapes.</p>
                            </div>
                          </div>
                        </div>
                        
                        <!-- Icon -->
                        <div class="col-md-4 text-center">
                          <div class="icon-box i-large ib-black">
                            <div class="ib-icon"> <i class="fa fa-magic"></i> </div>
                            <div class="ib-info">
                              <h4 class="h6">WEB DESIGN</h4>
                              <p>We have created the new macbook psd version with scalable vector shapes.</p>
                            </div>
                          </div>
                        </div>
                        
                        <!-- Icon -->
                        <div class="col-md-4 text-center">
                          <div class="icon-box i-large ib-black">
                            <div class="ib-icon"> <i class="fa fa-smile-o"></i> </div>
                            <div class="ib-info">
                              <h4 class="h6">RESPONSIVE</h4>
                              <p>We have created the new macbook psd version with scalable vector shapes.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Icon Row -->
                      <div class="row padding-20 margin-bottom-50"> 
                        
                        <!-- Icon -->
                        <div class="col-md-4">
                          <div class="icon-box i-large ib-black">
                            <div class="ib-icon"> <i class="fa fa-diamond"></i> </div>
                            <div class="ib-info">
                              <h4 class="h6">Unique Design</h4>
                              <p>We have created the new macbook psd version with scalable vector shapes.</p>
                            </div>
                          </div>
                        </div>
                        
                        <!-- Icon -->
                        <div class="col-md-4">
                          <div class="icon-box i-large ib-black">
                            <div class="ib-icon"> <i class="fa fa-server"></i> </div>
                            <div class="ib-info">
                              <h4 class="h6">Demos Layout</h4>
                              <p>We have created the new macbook psd version with scalable vector shapes.</p>
                            </div>
                          </div>
                        </div>
                        
                        <!-- Icon -->
                        <div class="col-md-4">
                          <div class="icon-box i-large ib-black">
                            <div class="ib-icon"> <i class="fa fa-scissors"></i> </div>
                            <div class="ib-info">
                              <h4 class="h6">Clean Code</h4>
                              <p>We have created the new macbook psd version with scalable vector shapes.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Skills -->
                      <h5 class="tittle">Skills</h5>
                      
                      <!-- Sound Engineering -->
                      <div class="panel-group accordion padding-20" id="accordion">
                        <div class="panel panel-default">
                          <div class="row">
                            <div class="col-sm-4"> 
                              <!-- PANEL HEADING -->
                              <div class="panel-heading">
                                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed"> Photoshop</a> </h4>
                              </div>
                            </div>
                            
                            <!-- Skillls Bars -->
                            <div class="col-sm-8">
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"> <span class="sr-only">60% Complete</span> </div>
                              </div>
                              
                              <!-- Skillls Text -->
                              <div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        <!-- Business Administration -->
                        
                        <div class="panel panel-default">
                          <div class="row">
                            <div class="col-sm-4"> 
                              <!-- PANEL HEADING -->
                              <div class="panel-heading">
                                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapsetwo" class="collapsed"> Dreamviewer</a> </h4>
                              </div>
                            </div>
                            
                            <!-- Skillls Bars -->
                            <div class="col-sm-8">
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"> <span class="sr-only">60% Complete</span> </div>
                              </div>
                              
                              <!-- Skillls Text -->
                              <div id="collapsetwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        <!-- HTML -->
                        <div class="panel panel-default">
                          <div class="row">
                            <div class="col-sm-4"> 
                              <!-- PANEL HEADING -->
                              <div class="panel-heading">
                                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapsethree" class="collapsed"> HTML5/CSS3</a> </h4>
                              </div>
                            </div>
                            
                            <!-- Skillls Bars -->
                            <div class="col-sm-8">
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">60% Complete</span> </div>
                              </div>
                              
                              <!-- Skillls Text -->
                              <div id="collapsethree" class="panel-collapse collapse">
                                <div class="panel-body">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- End Content --> 
  
  <!-- Footer -->
  <?php $this->load->view('common/footer_content'); ?>
  <!-- End Footer --> 
</div>
<!-- End Page Wrapper --> 