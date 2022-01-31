<!DOCTYPE html>
<html>
<body>

	<h2 style="    font-size: 41px;    margin: 13px 0 0;">Hello ,</br>{{ $user['name'] }}!</h2>
	<p style="  font-size: 20px;    line-height: 30px;">
		You have got a edit request.You can now modify the your form as per attorney comments Please check the below message of attorney.
	</p>
	<p>Section where you have to do modifications:{{$editable_tabs}} </p>	
	<p style="  font-size: 20px;    line-height: 30px;">Message:</p>
	<p style="  font-size: 20px;    line-height: 30px;">{{$message_info}}</p>
	<p style="  font-size: 20px;    line-height: 30px;">
	Thanks,<br>Law
	</p>
	
</body>
</html>