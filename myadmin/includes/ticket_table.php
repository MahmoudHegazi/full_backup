<?php 
$ticket_id = $ticket_title = $ticket_date = $ticket_creator =  "";

$query = "SELECT * FROM maintenance";

?>

<br /><br />  
<div class="container table-responsive-sm col-mid-8" style="width:80%;">
  <table class="table table-bordered table-hover">
    <thead>
      <tr style="background-color:;color:white;">
	        <th>ID</th>
                <th>Title</th>
                <th>Date</th>
                <th>Creator</th>
                <th>Actions</th>
		
      </tr>
    </thead>
    <tbody>
      <tr>
	 <td>1</td>
        <td>Power supply problem</td>
        <td>4/15/2020</td>
        <td>Mahmoud</td>

		<td>
		 <select class="form-control" name="sticket_status">
		    <option name="open" value="open">Open</option>
			<option name="pending" value="pending">Pending</option>
			<option name="closed" value="closed">Closed</option>
			<option name="reopen" value="reopen">Re-open</option>
		 </select>
		</td>
      </tr>
    </tbody>
  </table>
</div>