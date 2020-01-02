<?php
   if(!$this->session->userdata('loggedIn')){
        redirect('welcome/loginpage');
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/log.css')?>">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="">
<nav class="navbar navbar-dark bg-dark navbar-expand-lg bg-light">
  <a class="navbar-brand" href="#">Keep things private</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
    <div class="form-inline my-2 my-lg-0">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('index.php/welcome/createnote');?>">Add Note</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="<?php echo base_url('index.php/welcome/logout');?>">logOut</a>
      </li>
    </ul>
    </div>
  </div>
</nav>
</div>
          
   
<div class="main_body bg-dark clearfix">
    <?php
        $uid=$_SESSION['uid'];
        $query=$this->db->query("SELECT * FROM note WHERE uid=$uid");
        if($query->num_rows()>0){
        foreach($query->result() as $row){
                echo "
                <div class='note clearfix'>
                        <div class='post_heding clearfix'>
                            <h1>".strtoupper($row->notetopic)."</h1>
                        </div>
                        <div class='post_body clearfix'>
                            ".$row->note."
                        </div>
                        <div class='actions clearfix'>
                            <a href=".base_url('index.php/welcome/viewCount?postid='.$row->Nid)." id='readmore'>Delete</a>
                        </div>
                </div>  
                    ";
            }
        }else{

       }
    ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>