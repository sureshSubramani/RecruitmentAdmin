<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Members</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Members</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12">
                        <?php if($this->session->flashdata('success')){ ?>
                        <div class="alert alert-success alert-dismissible fade show col-lg-6">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
                        </div>
                        <?php } ?>
                            <!-- TO DO List -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title mrT-1">
                                        <i class="fas fa-users"></i>
                                        Member List
                                    </h3>
                                    
                                    <div class="card-tools">                                        
                                        <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus"></i> Add Member</button>                                       
                                        <a href='<?= base_url() ?>member/export' class="btn btn-success float-right" style="position: relative;left: -5px;"><i class="fas fa-file-export"></i>Export CSV</a>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Full Name</th>
                                                    <th>DOB</th>
                                                    <th>Designation</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=1; foreach($data as $row){ ?>
                                                <td><?= $i++;?></td>
                                                <td><?=$row->full_name;?></td>
                                                <td><?=$row->dob;?></td>
                                                <td><?=$row->designation;?></td>
                                                <td>
                                                <?php if($row->status == 0){ ?>
                                                <span class="btn btn-xs btn-danger">Deactive</span>
                                                <?php } else { ?><span class="btn btn-xs btn-success">Active</span> <?php } ?>
                                                </td>
                                                <td> <span class="tools">
                                                        <i class="fas fa-edit"></i>
                                                        <i class="fas fa-trash-o"></i>
                                                    </span>
                                                </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                </div>
                                <!-- /.card-body -->
                                <!-- <div class="card-footer clearfix">
                                    <ul class="pagination pagination-sm float-right">
                                        <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                                        <li class="page-item"><a href="#" class="page-link">3</a></li>
                                        <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                                    </ul>
                                </div> -->
                            </div>
                            <!-- /.card -->
                </section>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add New Member</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form method='post' action="<?php echo base_url() ?>member/addMember">
                    <div class="form-group">
                        <label for="fname">Full Name:</label>
                        <input type="text" class="form-control" id="fname" placeholder="Enter full name" name="fname">
                    </div>
                    <div class="form-group">
                        <label for="dob">DOB:</label>
                        <input type="text" class="form-control" id="dob" placeholder="dd/mm/yyyy" name="dob"
                            autocomplete='off' />
                    </div>
                    <div class="form-group">
                        <label for="dob">DOB:</label>
                        <input type="text" id="birthday" class="form-control" value='' placeholder="dd/mm/yyyy"
                            autocomplete='off' />
                    </div>

                    <div class="form-group">
                        <label>Date range button:</label>

                        <div class="input-group">
                            <button type="button" class="btn btn-default float-right" id="daterange-btn">
                                <i class="far fa-calendar-alt"></i> Date range picker
                                <i class="fas fa-caret-down"></i>
                            </button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fname">Designation:</label>
                        <input type="text" class="form-control" id="desg" placeholder="Enter designation" name="desg">
                    </div>
                    <!-- <div class="form-group">
                            <label for="fname">email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter full name" name="email">
                        </div>
                        <div class="form-group">
                            <label for="dob">Maried Status:</label>
                            <input type="text" class="form-control" id="dob" placeholder="Enter DOB" name="dob">
                        </div>                        
                        <div class="form-group">
                            <label for="dob">Password:</label>
                            <input type="text" class="form-control" id="dob" placeholder="Enter DOB" name="dob">
                        </div>
                        <div class="form-group">
                            <label for="dob">Confirm Password:</label>
                            <input type="text" class="form-control" id="dob" placeholder="Enter DOB" name="dob">
                        </div> -->
                    <div class="text-center">
                        <button type="submit" name="add_member" class="btn btn-sm btn-primary">Submit</button>
                        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
                <div class="text-center">
                    <div class="">
                        <span class='large-text'>OR</span><br />
                    </div>
                    <form method='post' action="<?php echo base_url() ?>member/import" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <input type="file" name="import_file" id="import_file" class="btn btn-sm btn-default"
                                    data-allowed-file-extensions="[CSV, csv]" accept=".CSV, .csv"
                                    data-buttontext="Choose File">
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group text-center">
                                    <button type="submit" name="importCSV"
                                        class="btn btn-sm btn-primary">IMPORT</button>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group text-center">
                                        <a href="<?php echo base_url();?>download/csv-sample-add-member.csv">Download
                                            Sample CSV File</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js1"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


<script>
$(function() {
    $('#birthday').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        minYear: 1980,
        maxYear: 2000, //parseInt(moment().format('YYYY'), 10)
        // }, function(start, end, label) {
        //     // /var years = moment().diff(start, 'years');
        //     //alert("You are " + years + " years old!");
    });
});

$('#dob').datepicker({
    uiLibrary: 'bootstrap4',
    dateFormat: 'dd/mm/yy', // set date format as you prefer
    changeMonth: true, // if you want to change months
    changeYear: true, // if you want to change years
    yearRange: "1953:+10",
    clickInput: true,
    autoclose: true,
    clearBtn: true,

    onSelect: function(date) {
        $('#dob').val(date).attr('readonly',
            true); // if you want to make event fire after the date selection
    }

});

$(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
});

</script>