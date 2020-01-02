<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/loginPage.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/js/jquery/jquery-ui.min.css')?>">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="<?php echo base_url('assets/js/jquery/jquery.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery/jquery-ui.min.js')?>"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
<div class="header clearfix">
<h1>YOU NOTE</h1>
<P>Keep your Things Privet</P>
</div>
<div class="loginform clearfix">
    <div class="input clearfix">
        <?php echo form_open_multipart('welcome/login');?>
            <?php echo form_input(['name'=>'email','placeholder'=>'email','type'=>'email']);?><br>
            <?php echo form_password(['name'=>'Mpw','placeholder'=>'password','type'=>'password']);?><br>
            <?php echo form_submit(['name'=>'submit','value'=>'Next','type'=>'submit' , 'id'=>'regsub']);?><br>
            <a href="<?php echo base_url('index.php/welcome/regPage')?>">Create an Account </a>
        <?php echo form_close();?>
    </div>
    <div class="imge clearfix" id="imge">
            <?php 
				$Pid=$this->session->flashdata('Pid');
					if($this->session->flashdata('Pid')){
					$Pid=$this->session->flashdata('Pid');
					$Query = $this->db->query("SELECT * FROM imgs WHERE Pid=$Pid");
					foreach($Query->result() as $row){
						echo "
							<img src=".base_url('assets/img/picsOFusers/'.$row->URL)." id='image'>
						  ";
					echo form_open_multipart('welcome/picPWVeryfy?Pid='.$Pid);
						echo form_input(['name'=>'PX','id'=>'PX','type'=>'hidden']);
                        echo form_input(['name'=>'PY','id'=>'PY','type'=>'hidden']);
                        echo form_input(['name'=>'PX1','id'=>'PX1','type'=>'hidden']);
						echo form_input(['name'=>'PY1','id'=>'PY1','type'=>'hidden']);
						echo form_input(['name'=>'PX2','id'=>'PX2','type'=>'hidden']);
						echo form_input(['name'=>'PY2','id'=>'PY2','type'=>'hidden']);
						echo form_submit(['name'=>'submit','value'=>'Go','type'=>'submit' , 'id'=>'regsub']);
					echo form_close();
						}
					}
			?>
    </div>
</div>
    <script src="<?php echo base_url('assets/js/getPicPw/getPW.js')?>"></script>
    <script src="<?php echo base_url('assets/js/javaScript/javaScript.js')?>"></script>
</body>
</html>