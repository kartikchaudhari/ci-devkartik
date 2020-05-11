<h5 class="tittle">Contact Me</h5>
<div class="contact padding-25"> 
  <!-- Success Msg -->
  <div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Thank You. Your Message has been Submitted</div>
  
  <!-- FORM -->
  <form role="form" id="contact_form" class="contact-form" method="post" onSubmit="return false">
    <ul class="row">
      <li class="col-sm-12">
        <label>
          <input type="text" class="form-control" name="email" id="email" placeholder="Email">
        </label>
      </li>
      <li class="col-sm-12">
        <label>
          <input type="text" class="form-control" name="company" id="company" placeholder="Subject">
        </label>
      </li>
      <li class="col-sm-12">
        <label>
          <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message"></textarea>
        </label>
      </li>
      <li class="col-sm-12">
        <button type="submit"  value="submit" id="btn_submit" onClick="proceed();">Send Message</button>
      </li>
    </ul>
  </form>
</div>