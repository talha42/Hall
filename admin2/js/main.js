function authenticate() {
	var uname =  	'';
}
$(document).ready(function(){
	console.log('inside');	
	$('#submitlogin').on('click',function(){
		var username = $("[name='username']").val();
		var password = $("[name='password']").val();
		if(username != '' && password != ''){
			$.ajax({
				url: 'index.php',
				type: 'post',
				data: {'username':username,'password':password,'action':'authenticate'},
				success: function(data){
					console.log(data);
				},
				error: function(error){
					console.log(error);
				}
			});
		}
	});
	$('#registerdata').on('click',function(){
		console.log('firstname');
		var hallname = $("[name='hallname']").val();
		var username = $("[name='username']").val();
		var password=$("[name='password']").val();
		var email=$("[name='email']").val();
		var contact=$("[name='contact']").val();
		var state=$("[name='state']").val();
		var city=$("[name='city']").val();
		var area=$("[name='area']").val();
		var pincode=$("[name='pincode']").val();
		var landmark=$("[name='landmark']").val();
		var description=$("[name='description']").val();
		var photo=$("[name='photo']").val();
		var capacity=$("[name='capacity']").val();
		var price=$("[name='price']").val();
		var decoration=$("[name='decoration']").val();
		if(hallname  != '' && email!='' && username!='' && password!=''  && state!='' && city!='' && area!='' && pincode!='' && capacity!='' && decoration!=''){

			$.ajax({
				url:'index.php',
				type: 'post',
				
				data: {'hallname':hallname,'username':username,'email':email,'password':password,'contact':contact,'state':state,'city':city,'area':area,'pincode':pincode,'capacity':capacity,'price':price,'decoration':decoration,'photos':photo,'landmark':landmark,'description':description,'action':'register'},
				success: function(data){
					console.log(data);
				},
				error: function(error){
					console.log(error);
				}
			});

			
		}

	});
});


