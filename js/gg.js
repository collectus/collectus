function gear(){
		$("#sel2").bind("change",function()
		{
			var sel1=$("#sel1 option:selected").val();
			var sel2=$("#sel2 option:selected").val();
			$("#sel3").attr("disabled","disabled");
			if(sel1==1){
				$("#psel3").slideDown("fast");
				$("#gearimg3").attr("src","/style/gfx/gear/gear3.png");					
				$("#sel3").removeAttr('disabled');
			}else{
				$("#sel3").empty();
				if(sel1==2){
					$("#gearimg6").attr("src","/style/gfx/gear/gear4b.png"); //detail	
					$("#sel6").empty();
					$("#sel6").attr('disabled','disabled');
					$("#psel6").slideUp("fast");
				}else if(sel1==3){
					$("#sel7").empty();
					$("#sel8").empty();
					$("#psel7").slideUp("fast");
					$("#psel8").slideUp("fast");
					$("#sel7").attr('disabled','disabled');
					$("#sel8").attr('disabled','disabled');
					$("#gearimg7").attr("src","/style/gfx/gear/gear4b.png");
					$("#gearimg8").attr("src","/style/gfx/gear/gear5b.png");
				}
			
				if(sel2!='0'){
					$.ajax({
						 type:"POST",url:"/launch-simulator.htm",data:"sel1="+sel1+"&sel2="+sel2,dataType:"html",cache:false,async:false,success:function(data){
							data = $.parseJSON(data);
							$("#psel3").slideDown("fast");
							$("#gearimg3").attr("src","/style/gfx/gear/gear3.png");					
							$("#sel3").removeAttr('disabled');
							$("#sel3").empty();
							$("#sel3").append(data[1])
							if(data[0]==1){
								if(sel1==2){
										$("#psel6").slideDown("fast");
										$("#gearimg6").attr("src","/style/gfx/gear/gear4.png");					
										$("#sel6").removeAttr('disabled');
										$("#sel6").empty();
										$("#sel6").append(data[3]);									
									if(data[2]==1){
										$('#sel5').removeAttr('disabled');
										$("#gearimg5").attr("src","/style/gfx/gear/gear5.png");								
										$("#psel4").slideDown("fast");
									}								
								}else if(sel1==3){
									$("#psel6").slideDown("fast");
									$("#gearimg6").attr("src","/style/gfx/gear/gear6.png");					
									$("#sel6").removeAttr('disabled');
									$("#sel6").empty();
									$("#sel6").append(data[3]);									
									if(data[2]==1){
										$('#sel7').removeAttr('disabled');
										$("#gearimg7").attr("src","/style/gfx/gear/gear4.png");
										$("#psel7").slideDown("fast");
										$("#sel7").append(data[3])	
									}																
									if(data[4]==1){
										$('#sel8').removeAttr('disabled');
										$("#gearimg8").attr("src","/style/gfx/gear/gear5.png");
										$("#psel8").slideDown("fast");
										$("#sel8").append(data[5])	
										
										$('#sel5').removeAttr('disabled');
										$("#gearimg5").attr("src","/style/gfx/gear/gear5.png");								
										$("#psel4").slideDown("fast");										
										
									}									
								}								
							}
						}
					})
				}else{
					$("#gearimg3").attr("src","/style/gfx/gear/gear3b.png");
				}
			}
		});
		
		/*
			enlevement niveau 3
		*/
		$("#sel3").bind("change",function(){
			var sel1=$('#sel1 option:selected').val();
			var sel2=$('#sel2 option:selected').val();
			var sel3=$('#sel3 option:selected').val();
			
			if(sel1==1){
				var sel = 4;
			}else if(sel1==2){
				var sel = 6;
			}else if(sel1==3){
				var sel = 7;
				$("#sel8").empty();
				$("#sel8").attr('disabled','disabled');
				$("#gearimg8").attr("src","/style/gfx/gear/gear5b.png");
				$("#psel8").slideUp("fast");
			}
			
			if(sel1>1){
				if(sel3!='0'){
					$.ajax({
						type:"POST",
						url:"/launch-simulator.htm",
						data:"sel3="+sel3+"&sel1="+sel1+"&sel2="+sel2,
						dataType:"html",
						cache:false,
						async:false,
						success:function(data){							
							data = $.parseJSON(data);
							$("#psel"+sel).slideDown("fast");
							$("#gearimg"+sel).attr("src","/style/gfx/gear/gear4.png");					
							$("#sel"+sel).removeAttr('disabled');
							$("#sel"+sel).empty();
							$("#sel"+sel).append(data[3]);
							if(data[2]==1){
								if(sel1==2){
									$('#sel5').removeAttr('disabled');
									$("#gearimg5").attr("src","/style/gfx/gear/gear5.png");								
									$("#psel4").slideDown("fast");
								}else if(sel1=3){
									$('#sel8').removeAttr('disabled');
									$("#gearimg8").attr("src","/style/gfx/gear/gear5.png");								
									$("#psel8").slideDown("fast");	
									$("#sel8").append(data[5]);									
									
									if(data[4]==1){
										$('#sel5').removeAttr('disabled');
										$("#gearimg5").attr("src","/style/gfx/gear/gear5.png");								
										$("#psel4").slideDown("fast");											
									}
								}
							}								
						}
					})
				}else{
					$("#sel"+sel).empty();
					$("#sel"+sel).attr('disabled','disabled');
					$("#gearimg"+sel).attr("src","/style/gfx/gear/gear4b.png");
				}
			}else{
				$("#gearimg"+sel).attr("src","/style/gfx/gear/gear4.png");						
				$("#psel"+sel).slideDown("fast");	
				$("#sel"+sel).removeAttr('disabled');
			}
			
		});
		
		//accessibilite				
		$("#sel4").bind("change",function()
		{		
			var sel4=$('#sel4 option:selected').val();
			if(sel4==5){
				$("#psel5").slideDown("fast");
				$('#sel5').removeAttr('disabled');
			}else{
				$("#sel5").attr('disabled','disabled');
				$("#psel5").slideUp("fast");		
			}
		});	

		
		/*
			enlevement détail niveau 4
		*/
		$("#sel6").bind("change",function()
		{
			var sel3=$('#sel3 option:selected').val();
			$('#sel5').removeAttr('disabled');
			$("#gearimg5").attr("src","/style/gfx/gear/gear5.png");									
			if(sel3!='0'){
				$("#psel4").slideDown("fast");
			}
		});		

		
		/*
			enlevement niveau 7 (marque -> modele)
		*/
		$("#sel7").bind("change",function()
		{
			var sel1=$('#sel1 option:selected').val();
			var sel2=$('#sel2 option:selected').val();
			var sel3=$('#sel3 option:selected').val();
			var sel4=$('#sel7 option:selected').val();
			if(sel4!='0'){
				$.ajax({
					type:"POST",url:"/launch-simulator.htm",data:"sel4="+sel4+"&sel3="+sel3+"&sel1="+sel1+"&sel2="+sel2,dataType:"html",cache:false,async:false,success:function(data){
						data = $.parseJSON(data);
						$("#psel8").slideDown("fast");
						$("#gearimg8").attr("src","/style/gfx/gear/gear5.png");	
						$("#sel8").removeAttr('disabled');
						$("#sel8").empty();
						$("#sel8").append(data[5])
						$('#sel4').removeAttr('disabled');
					}
				})
			}else{
				$("#sel8").empty();
				$("#sel8").attr('disabled','disabled');
				$("#gearimg8").attr("src","/style/gfx/gear/gear5b.png");
			}			
		});	
		
		//enlevement marque niveau 4
		$("#sel8").bind("change",function()
		{
			var sel3=$('#sel3 option:selected').val();
			$('#sel4').removeAttr('disabled');
			$("#gearimg6").attr("src","/style/gfx/gear/gear6.png");									
			if(sel3!='0'){
				$("#psel4").slideDown("fast");
			}
		});				
				
	}	
	
	/*
		simulateur
	*/
	$("#sel1").bind("change",function()
	{
		$("#gearlist").slideUp("normal");
		var sel1=$('#sel1 option:selected').val();
		if(sel1!='0'){	
			$.ajax({
				type:"POST",url:"/launch-simulator.htm",
				data:"sel1="+sel1,
				dataType:"html",
				cache:false,
				async:false,
				success:function(data){
					$("#gearlist").slideDown("normal");
					$("#gearlist").empty();
					$("#gearlist").html(data);
				}
			})
		}		
		gear();	
	});