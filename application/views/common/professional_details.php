<h5 class="tittle">Professional Details</h5>
<img src="<?=base_url($details['avatar']);?>" class="col-md-offset-1 img-responsive img-rounded" alt="" style="margin-top: 5%;border:1px solid grey;">
<ul class="personal-info">
	<li><p><span> Name</span> <?=$details['name'];?> </p></li>
	<li><p> <span> Age</span> <?=$details['age'];?> Years </p></li>
	<li><p> <span> Location</span> <?=$details['location'];?></p></li>
	<li><p> <span> Experience</span> <?=$details['experience'];?> </p></li>
	<li><p> <span> Degree</span>
			<span style="font-weight: normal;line-height: 25px;"><?=$details['degree'];?></span> 
		</p>
	</li>
	<br>
	<li>
		<p> <span> Phone</span> (91) <?=$details['phone'];?> </p>
	</li>
	
	<li>
	  <p> <span> Website</span><a href="#" onclick="alert('You are on my website.');"> <?=$details['website'];?> </a></p>
	</li>
</ul>