  <?php if(!$this->session->userdata('loggedIn')){
        redirect('welcome/lohinPage');
  }?>
    
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
<body>
    <div class="row">
      <div class="col-12">
        <?php include_once('nav.php') ?>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
          <div class="container mt-3">
              <h2>Create your Note</h2>
              <?php echo form_open_multipart('welcome/uplordnote');?>  
                  <input name="uid" type="hidden" value="<?php echo $_SESSION['uid']?>">
                  <label for="title">Titel</label><br>
                  <?php echo form_input(['name'=>'notetopic','placeholder'=>'Add title','type'=>'textbox','id'=>'topic']);?><br>
                  <br>
                  <textarea name="note" id="editor1"></textarea><br>
                  <?php echo "<button type='submit' class='btn btn-primary mr-3 mt-1'>Submit</button>";?><br>  
              <?php echo form_close();?>
          </div>
      </div>
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