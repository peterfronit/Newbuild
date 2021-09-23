<?php 
require_once "db_config.php";

$sql = "SELECT * FROM subscriber_list WHERE email LIKE '%gmail.com'";
$result = $link->query($sql);
?>





<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.2/css/dataTables.bootstrap4.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.2/js/dataTables.bootstrap4.min.js"></script>
	<script>
		$(document).ready(function() {
      $('#example').DataTable();
    } );
  </script>
</head>
<body>
	<div style="text-align: center;padding: 20px;">
		<a href="gmail_list.php">G-mail</a>
    <a href="yahoo_list.php">Yahoo</a>
    <a href="gmail_list.php">Outlook</a>
    <a href="others_list.php">Others</a>
	</div>
  <table id="example" class="table table-striped table-bordered" style="width:100%;padding: 30px;">
    <thead>
      <tr>
        <th>S.No</th>
        <th>E-mail</th>
        <th>Date</th>

      </tr>
    </thead>
    <tbody>
      <?php  if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "<tr><td>{$row['id']}</td><td>{$row['email']}</td><td>{$row['date']}</td></tr>\n";
        }
      } else {
        echo "0 results";
      }
      $link->close();?>
    </tbody>
    <tfoot>
      <tr>
        <th>S.No</th>
        <th>E-mail</th>
        <th>Date</th>

      </tr>
    </tfoot>
  </table>
</body>
</html>
