     <script src="<?php echo base_url(); ?>assets/js/po.js"></script> 
     <div class="breadcome-area mg-b-30 small-dn">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="breadcome-heading">
                                    <form role="search" class="">
                                        <input type="text" placeholder="Search..." class="form-control">
                                        <a href=""><i class="fa fa-search"></i></a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <ul class="breadcome-menu">
                                    <li><a href="<?php echo base_url(); ?>">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><a href="<?php echo base_url(); ?>index.php/jor/jor_list">JOR List </a> <span class="bread-slash">/</span></li>
                                    <li><span class="bread-blod">Cancelled JOR List</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="admin-dashone-data-table-area">
        <div class="container-fluid">
            <form name="myform" action="<?php echo base_url(); ?>index.php/aoq/add_aoq" method="post">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sparkline8-list shadow-reset">
                            <div class="sparkline8-hd" style="background: #ff6262">
                                <div class="main-sparkline8-hd">
                                    <h1 class="text-white">CANCELLED JOR List</h1>
                                    <small class="text-white">JOB ORDER REQUEST</small>
                                    <div class="sparkline8-outline-icon">
                                        <h2><span class="fa fa-ban"></span></h2>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="sparkline8-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th>JOR NO</th>
                                                <th>Date Received</th>
                                                <th>Scope of Work</th>
                                                <th>Urgency Number</th>
                                                <th>Cancelled By</th>
                                                <th>Reason</th>
                                                <th><center><span class="fa fa-bars"></span></center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!--<?php
                                                if(!empty($jor_head)){ 
                                                foreach($jor_head AS $jh){ 
                                                    if($jh['jor_no']!=''){
                                                        $jor_no = $jh['jor_no'];
                                                    }else {
                                                        $jor_no=$jh['user_jor_no'];
                                                    }
                                            ?>-->                                        
                                            <tr>
                                                <td><?php echo $jor_no."-".COMPANY;?></td>
                                                <td><?php echo $jh['jor_date']; ?></td>
                                                <td><?php echo $jh['items']; ?></td>
                                                <td ><center><?php echo $jh['urgency_num']; ?></center></td>
                                                <td><?php echo $jh['cancelled_by'] . "/" .$jh['cancel_date'] ; ?></td>
                                                <td><?php echo $jh['cancel_reason']; ?></td>
                                                <td>
                                                    <center>
                                                        <a href="<?php echo base_url(); ?>jor/jor_request/<?php echo $jh['jor_id']; ?>" class="btn btn-custon-three btn-warning btn-xs"><span class="fa fa-eye"></span>
                                                        </a>
                                                    </center>
                                                </td>
                                            </tr>
                                            <?php } } ?>                  
                                        </tbody>
                                    </table>
                                </div>                           
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Data table area End-->