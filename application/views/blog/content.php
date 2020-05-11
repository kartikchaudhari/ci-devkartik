<!-- Page Wrapper -->
<div id="wrap"> 
  
  <!-- Content -->
  <main class="cd-main-content">
    <div id="content">
      <div class="resume">
        <div class="container"> 
          <!-- top-nav -->
            <?php $this->load->view('common/nav',['item'=>'blog']); ?>
          <!--./top-nav-->

          <!-- body-content -->
          <div class="row"> 
            
            <!-- Sidebar -->
            <div class="col-md-4">
              <?php $this->load->view('common/sidebar',['page'=>'blog']); ?>
            </div>
            <!--./side bar-->

            <!--main content -->
            <div class="col-md-8">
              <div class="inside-sec"> 
                <!-- BIO AND SKILLS -->
                <h5 class="tittle">BLOG</h5>
                <!-- Conatct Pages  -->
                <section>
                  <div class="padding-left-30 padding-right-30 padding-top-50 padding-bottom-50">
                    <div class="row "> 
                      Blog Here                      
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