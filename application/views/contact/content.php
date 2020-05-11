<!-- Page Wrapper -->
<div id="wrap"> 
  
  <!-- Content -->
  <main class="cd-main-content">
    <div id="content">
      <div class="resume">
        <div class="container"> 
          <!-- top-nav -->
            <?php $this->load->view('common/nav',['item'=>'contact']); ?>
          <!--./top-nav-->

          <!-- body-content -->
          <div class="row"> 
            
            <!-- Sidebar -->
            <div class="col-md-4">
              <?php $this->load->view('common/sidebar',['page'=>'contact']); ?>
            </div>
            <!--./side bar-->

            <!--main content -->
            <div class="col-md-8">
              <div class="inside-sec"> 
                <!-- BIO AND SKILLS -->
                <h5 class="tittle">CONATCT ME</h5>
                <!-- Conatct Pages  -->
                <section>
                  <div class="padding-left-30 padding-right-30 padding-top-50 padding-bottom-50">
                    <div class="row "> 
                      <!-- Phone Number  -->
                      <div class="col-md-4 text-center">
                        <div class="icon-box ib-style-1 ib-circle ib-bordered ib-bordered-white ib-bordered-thin ib-medium ib-text-alt i-xlarge dark-text">
                          <div class="ib-icon"> <i class="fa fa-mobile text-primary"></i> </div>
                          <div class="ib-info text-dark">
                            <p>+61 3 8376 6284</p>
                            <p>+61 3 8376 6284</p>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Address -->
                      <div class="col-md-4 text-center">
                        <div class="icon-box ib-style-1 ib-circle ib-bordered ib-bordered-white ib-bordered-thin ib-medium ib-text-alt i-large">
                          <div class="ib-icon"> <i class="fa fa-map-marker text-primary"></i> </div>
                          <div class="ib-info text-dark">
                            <p>PO Box 21177 Litte Lonsdale St, Melbourne Victoria 8011 Australia</p>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Email  -->
                      <div class="col-md-4 text-center">
                        <div class="icon-box ib-style-1 ib-circle ib-bordered ib-bordered-white ib-bordered-thin ib-medium ib-text-alt i-large">
                          <div class="ib-icon"> <i class="fa fa-envelope-o text-primary"></i> </div>
                          <div class="ib-info text-dark">
                            <p class="no-margin-bottom"><a href="#." class="text-white">support@yourcompany.com</a></p>
                            <p class="no-margin-bottom"><a href="#." class="text-white">support@yourcompany.com</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <!-- MAP -->
                  <section class="map-block">
                    <div class="map-wrapper" id="map-canvas" data-lat="-37.814199" data-lng="144.961560" data-zoom="13" data-style="1"></div>
                    <div class="markers-wrapper addresses-block"> <a class="marker" data-rel="map-canvas" data-lat="-37.814199" data-lng="144.961560" data-string="Envato"></a> </div>
                  </section>
                  
                  <!-- Contact  -->
                  <h5 class="tittle">SAY HELLO</h5>
                  <div class="contact style-3 light-border padding-top-50 padding-bottom-50 padding-left-20 padding-right-20"> 
                    
                    <!-- Form  -->
                    <div class="contact-right"> 
                      <!-- Success Msg -->
                      <div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Thank You. Your Message has been Submitted</div>
                      
                      <!-- FORM -->
                      <form role="form" id="contact_form" class="contact-form" method="post" onSubmit="return false">
                        <ul class="row">
                          <li class="col-sm-4">
                            <label>
                              <input type="text" class="form-control" name="name" id="name" placeholder="NAME">
                            </label>
                          </li>
                          <li class="col-sm-4">
                            <label>
                              <input type="text" class="form-control" name="email" id="email" placeholder="EMAIL">
                            </label>
                          </li>
                          <li class="col-sm-4">
                            <label>
                              <input type="text" class="form-control" name="company" id="company" placeholder="SUBJECT">
                            </label>
                          </li>
                          <li class="col-sm-12">
                            <label>
                              <textarea class="form-control" name="message" id="message" rows="5" placeholder="CONTENT..."></textarea>
                            </label>
                          </li>
                          <li class="col-sm-12">
                            <button type="submit"  value="submit" id="btn_submit" onClick="proceed();">SEND ME</button>
                          </li>
                        </ul>
                      </form>
                    </div>
                  </div>
                </section>
              </div>
            </div>
            <!--./main content-->
          </div>
          <!--./body-content -->
        </div>
      </div>
    </div>
  </main>
  <!-- End Content --> 
  
  <!-- Footer -->
  <footer class="footer">
    <div class="rights">
      <p>Designed with <i class="fa fa-heart" style="color: red;"></i> by [ <a href="#" target="_blank" style="color:white;text-decoration: underline;">Kartik Chaudhari</a> ]</p>
    </div>
  </footer>
  <!-- End Footer --> 
</div>
<!-- End Page Wrapper --> 