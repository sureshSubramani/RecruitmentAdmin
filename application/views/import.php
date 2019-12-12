<style>
.pagination, .dataTables_filter{
    float:right;
}
.right-align{
    margin-right:10px;
    position:relative;
}
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Excel File Import</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Excel Import</li>
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
                <section class="col-lg-8 offset-2">
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
                                        <i class="fas fa-file-export"></i>
                                        Import All Excel Sheets 
                                    </h3>                                    
                                    <div class="card-tools">                                   
                                    <!-- <a href='<?= base_url() ?>member/export' class="btn btn-success float-right" style="position: relative;left: -5px;"><i class="fas fa-file-export"></i>Export CSV</a> -->
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body offset-1">
                                <button type="button" class="btn btn-lg btn-success float-left right-align" data-toggle="modal" data-target="#purchase"><i class="fas fa-shopping-bag" aria-hidden="true"></i> Purchase Excel Import</button>
                                <button type="button" class="btn btn-lg btn-success float-left right-align" data-toggle="modal" data-target="#consumption"><i class="fa fa-cutlery" aria-hidden="true"></i> Consumption Excel Import</button>
                                <button type="button" class="btn btn-lg btn-success float-left right-align" data-toggle="modal" data-target="#headcount"><i class="fas fa-file-export" aria-hidden="true"></i> HeadCount Excel Import</button>
                                </div>
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
<div class="modal fade" id="purchase">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Import Purchase</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">                
                <div class="text-center">
                    <form method='post' action='<?php echo base_url(); ?>import_all/purchase_import' enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <input type="file" name="file" id="file" data-allowed-file-extensions="[XLX, xls, XLSX, xlsx]" accept=".xls, .xlsx" class="btn btn-sm btn-default"
                                        data-buttontext="Choose File" required/>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group text-center">
                                        <input type="submit" name="import" value="Import" class="btn btn-sm btn-info" />                                        
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group text-center">
                                            <a href="<?php echo base_url();?>#">Download
                                                Sample CSV File</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="consumption">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Import Consumption</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">                
                <div class="text-center">
                    <form method='post' action='<?php echo base_url(); ?>import_all/consumption_import' enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <input type="file" name="file" id="file" data-allowed-file-extensions="[XLX, xls, XLSX, xlsx]" accept=".xls, .xlsx" class="btn btn-sm btn-default"
                                        data-buttontext="Choose File" required/>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group text-center">
                                        <input type="submit" name="import" value="Import" class="btn btn-sm btn-info" />                                        
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group text-center">
                                            <a href="<?php echo base_url();?>#">Download
                                                Sample CSV File</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="headcount">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Import HeadCount</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">                
                <div class="text-center">
                    <form method='post' action='<?php echo base_url(); ?>import_all/headcount_import' enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <input type="file" name="file" id="file" data-allowed-file-extensions="[XLX, xls, XLSX, xlsx]" accept=".xls, .xlsx" class="btn btn-sm btn-default"
                                        data-buttontext="Choose File" required/>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group text-center">
                                        <input type="submit" name="import" value="Import" class="btn btn-sm btn-info" />                                        
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group text-center">
                                            <a href="<?php echo base_url();?>#">Download
                                                Sample CSV File</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
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

$(document).ready(function(){

	$('#import_form').on('submit', function(event){
		event.preventDefault();
		$.ajax({
			url:"<?php echo base_url(); ?>excel_import/import",
			method:"POST",
			data:new FormData(this),
			contentType:false,
			cache:false,
			processData:false,
			success:function(data){
				$('#file').val('');
				//alert(data);
			}
		})
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

});
</script>