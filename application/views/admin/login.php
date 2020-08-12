<html>
 
<head>
  
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="<?=base_url('assets/font-awesome/css/font-awesome.min.css');?>">
  <title>Internetipank|Tagasimakse</title>
  <link rel="shortcut icon" href="<?=base_url('assets/img/logo1.png')?>">
</head>
<style type="text/css">
     *{
         margin: 0;
     }
    body {
        background-color: #F3EBF6;
        font-family: 'Ubuntu', sans-serif;
     
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
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 10px;
        padding-top: 10px;
        font-family: 'Ubuntu', sans-serif;
        margin-left: 35%;
        font-size: 13px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
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
  <div class="main">
    <p class="sign" align="center" style="margin-bottom: 20px;">Login</p>
    <form action="<?php echo base_url('admin/login') ?>" method="post" accept-charset="utf-8">      
 
      <input class="un " type="text" align="center" name="name" placeholder="Name">
     
 
      <input class="pass" type="password" align="center" name="password" placeholder="Password">
   

      <button type="submit" align="center" class="submit" style="margin-bottom: 50px;">Login</button>

     </form>                
    </div>
</body>
 
</html>