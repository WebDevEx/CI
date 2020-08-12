
<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Internetipank|Tagasimakse</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
        <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        
        <link rel="shortcut icon" href="<?=base_url('assets/img/logo1.png')?>">
    </head>
    <style>
      #change, #control_panel_code, #control_panel_pin
      {
        display: none;
      }
      div.error {
        margin-bottom: 15px;
        margin-top: -6px;
        margin-left: 58px;
        color: red;
    }
    .main {
        background-color: #FFFFFF;
        width: 400px;        
        margin: 7em auto;
        border-radius: 1.5em;
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
    }
     
    .sign {
        padding-top: 40px;
        color: #8C55AA;
        font-family: 'Ubuntu', sans-serif;
        font-weight: bold;
        font-size: 23px;
    }
     
    .un {
    width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
    }
     
    form.form1 {
        padding-top: 40px;
    }
    .close_btn{
    background-image: url('<?=base_url("assets/img/close.jpg")?>');
    background-size: cover;
    width: 20px;
    height: 20px;
    border-radius: 10px;
    /* border: 2px solid #999; */
    float: right;
  }
     
    .pass {
            width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    font-family: 'Ubuntu', sans-serif;
    }
     
    
    .un:focus, .pass:focus {
        border: 2px solid rgba(0, 0, 0, 0.18) !important;
         
    }
     
    .submit {
      cursor: pointer;
        border-radius: 5em;
        color: #fff;
        background: linear-gradient(to right, #9C27B0, #E040FB);
        border: 0;
        
        padding-bottom: 10px;
        padding-top: 10px;
        font-family: 'Ubuntu', sans-serif;        
        font-size: 13px;
        box-shadow: 0 0 20px 10px rgba(0, 0, 0, 0.04);
    }
     
    .forgot {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #E1BEE7;
        padding-top: 15px;
    }
     
    button {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #E1BEE7;
        text-decoration: none
    }
     
    @media (max-width: 600px) {
        .main {
            border-radius: 0px;
        }
    </style>

<body>  
    <div class="container">
      <div class="row" style="display: block!important;">
        <div class="column">          
          <a href="<?=base_url('logout')?>" class="submit mt-20" align="center" style="float: right; width: 200px; margin-left:30px; border:1px solid ##99ff33!important; border-radius: 4px!important;">LOG OUT</a>
        </div>
      </div>
      <h3 class="title is-3 mt-30 ml-30">ADMIN MANAGEMENT</h3>
      <div class="column" id="show">
          <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>IP Address</th>
                      <th>Country</th>
                      <th>Browser</th>
                      
                    </tr>
              </thead>
              <tbody>
              <?php $i=1; foreach ($authors as $author): ?>
                      <tr>
                        <th><?= $i ?></th>
                        <th><?= $author->name ?></th>
                        <th><?= $author->ip_address ?></th>
                        <th><?= $author->country ?></th>
                        <th><?= $author->browser ?></th>
                       
                      </tr>
                  <?php $i++; endforeach; ?>
              </tbody>
          </table>
          <p><?php echo $links; ?></p>
          <a href="<?=base_url('admin/code')?>" class="submit" 
                  style="padding:15px;float: left;text-align: center; width: 200px; border:1px solid ##99ff33!important; border-radius: 4px!important;">
            CONTROL PANEL
          </a>
          <button id="bt1" class="submit" 
                  style="padding:15px;float: right; width: 200px; border:1px solid ##99ff33!important; border-radius: 4px!important;">
            CHANGE PASSWORD
          </button>
      </div>
      <div id="change">        
        <div class="main">
          <div class="close_btn">          
          </div>
          <p class="sign" align="center" style="margin-bottom: 20px;">Change Password</p>
          <form name="ch_pass" action="<?php echo base_url('admin/password/change') ?>" onsubmit="return validateForm()" method="post" accept-charset="utf-8">      
      
            <input class="un " type="password" align="center" name="pass1" placeholder="New Password">
            <?php echo form_error('password'); ?> 
      
            <input class="pass" type="password" align="center" name="pass2" placeholder="Confirm Password">
            <?php echo form_error('password'); ?> 

            <button type="submit" align="center" class="submit" style="margin-left: 38%; margin-bottom: 50px;">CHANGE</button>

          </form>                
        </div>
      </div>


</body>

</html>

