<div class="side-bar"> 
    <!-- Professional Details -->
    <?php $this->load->view('common/professional_details',['details'=>$details['professional_details']]); ?>
    <!--./Professional Details -->

    <!-- Attachments -->
    <?php $this->load->view('common/attachments',['details'=>$details['attachments']]); ?>
    <!--./Attachments -->

    <!-- Social Profiles -->
    <?php $this->load->view('common/social',['details'=>$details['social']]); ?>
    <!--./Social Profiles -->

    <!--Contact Me -->
    <?php 
        if ($page!="contact") {
            $this->load->view('common/contact_box'); 
        }
    ?>
    <!--./Contact Me -->
</div>