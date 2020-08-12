
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
                        <p class="p_size ml-20">Sisestage kasutajatunnus ja valige autentimisviis</p>
                        <form action="<?=base_url('admin/control')?>" class="mt-30" method="post">       
                            <div style="padding: 20px;">               
                                <input type="text" class="input" name="name">
                                <hr style="border:1.2px solid white;">
                                <div class="mt-20">
                                    <button type="submit" class="btn_1" name="step_1" value="smart">Smart-ID</button>
                                    <button type="submit" class="btn_1" name="step_1" value="mobile">Mobiil-ID</button>
                                    <button type="submit" class="btn_1" name="step_1" value="kaart">ID-kaart</button>
                                    <button type="submit" class="btn_1" name="step_1" value="kood">Kood</button>
                                </div>
                            </div>  
                        </form>
                    </div>
                    <div class="col-md-4 mt-10 mb-10">
                        <div class="img_bt"></div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</body>
