<!DOCTYPE html>
<html>
<body>

	<h2 style="    font-size: 41px;    margin: 13px 0 0;">Welcome <?php if(!empty($user['role']) && $user['role']==3) {?>to {{$attorney->company_name}} <?php }?>,</br>{{ $user['name'] }}!</h2>
	<?php if(!empty($subscription_video)){?>
		<?php if(!empty($thumbnail_video_image) && file_exists(public_path().'/'.$thumbnail_video_image)){?>
			<a href='{{url($subscription_video)}}'><img class="profile-user-img img-responsive img-circle" id="imagePreview" src="{{url($thumbnail_video_image)}}" alt="User profile picture" width="400" height="400"></a>
		<?php }else{?>
			<a href='{{url($subscription_video)}}'><img class="profile-user-img img-responsive img-circle" id="imagePreview" src="{{url('assets/images/user/avatar-2.jpg')}}" alt="User profile picture" width="400" height="400"></a>
		<?php }?>
		
	<?php }else{?>
	<?php if(!empty($user['role']) && $user['role']==2) {?>
	<p>Thank you for choosing BK Assistant, Inc. for your bankruptcy client needs. If you have any issues or have any suggestions as to how we can make changes to better assist you or your clients, please give us your feedback. We your feedback, it helps us be a better partner.</p>
	<?php $login=(!empty($user['role']) && $user['role']==2)?'login':'client_login';?>
	<p>Your login is:<a href="{{route($login)}}" target="_blank" style=" color: #33c9c4;">Login your Account</a></p>
	<p>Don’t forget to upload your law firm logo to our site.</p>
	<p>We created this site from 13.5 years of hands-on bankruptcy experience. We prepare
		bankruptcy petitions in all 4 California Districts. We prepare chapter 7 & 13 petitions. We
		contract with over 15 different bankruptcy law firms. Mike Croak founded BK Assistant, Inc. in
		June 2010. Any feedback (negative or positive) would be really appreciated. My goal is to create
		the best bankruptcy software and interface in the bankruptcy marketplace.</p>
	<p>Mike Croak</p>
	<p>Direct Phone Number: 714-791-4106</p>
	<p>Direct Email: mcroak@bkassistant.net</p> 
	
	<?php }else{?>
		<p style="  font-size: 20px;    line-height: 30px;">
			Congratulations on starting your journey with Us.
			We're excited you're here and have give us your trust to help guide you through bankruptcy process.
		</p>
		<p>Please click the link below and fill out the online questionnaire to get started.</p>
	<?php }?>
	<?php if(!empty($user['role']) && in_array($user['role'],['2','3'])&& $regiser==false){?>
		<p style="  font-size: 20px;    line-height: 30px;"><a href="{{route('password.request')}}" target="_blank" style=" color: #33c9c4;">Generate your Password and Login</a></p>
	<?php }?>
	<?php if(!empty($user['role']) && $user['role']==3) {?>
		<?php $login=(!empty($user['role']) && $user['role']==2)?'login':'client_login';?>
		<p style="  font-size: 20px;    line-height: 30px;"><a href="{{route($login)}}" target="_blank" style=" color: #33c9c4;">Login your Account</a></p>
	<?php  }?>
<?php  }?><?php //subscription_video else end?>
	<p style="  font-size: 20px;    line-height: 30px;">
	Thanks,<br>
	<?php if(!empty($user['role']) && $user['role']==3) {?>
		<?php if(!empty($attorney->name)){?>
			{{$attorney->name}}
		<?php }?>
	<?php }else{?>
		Law
	<?php }?>
	</p>
	
</body>
</html>