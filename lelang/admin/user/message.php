
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Message</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                <tr>
                  <th>No</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email Addres</th>
                  <th>Tel. Number</th>
                  <th>Message</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    
                    $qry = "SELECT * FROM message order by id desc";
                    $execute = mysqli_query($koneksi,$qry); 
                    $no = 1;
                    while($list = mysqli_fetch_array($execute)){
                    ?>
                    <tr>
                        <td><?=$no++?></td>
                        <td><?=$list['first_name']?></td>
                        <td><?=$list['last_name']?></td>
                        <td><?=$list['email']?></td>
                        <td><?=$list['tel_number']?></td>
                        <td><?=$list['message']?></td>
                    </tr>  
                    <?php

                    }
                ?>
                 
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>