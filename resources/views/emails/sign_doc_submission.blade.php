<!DOCTYPE html>
<html>
<body>

	<h2 style="font-size: 41px;    margin: 13px 0 0;">Great News ,</br>{{ $client['name'] }}!</h2>
	<p>Your bankruptcy petition is ready for review and signatures. Please see attached PDF document. </p>
	<p>Once you have reviewed, printed, and signed all pages that need your signature: </p>
	<p>Please upload the executed petition back into the system for filing. </p>
	<p><a href="{{route('client_login')}}">Log back</a> into the Online system: </p>
	<p>Please click on this <a href="{{$sign_doc}}" download>signature</a> for more information.</p>
	
	<p>Thank You,</p>
	<p>{{$attorney_name}}</p>
	
	
</body>
</html>