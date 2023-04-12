

<div class="dash-main-s-c">
<div class="dash-main-sidebar">
  <?php include"../application/view/admin/sidebar.php"?>
</div>  
<div class="dash-main-content-std">
       
<div class="stdl  mb-4">
                        <div class="stdl-header py-3">
                            <p class="m-0 font-weight-bold text-primary">DataTables Example</p>
                        </div>
                        <div class="stdl-body">
                            <div class="stdl-tbl-fil">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="datatable" cellspacing="0">
                                    <thead>
                                        <tr>
                                           <th>Sr.No</th>
                                            <th>Enrolment No.</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Department</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                   for($i=1;$i<=20;$i++){
                                    echo '<tr>
                                             <td>1</td>
                                            <td>190304105110</td>
                                            <td>Puran </td>
                                            <td>Goswami</td>
                                            <td>9610529728</td>
                                            <td>puran@123</td>
                                            <td>CSE</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                             <td>3</td>
                                            <td>4105110</td>
                                            <td>ashok </td>
                                            <td>swami</td>
                                            <td>96105298</td>
                                            <td>ran@123</td>
                                            <td>Abc</td>
                                            <td>$234,800</td>
                                        </tr>';}
                                      ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
  

</div>
</div>
