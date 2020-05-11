<nav> 
  <!-- Brand and toggle get grouped for better mobile display -->
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-tabis" aria-expanded="false"> <span class="tittle">MENU</span> <span class="fa fa-navicon icon-nav"></span> </button>
  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="nav-tabis">
    <ul class="isop-filter nav">
      <?php 
        switch ($item):
          case 'about':
      ?>
        <li class="active">
          <a href="<?=base_url();?>"><i class="icon-user"></i> ABOUT ME</a>
        </li>
        <li><a href="<?=base_url();?>resume"><i class="icon-book-open"></i>RESUME</a></li>
        <li><a href="<?=base_url();?>portfolio"><i class="icon-rocket"></i>PORTFOLIO</a></li>
        <li><a href="<?=base_url();?>blog"><i class="icon-note"></i>BLOG</a></li>
        <li><a href="<?=base_url();?>contact"><i class="icon-pencil"></i>CONTACT ME</a></li>
        <li></li>
      <?php break; ?>
      
      <?php case 'resume': ?>
        <li><a href="<?=base_url();?>"><i class="icon-user"></i> ABOUT ME</a></li>
        <li class="active"><a href="<?=base_url();?>resume"><i class="icon-book-open"></i>RESUME</a></li>
        <li><a href="<?=base_url();?>portfolio"><i class="icon-rocket"></i>PORTFOLIO</a></li>
        <li><a href="<?=base_url();?>blog"><i class="icon-note"></i>BLOG</a></li>
        <li><a href="<?=base_url();?>contact"><i class="icon-pencil"></i>CONTACT ME</a></li>
        <li></li>
      <?php break; ?>

      <?php case 'portfolio': ?>
        <li><a href="<?=base_url();?>"><i class="icon-user"></i> ABOUT ME</a></li>
        <li><a href="<?=base_url();?>resume"><i class="icon-book-open"></i>RESUME</a></li>
        <li class="active"><a href="<?=base_url();?>portfolio"><i class="icon-rocket"></i>PORTFOLIO</a></li>
        <li><a href="<?=base_url();?>blog"><i class="icon-note"></i>BLOG</a></li>
        <li><a href="<?=base_url();?>contact"><i class="icon-pencil"></i>CONTACT ME</a></li>
        <li></li>
      <?php break; ?>

      <?php case 'blog': ?>
        <li><a href="<?=base_url();?>"><i class="icon-user"></i> ABOUT ME</a></li>
        <li><a href="<?=base_url();?>resume"><i class="icon-book-open"></i>RESUME</a></li>
        <li><a href="<?=base_url();?>portfolio"><i class="icon-rocket"></i>PORTFOLIO</a></li>
        <li class="active"><a href="<?=base_url();?>blog"><i class="icon-note"></i>BLOG</a></li>
        <li><a href="<?=base_url();?>contact"><i class="icon-pencil"></i>CONTACT ME</a></li>
        <li></li>
      <?php break; ?>

      <?php case 'contact': ?>
        <li><a href="<?=base_url();?>"><i class="icon-user"></i> ABOUT ME</a></li>
        <li><a href="<?=base_url();?>resume"><i class="icon-book-open"></i>RESUME</a></li>
        <li><a href="<?=base_url();?>portfolio"><i class="icon-rocket"></i>PORTFOLIO</a></li>
        <li><a href="<?=base_url();?>blog"><i class="icon-note"></i>BLOG</a></li>
        <li class="active"><a href="<?=base_url();?>contact"><i class="icon-pencil"></i>CONTACT ME</a></li>
        <li></li>
      <?php break; ?>


      <?php endswitch;?>
    </ul>
  </div>
</nav>
<!-- NAV LINKS END -->
