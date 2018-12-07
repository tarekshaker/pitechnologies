<!DOCTYPE html>
<!-- Add font awesome icons -->
<div class="icons" id="icon">


<a href="<?php foreach($contact as $active)
{
	if($active->facebook !=NULL)
	{
		echo $active->facebook;
	}
}?>"  class="fa fa-facebook" target="_blank"></a>
<a href="<?php foreach($contact as $active)
{
	if($active->twitter !=NULL)
	{
		echo $active->twitter;
	}
	
}?>"  class="fa fa-twitter" target="_blank"></a>
<a href="<?php foreach($contact as $active)
{
	if($active->youtube !=NULL)
	{
		echo $active->youtube;
	}

}?>"  class="fa fa-youtube" target="_blank"></a>
<a href="<?php foreach($contact as $active)
{
	if($active->linkedin !=NULL)
	{
		echo $active->linkedin;
	}
	
}?>"  class="fa fa-linkedin" target="_blank"></a>
<a href="<?php foreach($contact as $active)
{
	if($active->google !=NULL)
	{
		echo $active->google;
	}
}?>"  class="fa fa-google" target="_blank"></a>
</div>



      

