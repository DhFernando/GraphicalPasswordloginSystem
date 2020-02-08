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
<div>
   <?php include_once('nav.php'); ?>
</div>

<div class="container border rounded mt-3 p-5">
<?php
        $uid=$_SESSION['uid'];
        $query=$this->db->query("SELECT * FROM note WHERE uid=$uid");
        if($query->num_rows()>0){
          echo "<div class='row' >";
          foreach($query->result() as $row){
            echo "
            <div class='p-3 m-2 ml-4 mr-4 col-5 border'>
              <div class=''>
                  <h5>".strtoupper($row->notetopic)."</h5>
                  <hr>
              </div>
              <div class=''>
                  ".$row->note."
              </div>
              <div class='row'>
                  <div class='col-12'>
                    <a  href=".base_url('index.php/welcome/viewCount?postid='.$row->uid)." class= 'btn btn-sm btn-danger float-right ml-1'>Delete</a>
                    <a  href=".base_url('index.php/welcome/viewCount?postid='.$row->uid)." class= 'btn btn-sm btn-secondary float-right'>Edit</a>
                  </div>
              </div>
            </div> ";
        }
        echo "</div>";
        }else{

       }
    ?>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>