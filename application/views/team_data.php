
<!-- page content -->
<div class="right_col" role="main">
	<div class="row">
		<div class=" col-sm-12 col-md-12 col-lg-12">
			<div class='text-center'>
				<div class="card card-info">
					<?php if (isset($_SESSION["delete_staff"])): ?>
					<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>Success!</strong> <?php echo $_SESSION["delete_staff"]; ?>
					</div>
					<?php endif ?>
					<?php if (isset($_SESSION["select_staff"])): ?>
					<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>Success!</strong> <?php echo $_SESSION["select_staff"]; ?>
					</div>
					<?php endif ?>
					<div class="card-header">
						<h3 class="card-title text-left">List of Team Data</h3>
					</div>
					<div class="card-body">
						<div class="col-lg-12">
							<form name='selectForm' action='' method='post'>
								<table id="datatable" class="table table-striped table-bordered" style="width:100%">
									<thead>
										<tr>
											<th>S.No</th>
											<th>Emp ID</th>
											<th>Biometric</th>
											<th>Offer Letter</th>
											<th>No Due</th>
											<th>Relieving Letter</th>
											<th>Status</th>
											<th style='width:100px;'></th>
										</tr>
									</thead>
									<tbody>
										<form action="" method="get">
                                            <?php if($TEAM_DATA == 0){ ?>
                                                <h2>No Found Regards</h2>
                                            <?php } else {
                                                $count = 1; foreach( $TEAM_DATA as $value ){ ?>
											<tr>												
												<td><?php echo $count++; ?></td>
												<td>
                                                    <button type="button" id="button" class="btn" onClick="setBiometric(<?php echo $value->personal_id;?>)">
                                                        <b><?php if(!empty($value->emp_id)){ echo $value->emp_id; } else { ?>
                                                         <span class='btn btn-sm btn-danger'>Pending</span><?php } ?>
                                                    </button>    
                                                </td>
												<td>
                                                    <button type="button" id="button" class="btn" onClick="setBiometric(<?php echo $value->personal_id;?>)">
                                                        <b><?php if($value->status == 0){ ?><span class='btn btn-sm btn-success'>Given</span><?php }
                                                        else { ?> <span class='btn btn-sm btn-danger'>Pending</span><?php } ?>
                                                    </button>
                                                </td>
                                                <td>
                                                    <button type="button" id="button" class="btn" onClick="setOffer(<?php echo $value->personal_id;?>)">
                                                        <b><?php if($value->offer_letter == 1){ ?><span class='btn btn-sm btn-success'>Given</span><?php }
                                                        else { ?> <span class='btn btn-sm btn-danger'>Pending</span><?php } ?>
                                                    </button>
                                                </td>
												<td><?php echo $value->no_due; ?></td>
                                                <td><?php echo $value->relieving_letter ?></td>
												<td>
                                                    <button type="button" id="button" class="btn" onClick="getStatus(<?php echo $value->personal_id;?>)">
                                                        <b><?php if($value->status == 1){ ?><span class='btn btn-sm btn-success'>Active</span><?php }
                                                        else { ?> <span class='btn btn-sm btn-danger'>Deactive</span><?php } ?>
                                                    </button>                                                
                                                </td>
												<td style='width:120px'>
                                                    <button type='button' class='btn btn-sm btn-info' name='select_status' data-toggle="modal" 
                                                    data-target="#print<?php echo $value->personal_id;?>"><i class='fa fa-eye'></i></button>

													<a href="<?php echo base_url() ?>print_pdf/pdf_download?&personal_id=<?php echo $value->personal_id;?>"
                                                        class='btn btn-sm btn-danger' id='pdf_download' target='top'><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <i class="fa fa-download" aria-hidden="true"></i></a>
                                                        <div class="modal fade" id="print<?php echo $value->personal_id;?>">
                                                </div>                                                            													
												</td>
											</tr>
											<?php }  }?>
										</form>
									</tbody>
								</table>
						</div>
					</div>
					<div class="col-lg-12 card-footer ">
						<!-- <?php  if($_SESSION['roll_type_id'] == '0' && $_SESSION['username'] == 'developer'){  ?>
						<div class="form-inline col-lg-1 float-right">
							<button type="submit" class="btn btn-sm btn-info" name="staff_status">Submit</button>
						</div>
						<?php } ?> -->
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">

function getStatus(personal_id){
        var isTrue = confirm("Are you sure to confirm?");
        if(isTrue){
            $.ajax({
                url:"<?php echo base_url(); ?>team_data/disable_enable?&personal_id="+personal_id,
                //contentType: 'application/json; charset=utf-8',
                type: 'get',
                //data: {'personal_id':personal_id},
                dataType: 'json',
                timeout:5000,
                success: function(reponse){ 
                    console.log(reponse);
                    //location.reload();
                    alert('success');
                }
            });
            location.reload();
        }
}
				// function printProfile(personal_id) { 
				//    //Get the HTML of div
				//    var divElements = document.getElementById("print_profile").innerHTML;
				//     //Get the HTML of whole page
				//     var oldPage = document.body.innerHTML;

				//     //Reset the page's HTML with div's HTML only
				//     document.body.innerHTML = 
				//       "<html><head><title></title></head><body>" + 
				//       divElements + "</body>";

				//     //Print Page
				//     window.print();

				//     //Restore orignal HTML
				//     document.body.innerHTML = oldPage;           
				// } 
</script>