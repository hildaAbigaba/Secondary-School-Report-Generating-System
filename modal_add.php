	    <!-- Button to trigger modal -->
    <a class="btn btn-primary" href="#myModal" data-toggle="modal">Add Students</a>&nbsp;&nbsp;&nbsp;
    <a href="registerOne.php"><img src="images/S1.png" alt="S1"/></a>&nbsp;&nbsp;&nbsp;
    <a href="report.php"><img src="images/S2.png" alt="S1"/></a>&nbsp;&nbsp;&nbsp;
    <a href="#"><img src="images/S3.png" alt="S1"/></a>&nbsp;&nbsp;&nbsp;
    <a href="#"><img src="images/S4.png" alt="S1"/></a>&nbsp;&nbsp;&nbsp;<p align="right"><img src="images/budge.png"></p>
	<br>
	<br>
	<br>
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">

    <h3 id="myModalLabel">Add New Students</h3>
    </div>
    <div class="modal-body">
	
					<form method="post" action="add.php"  enctype="multipart/form-data">
					<table class="table1">
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">FirstName</label></td>
							<td width="30"></td>
							<td><input type="text" name="fname" placeholder="FirstName" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">MiddleName</label></td>
							<td width="30"></td>
							<td><input type="text" name="mname" placeholder="MiddleName" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">LastName</label></td>
							<td width="30"></td>
							<td><input type="text" name="lname" placeholder="LastName" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Address</label></td>
							<td width="30"></td>
							<td><input type="text" name="address" placeholder="Address" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Class</label></td>
							<td width="30"></td>
							<td><input type="text" name="Class" placeholder="Class" required /></td>
						</tr>
                        <tr>
							<td><label style="color:#3a87ad; font-size:18px;">Attendance</label></td>
							<td width="30"></td>
							<td><select name="attendance" class="" required>
                                              <option>Select_Attendance</option>
                                               <option>Present</option>
                                              <option>Absent</option></select></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Picture</label></td>
							<td width="30"></td>
							<td><input type="file" name="image" required /></td>
						</tr>
						
					</table>
					
	
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button type="submit" name="Submit" class="btn btn-primary">Add</button>
    </div>
	

					</form>
    </div>			