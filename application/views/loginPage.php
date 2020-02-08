<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/loginPage.css')?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/js/jquery/jquery-ui.min.css')?>">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="<?php echo base_url('assets/js/jquery/jquery.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery/jquery-ui.min.js')?>"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
<div class="container">
<div class="row">
    <div class="col-12">
        <div class="row p-5">
            <div class="col-12 text-white">
                <h1>YOU NOTE</h1>
                <P>Keep your Things Privet</P>
            </div>
        </div>
        <div class="row">
            <div class="col-6 mr-3">
                <div class="row ">
                    <div class="col-12 p-5 border border-white rounded">
                        <div class="">
                            <?php echo form_open_multipart('welcome/login');?>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"  class="text-white">Email </label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="text-white">Password</label>
                                    <input type="password" class="form-control" name="Mpw" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary mr-3">Next</button>
                                <a href="<?php echo base_url('index.php/welcome/regPage')?>">Create an Account ? </a>
                            <?php echo form_close();?>
                        </div>
                    </div>
                </div>            
            </div>
            <div class="col-5" id="imge">
            <div class="border border-white rounded p-4 " id="imge">
            <?php 
				$Pid=$this->session->flashdata('Pid');
					if($this->session->flashdata('Pid')){
					$Pid=$this->session->flashdata('Pid');
					$Query = $this->db->query("SELECT * FROM imgs WHERE Pid=$Pid");
					foreach($Query->result() as $row){
						echo "
							<img src=".base_url('assets/img/picsOFusers/'.$row->URL)." style='width:400px;' id='image'>
						  ";
					echo form_open_multipart('welcome/picPWVeryfy?Pid='.$Pid);
						echo form_input(['name'=>'PX','id'=>'PX','type'=>'hidden']);
                        echo form_input(['name'=>'PY','id'=>'PY','type'=>'hidden']);
                        echo form_input(['name'=>'PX1','id'=>'PX1','type'=>'hidden']);
						echo form_input(['name'=>'PY1','id'=>'PY1','type'=>'hidden']);
						echo form_input(['name'=>'PX2','id'=>'PX2','type'=>'hidden']);
						echo form_input(['name'=>'PY2','id'=>'PY2','type'=>'hidden']);
						echo "<button type='submit' class='btn btn-primary mr-3 mt-2'>Next</button>";
					echo form_close();
						}
					}
			?>
    </div>
            </div>
        </div>
    </div>
</div>
</div>
    <script src="<?php echo base_url('assets/js/getPicPw/getPW.js')?>"></script>
    <script src="<?php echo base_url('assets/js/javaScript/javaScript.js')?>"></script>
</body>
</html>