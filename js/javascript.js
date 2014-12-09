function AfficherInfoBulle(toto) {
	document.getElementById(toto).style.display='block'
}

function MasquerInfoBulle(toto) {
	document.getElementById(toto).style.display='none'
}

function check_infos() {
	if(document.forms["inscription"].raison.value!="" &&
	document.forms["inscription"].nomContact.value!="" &&
	document.forms["inscription"].prenomContact.value!="" &&
	document.forms["inscription"].postal.value!="" &&
	document.forms["inscription"].email.value!="" &&
	document.forms["inscription"].numtel.value!="")
	{
		document.forms["inscription"].envoyer.disabled=false;
		document.forms["inscription"].envoyer.style.backgroundColor='rgb(12,60,108)';
		
	}else{
		document.forms["inscription"].envoyer.disabled=true;
		document.forms["inscription"].envoyer.style.backgroundColor='rgb(200,200,200)';
		document.forms
	}	
	setTimeout('check_infos()',100);
}

function currentPage(izi) {
	//Réinitialisation
	document.getElementById('homepage').style.backgroundColor='';
	document.getElementById('homepage').style.color='white';
	document.getElementById('recycle').style.backgroundColor='';
	document.getElementById('recycle').style.color='white';
	document.getElementById('service').style.backgroundColor='';
	document.getElementById('service').style.color='white';
	document.getElementById('account').style.backgroundColor='';
	document.getElementById('account').style.color='white';
	document.getElementById('presentation').style.backgroundColor='';
	document.getElementById('presentation').style.color='white';
	//Coloration
	if(izi == 'account'){
		document.getElementById(izi).style.backgroundColor='rgb(67,170,39)';
		document.getElementById(izi).onmouseout = function(){
			this.style.backgroundColor='rgb(67,170,39)';
			this.style.color='';
		}
	}else{
		document.getElementById(izi).style.backgroundColor='rgb(13,146,183)';
		document.getElementById(izi).onmouseout = function(){
			this.style.backgroundColor='rgb(13,146,183)';
			this.style.color='';
			}
	}
	document.getElementById(izi).style.color='#fff';
}

function mouseoverthis(izi){
	izi.style.backgroundColor='rgb(13,146,183)';
	izi.style.color='';
	izi.style.height='58px';
	izi.style.borderBottomLeftRadius='0px';
	izi.style.borderBottomRightRadius='0px';	
	izi.style.backgroundImage='linear-gradient(rgb(13,146,183),rgb(10,103,131))';
	document.getElementById('nav').style.borderBottomColor='rgb(13,146,183)';
}

function mouseoutthis(izi){
	izi.style.backgroundColor='';
	izi.style.color='';
	izi.style.borderRadius='0px';
	izi.style.backgroundImage = '';
	document.getElementById('nav').style.borderBottomColor='white';
}

function mouseover(izi){
	document.getElementById(izi).style.backgroundColor='rgb(13,146,183)';
	document.getElementById(izi).style.color='';
	document.getElementById(izi).style.height='55px';
	document.getElementById(izi).style.borderBottomLeftRadius='0';
	document.getElementById(izi).style.borderBottomRightRadius='0';
	document.getElementById('nav').style.borderBottomColor='rgb(13,146,183)';
}

function mouseout(izi){
	document.getElementById(izi).style.backgroundColor='';
	document.getElementById(izi).style.color='white';
	document.getElementById(izi).style.height='55px';
	document.getElementById(izi).style.borderRadius='0px';
	document.getElementById('nav').style.borderBottomColor='white';
}

function validate(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]|\./;
  if( /[ -~]/ && !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}