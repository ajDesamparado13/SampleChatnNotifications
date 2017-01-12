
	function addmsg(type, msg){
	$('#notification_count').html(msg);
	}

	function waitForMsg(){


	$.ajax({
	type: "GET",
	url: "unreadNotifications.php",

	async: true,
	cache: false,
	timeout:50000,

	success: function(data){
	addmsg("new", data);
	setTimeout(
	waitForMsg,
	1000
	);
	},
	error: function(XMLHttpRequest, textStatus, errorThrown){
	addmsg("error", textStatus + " (" + errorThrown + ")");
	setTimeout(
	waitForMsg,
	15000);
	}
	});
	};

function selectNotifications(){

	  if (window.XMLHttpRequest)
	   {
	// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
		}
	 else
	   {
	// code for IE6, IE5
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	 xmlhttp.onreadystatechange=function()
	   {
	   if (xmlhttp.readyState==4 && xmlhttp.status==200)
		 {
		document.getElementById("notification_body").innerHTML=xmlhttp.responseText;
		 }
	   }
	xmlhttp.open("GET","selectNotifications.php");
	xmlhttp.send();
	updateNotifications();
  }

  function updateNotifications(){
	   $.ajax({
		  type: "POST",
		url: "updateNotifications.php",
		});
}
function Logout(){
	$.ajax({
	   type: "POST",
	 url: "userlogout.php",
	 });
}

  function submitNotification(){

	  var title=document.getElementById("title").value;
	  var message=document.getElementById("message").value;
	  var dataString = 'title='+title+'&message='+message;

	  if(title==''||message==''){
		  alert(title);
	  }
	  else{
		$.ajax({
		  type:'POST',
		  url:"insertNotifications.php",
		  data:dataString,
		  cache:false,
		  success:function(html){
			  alert(html);
		  }
	  });
	  }
  }

function hide_boxes(){
$('.msg_box').hide();
$('.chat_body').hide();
$('.notification_body').hide();
};

$(document).on("click",".user",function(){
    $('.msg_footer').show();
    $('.msg_wrap').show();
    $('.msg_box').show();
    $('.recipient').html(this.id);
});

$(document).on("click",".close",function(){

$('.close').click(function(){
$('.msg_box').hide();
});

});

$(document).on("click",".msg_head",function(){

		$('.msg_wrap').slideToggle('slow');
		$('.msg_footer').slideToggle('slow');
})

$(document).ready(function(){
	waitForMsg();
	$('.notification_head').click(function(){
	$('.notification_body').slideToggle('slow');

});
	hide_boxes();
	$('.chat_head').click(function(){
		$('.chat_body').slideToggle('slow');
	});

	$('textarea').keypress(
    function(e){
        if (e.keyCode == 13) {
            e.preventDefault();
            var msg = $(this).val();
			$(this).val('');
			if(msg!=''){
                var receiver=$('.recipient').html();
				sendMessage(msg,receiver);
			}
			$('.msg_body').scrollTop($('.msg_body')[0].scrollHeight);
        }
    });
});


  function getMessages(){

      var receiver=$('.recipient').html();
      var datastring='receiver='+receiver;

	  $.ajax({
	  type: 'post',
	  url: 'selectMessages.php',
      data:datastring,
	  async: true,
	  cache: false,
	  timeout:50000,

	  success: function (response) {
	   // We get the element having id of display_info and put the response inside it
	   $( '.msg_body' ).html(response);
	   setTimeout(
		getMessages,
		1000)
	  }

	  });
  }


function getUsers(){

	 $.ajax({
	  type: 'post',
	  url: 'selectUsers.php',

	  async: true,
	  cache: false,
	  timeout:50000,

	  success: function (response) {
	   // We get the element having id of display_info and put the response inside it
	   $( '.chat_body' ).html(response);
	   setTimeout(
		getUsers,
		1000)
	  }

	  });
}
function sendMessage(){

    var message=arguments[0];
    var receiver=arguments[1]
	var dataString = 'message='+message+'&receiver='+receiver;


		$.ajax({
		  type:'POST',
		  url:"sendMessage.php",
		  data:dataString,
		  cache:false,
		  success:function(html){

		  }
	  });

}
