
<style>
#print_profile {
    font-family: 'Times New Roman', Times, serif;
    font-weight: 600;
    height: 900px;
    width: 100%;
    overflow-y: auto;
}
td{
 line-height:20px;
}
h5{line-height:30px;}
.stick_photo {
    position: absolute;
    padding: 20px 0px;
    border: 1px solid #000;
    transform: translate(120%, 25%);
    right: 0px;
}

.stick_photo span {
    width: 150px;
    display: block;
    padding: 10px;
}

.logo {
    transform: translate(5%, -10%);
    position: absolute;
    display: inline-flex;
    left: 0;
}

#t-body {
    display: table-row-group;
}

.t-row {
    display: table-row;
}

.t-cell {
    display: table-cell;
    /* width: 85%; */
    text-align: left;
}

.t-cell-0 {
    display: table-cell;
    width: 85%;
    text-align: left;
}

.t-cell-1 {
    display: table-cell;
    width: 100%;
    text-align: left;
}

.li-cell {
    display: table-cell;
    border: 1px solid #ccc;
    padding: 5px 10px 5px 10px;
    font-size: 12px;
    font-weight: bold;
    text-align: center
}

.signature {
    position: relative;
    transform: translate(30%, 10%);
}

</style>
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
                        <h3 class="card-title text-left">List of Profiles</h3>
                    </div>
                    <div class="card-body">
                        <div class="col-lg-12">
                        <form name='selectForm' action='' method='post'>
                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Full Name</th>
                                        <th>Email/Mobile</th>
                                        <th>DOB</th>
                                        <th>Designation</th>
                                        <th>Department</th>
                                        <th>Total Experience</th>
                                        <th>Status</th>
                                        <th style='width:100px;'></th>
                                    </tr>
                                </thead>
                                <tbody> <form action="" method="get">                              
                                        <?php $count = 1; foreach( $STAFF as $value ){ ?>
                                        <tr>
                                            <td><input type='hidden' name='personal_id' id='personal_id' value="<?php echo $value->personal_id;?>"></td>
                                            <td><?php echo $count++; ?></td>
                                            <td><?php echo $value->first_name.' '.$value->last_name; ?></td>
                                            <td><?php echo $value->email_id.' / '.$value->phone_no; ?></td>
                                            <td><?php echo $value->dob; ?></td>
                                            <td><?php echo $value->designation; ?></td>
                                            <td><?php echo $value->dept_name; ?></td>
                                            <td><?php echo $value->doe.' Year'; ?></td>
                                            <td><?php if($value->staff_status == 0){ ?><span  class='disabled'></span><?php }else{ ?><span class='btn btn-sm btn-success'>Sortlisted</span><?php } ?></td>
                                            <td>
                                                <button type='button' class='btn btn-sm btn-info' id='sendStatus' name='select_status' data-toggle="modal" data-target="#print<?php echo $value->personal_id;?>"><i class='fa fa-eye'></i></button>
                                                
                                                <a href="<?php echo base_url() ?>print_pdf/pdf_download?&personal_id=<?php echo $value->personal_id;?>" class='btn btn-sm btn-info' id='pdf_download' target='top' ><i class='fa fa-print'></i></a>                                                
                                                
                                                <input type='checkbox' name='staff_status' value='1' class='form-control check-ctrl' required/> 
                                            </td>
                                        </tr>
                                        <?php } ?> 
                                        </form>                                  
                                </tbody>
                            </table>                            
                        </div>
                    </div>
                    <div class="col-lg-12 card-footer ">
                        <?php  if($_SESSION['roll_type_id'] == '0' && $_SESSION['username'] == 'developer'){  ?>
                        <div class="form-inline col-lg-1 float-right">
                            <button type="submit" class="btn btn-sm btn-info" name="staff_status">Submit</button>
                        </div>
                        <?php } ?>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">
    $(".pdf_download").click(function(e) {     
      e.preventDefault(); 

      var personal_id = $('.personal_id').val();
      alert(personal_id);

      $.ajax({
        type: "GET",
        url: "<?php echo base_url() ?>print_pdf/pdf_download?&personal_id=" + personal_id,
        success: function(data) {
            alert(data);
            console.log(data); 
        }
      });
});

$("#selectForm").click(function (){
             var personl_id = $("#personl_id").val();
             var status = $("#select_status[type='checkbox']").val();
             alert(personl_id+' '+status);
            if (status == 1) {
                $.ajax({
                    type: "POST",
                    url: "Staff_list/getSelect",
                    data: {
                        "personl_id": personl_id, 'staff_status': status
                    },
                    success: function(data) {
                        console.log(data);                        
                    }
                });
            } else {
                $("#error").text("Database error.."); /*css({ "background-image" "none" }*/
            }
});        
 
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