
<?php
if(isset($_GET['json'])){
 //store file data
  $output = [];
  require_once('process.php');
    ?>
      <!DOCTYPE html>
     <html lang="en">
     <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> 
       <link rel="stylesheet" href="style.css">     
       <title>Document</title>
       
     </head>
     <body>
     <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Message</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sno = 1;
    // loop through stored data
    foreach($outputs as $output){
      $valid_output = json_decode($output);
      $explode = explode(" ",$output); 
       
      ?>
    <tr class=<?php echo $valid_output ? 'msg':'wrong';?>>
      <th scope="row"><?php echo $sno;?></th>
      <td><?php echo $explode[4];?></td>
      <td><?php echo $valid_output ? $valid_output : $output;?></td>
      <td><?php echo $valid_output ? 'Pass':'Fail';?></td>
    </tr>  
 
   <?php $sno++;}?>
    </tbody>
    </table>
    </body>
    </html>
  <?php 
  
  flush();
}
?>