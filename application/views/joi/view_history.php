<style type="text/css">
    html, body.materialdesign {
        background: #2d2c2c;
    }
</style>
<div class="admin-dashone-data-table-area" style="margin: 10px">
    <div class="container-fluid">
        <div class="row">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">History of <b><?php echo $cenjo_no."/".$joi_no."-".COMPANY; ?></b></h5>
                </div>
                <div class="modal-body">
                    <?php foreach($revise AS $r){ ;?>
                        <a onClick="javascript:window.opener.location.href='<?php echo base_url(); ?>joi/jo_issuance_saved_r/<?php echo $r['joi_id'];?>/<?php echo $r['revision_no'];?>';" target='_blank' class="btn btn-link btn-link-shad btn-block">    <?php echo $r['cenjo_no']."/".$r['joi_no'] ."-".COMPANY. (($r['revision_no'] == 0) ? '' : '.r'.$r['revision_no']);?>
                            <span class="pull-right"><?php echo date("Y-m-d", strtotime($r['date_revised']));?></span>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>