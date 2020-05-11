<!-- Page Wrapper -->
<div id="wrap"> 
  
 
  <!-- Content -->
  <main class="cd-main-content">
    <div id="content">
      <div class="resume">
        <div class="container"> 
            <!-- navbar -->              
            <?php $this->load->view('common/nav',['item'=>'resume']); ?>
            <!--./navbar-->  

          <!-- Resume -->
          <div class="row"> 
            <!-- Sidebar -->
            <div class="col-md-4">
              <?php $this->load->view('common/sidebar',['page'=>'resume']); ?>
            </div>
            <!--./side bar-->
            
            <!-- MAIN CONTENT -->
            <div class="col-md-8"> 
              <!--bio skills content -->
              <?php $this->load->view('resume/bioskills'); ?>
              <!--./bio skills contet-->

              <!-- experience -->
              <?php $this->load->view('resume/experience'); ?>
              <!--./experience-->

              <!-- academic -->
              <?php $this->load->view('resume/academicbg'); ?>
              <!--./academic-->
            </div>
            <!-- Main Content-->
          </div>
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