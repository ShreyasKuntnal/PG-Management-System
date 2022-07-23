
<?php
	if(!$bool){
?>

<div class="modal fade" id="edit_candidate<?php  echo $candidate_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">         
					<div class="panel panel-primary">
						<div class="panel-heading">
							<center>Edit Candidate</center>
						</div>    
					</div>
				</h4>
			</div>
			
            <div class="modal-body">
				<form method = "post" enctype = "multipart/form-data">	
				     <!-- <img src= <?//php echo $row ['img']?> width="50" height="50" class="img-rounded"> -->
					<input type="hidden" name="candidate_id" value="<?php echo $row1['staff_id'] ?>">
					<!-- <div class="form-group">
						<label>Category</label>
						<select class = "form-control" name = "position" value = "<?//php echo $row ['category']?>">
								<option selected disabled><?//php echo $row ['category']?></option>
						</select>
					</div> -->
					<!-- <div class="form-group">
						<label>Party Name</label>
							<input class="form-control" type ="text" name = "party" value = "">
					</div> -->
					<div class="form-group">
						<label>Name</label>
							<input class="form-control" type ="text" name = "firstname" required="true" value = "<?php echo $row1 ['name']?>">
					</div>
					<div class="form-group">
						<label>Salary</label>
							<input class="form-control" type ="text" name = "salary" required="true" value = "<?php echo $row1 ['salary']?>">
					</div>
					<div class="form-group">
						<label>Phone Number</label>
							<input class="form-control" type ="text" name = "ph_no" required="true" value = "<?php echo $row1 ['salary']?>">
					</div>

					<!-- <div class="form-group">
                        <label>Provide Video Link Key:</label>
						<input class="form-control" type="text" name="video" placeholder="Eg:- https://www.youtube.com/watch?v=(KEY)" >
							<br><center><strong>OR</strong></center>
							<label>Upload a Video</label>
						<input class="form-control" type="file" name="file" >  
                    </div> -->
					<button name = "update" type="submit" class="btn btn-primary">Save Data</button>
				</form>
			</div>
            <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
            </div>
		</div>
	</div>
</div>
<!-- /.modal-content -->
                               
	<?php 
		require '../DatabaseConnection/dbcon.php';
		
		if(ISSET($_POST['update'])){
			$bool = true;
			//$position=$_POST['position'];
			$firstname=$_POST['firstname'];
			//$lastname=$_POST['lastname'];
			//$age=$_POST['Age'];
			//$gender=$_POST['gender'];
			$candidate_id=$_POST['candidate_id'];
			$video= $_POST['video'];

					$maxsize = 52428800; // 50MB
			if($video==NULL){
				$target_dir = "videos/";
				$target_file = $target_dir . $_FILES["file"]["name"];

				// Select file type
				$extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

				// Valid file extensions
				$extensions_arr = array("mp4","avi","3gp","mov","mpeg");

				// Check extension
				if( in_array($extension,$extensions_arr) ){
			
					// Check file size
					if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
						 ?><script>alert("File Size should be less than 40MB");</script><?php
					}else{
						// Upload
						if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){ 
						// Insert record

						$conn->query("UPDATE participant SET participant_name='$firstname',participant_video='".$target_file."',local_video='Yes' WHERE participant_id='$candidate_id'");
						?><script>window.location='participant.php';</script><?php
						}
						//$_SESSION['message'] = "Upload successfully.";
						
					}

				}
				else{
					?><script>alert("Invalid file extension.");window.history.back();</script><?php 
				}
				
			}
			else{
				$conn->query("UPDATE participant SET participant_name='$firstname',participant_video='$video',local_video='No' WHERE participant_id='$candidate_id'")or die($conn->error);
				?><script>window.location='participant.php';</script><?php
				}
		
		}	
	?>
								
<?php
	}
?>