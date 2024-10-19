 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Student List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Add New</button></li>
              
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <?php if($this->session->flashdata('success')){
          ?>
          <div class="alert alert-success">
            <?php echo $this->session->flashdata('success')?>
          </div>
          <script>
            setTimeout(function(){ $('.alert').hide(); }, 2000);
          </script>
        <?php }?>
        <?php if($this->session->flashdata('failure')){
          ?>
          <div class="alert alert-danger">
            <?php echo $this->session->flashdata('failure')?>
          </div>
          <script>
            setTimeout(function(){ $('.alert').hide(); }, 2000);
          </script>
        <?php }?>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
<div class="card-body">
 <table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
<th>Sl No.</th>
<th>Name</th>
<th>Subject</th>
<th>Marks</th>
<th>Action</th>
</tr>
</thead>
<tbody>
  <?php $i=1; if($students->num_rows()>0){
    foreach($students->result() as $stud){?>
  <tr>
    <td><?php echo $i?></td>
    <td><span class="badge badge-primary rounded-circle" style="width: 25px; height: 25px; display: inline-flex; align-items: center; justify-content: center;">
        <?php echo strtoupper(substr($stud->name, 0, 1)); ?>
      </span> <?php echo $stud->name?></td>
    <td><?php echo $stud->subject?></td>
    <td><?php echo $stud->marks?></td>
    <td>
      <button class="btn btn-sm btn-success" onclick="setDataFunction(
                          '<?php echo $stud->id; ?>',
                          '<?php echo $stud->name?>',
                          '<?php echo $stud->subject?>',
                          '<?php echo $stud->marks?>'
                          )">Edit</button>
      <button class="btn btn-sm btn-danger" onclick="setDeleteDataFunction(
                          '<?php echo $stud->id; ?>',)">Delete</button>
    </td>
  </tr>
<?php $i++; }}?>
</tbody>
</table>
</div>
</div>
        </div>
      </div>
        </section>
  </div>

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Student</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="post" action="<?php echo base_url('insert-students')?>" id="addstudents">
            <div class="modal-body">
              <div class="col-lg-12 form-group">
                      <label class="form-label">Name<span class="tx-danger">*</span></label>
                      <input class="form-control" name="name" id="name" placeholder="Name" required="" type="text">
                    </div>
                    <div class="col-lg-12 form-group">
                      <label class="form-label">Subject<span class="tx-danger">*</span></label>
                      <input class="form-control" name="subject" id="subject" placeholder="Subject" required="" type="text">
                    </div>
                    <div class="col-lg-12 form-group">
                      <label class="form-label">Marks<span class="tx-danger">*</span></label>
                      <input class="form-control" name="marks" id="marks" placeholder="Marks" required="" type="number">
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

<div class="modal fade" id="editModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Student</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="post" action="<?php echo base_url('update-students')?>" id="updatestudents">
            <div class="modal-body">
              <div class="col-lg-12 form-group">
                      <label class="form-label">Name<span class="tx-danger">*</span></label>
                      <input class="form-control" name="ename" id="ename" placeholder="Name" required="" type="text">
                      <input type="hidden" name="eid" id="eid">
                    </div>
                    <div class="col-lg-12 form-group">
                      <label class="form-label">Subject<span class="tx-danger">*</span></label>
                      <input class="form-control" name="esubject" id="esubject" placeholder="Subject" required="" type="text">
                    </div>
                    <div class="col-lg-12 form-group">
                      <label class="form-label">Marks<span class="tx-danger">*</span></label>
                      <input class="form-control" name="emarks" id="emarks" placeholder="Marks" required="" type="number">
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

      <div class="modal fade" id="deleteModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete Student</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="post" action="<?php echo base_url('delete-students')?>">
            <div class="modal-body">
             <a>Are you sure you want to delete this student?</a>
             <input type="hidden" name="did" id="did">
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<script>
    function setDataFunction(id,name,subject,marks){
      $('#eid').val(id);  
      $('#ename').val(name);
      $('#esubject').val(subject);
      $('#emarks').val(marks);
      $('#editModal').modal('show');
    }

    function setDeleteDataFunction(id){
      $('#did').val(id); 
      $('#deleteModal').modal('show');
    }
  </script>

  <script>
    $('#addstudents').ready(function(){
        $('#addstudents').bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                name: {
                  
                    validators: {
                        notEmpty: {
                            message: 'The student name is required and cannot be empty'
                        },
                        
                    }
                },
                marks: {
                  
                    validators: {
                        notEmpty: {
                            message: 'The marks is required and cannot be empty'
                        },
                        
                    }
                },

                subject: {
                    
                    validators: {
                        notEmpty: {
                            message: 'The subject is required cannot empty'
                        },
                    }
                }
              
              
            }
        })
});

</script>
<script>
    $('#updatestudents').ready(function(){
        $('#updatestudents').bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                ename: {
                  
                    validators: {
                        notEmpty: {
                            message: 'The student name is required and cannot be empty'
                        },
                        
                    }
                },
                emarks: {
                  
                    validators: {
                        notEmpty: {
                            message: 'The marks is required and cannot be empty'
                        },
                        
                    }
                },

                esubject: {
                    
                    validators: {
                        notEmpty: {
                            message: 'The subject is required cannot empty'
                        },
                    }
                }
              
              
            }
        })
});

</script>
<style>
    .has-error .help-block {
  padding-left: 15px;
  padding-top: 5px;
  color: crimson;
}
</style>