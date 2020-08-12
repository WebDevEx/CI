<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Internetipank|Tagasimakse</title>

  <!-- Bootstrap Core CSS -->
  <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css">
  <!-- Squad theme CSS -->
  <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
  <script src="<?=base_url('assets/slide1/js/jquery-1.10.2.min.js')?>"></script>
    <link rel="shortcut icon" href="<?=base_url('assets/img/logo1.png')?>">

</head>
<body>
    <div class="header">
        <div class='container'>
            <div class="row">
                <div class="col-md-12">
                    <ul class="langselect mt-10">
                        <li class="active">
                            <a href="#" class="et" onclick="SetLang('EST');Unet_FormSubmitOnClick('mylangform','','','','1');return false;">
                                <span>Eesti</span>
                            </a>
                        </li>&nbsp|
                        <li>
                            <a href="#" class="en" onclick="SetLang('ENG');Unet_FormSubmitOnClick('mylangform','','','','1');return false;">
                                <span>English</span>
                            </a>
                        </li>&nbsp|
                        <li>
                            <a href="#" class="ru" onclick="SetLang('RUS');Unet_FormSubmitOnClick('mylangform','','','','1');return false;">
                                <span>Pусский</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>        
    </div>
    <div class="header1">
        <div class="container">
            <div class="logo mb-20">
                <a href="<?=base_url('');?>"><img src="<?=base_url('assets/img/logo1.png')?>" alt="" width="70"></a>
            </div>
            <div class="logo_title">
                Internetipank
            </div>
        </div>
    </div>