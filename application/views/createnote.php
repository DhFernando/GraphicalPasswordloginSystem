<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/postUplordPage.css')?>">
    <title>Document</title>
    <script src="<?php echo base_url('assets/js/textEditor/ckeditor.js')?>"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="ml-5 mr-5">
<nav class="navbar navbar-dark bg-dark navbar-expand-lg bg-light">
  <a class="navbar-brand" href="#">Keep thing private</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('index.php/welcome/log');?>">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <div class="form-inline my-2 my-lg-0">
        <?php  
            echo "<h6 class='text-white'>"; 
                echo 'HELLO '.$this->session->userdata('fname');
            echo "<h6>";
        ?> 
         <a class= 'ml-3' href="<?php echo base_url('index.php/welcome/logout');?>">logOut</a>
    </div>
  </div>
</nav>
    <?php if(!$this->session->userdata('loggedIn')){
          redirect('welcome/lohinPage');
    }?>
    
       <div class="form mt-5">
       <h2>Create Post</h2>
            <?php echo form_open_multipart('welcome/uplordnote');?>  
                <input name="uid" type="hidden" value="<?php echo $_SESSION['uid']?>">
                <label for="title">Titel</label><br>
                <?php echo form_input(['name'=>'notetopic','placeholder'=>'Add title','type'=>'textbox','id'=>'topic']);?><br>
                <label for="title">Body</label><br>
                <textarea name="note" id="editor1"></textarea><br>
                <?php echo form_submit(['name'=>'submit','value'=>'POST','type'=>'submit','id'=>'post']);?><br>  
            <?php echo form_close();?>
       </div>
       <script src=".<?php echo base_url('assets/js/textEditor/ckeditor.js')?>."></script>
       <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
       <script>
                CKEDITOR.replace( 'editor1' );
        </script>
</body>
</html>