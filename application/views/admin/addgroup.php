<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add New Admin Panel Group</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
				<div class="col-lg-12">
					<?php echo validation_errors(); ?>
					<?php echo form_open('/admin/verifygroupadd'); ?>
					<fieldset>
						<div class="form-group">
							<label>Group Name</label>
							<input class="form-control" size="40px" name="grpname" value="" />
						</div>
						<div class="form-group">
							<label>Group ID</label>
							<input type="number" class="form-control" min="1" max="99" value="" name="groupid" />
						</div>
						<label>Permissions for this group</label><br />
						<?php $list_perms = array_chunk($permissions, ceil(count($permissions) / 3)); ?>
						<div class="col-lg-4">
							<?php foreach($list_perms[0] as $perm=>$text): ?>
								<input type="checkbox" name="perm[<?php echo $perm; ?>]" value="1" />&nbsp;<?php echo $text; ?><br />
							<?php endforeach; ?>
						</div>
						<div class="col-lg-4">
							<?php foreach($list_perms[1] as $perm=>$text): ?>
								<input type="checkbox" name="perm[<?php echo $perm; ?>]" value="1" />&nbsp;<?php echo $text; ?><br />
							<?php endforeach; ?>
						</div>
						<div class="col-lg-4">
							<?php foreach($list_perms[2] as $perm=>$text): ?>
								<input type="checkbox" name="perm[<?php echo $perm; ?>]" value="1" />&nbsp;<?php echo $text; ?><br />
							<?php endforeach; ?>
						</div>
						<button type="submit" class="btn btn-default">Add Group</button>
					</fieldset>
				</div>
				<!-- /.container-fluid -->
			</div>
			<!-- /#page-wrapper -->
			</div>
		<!-- /#wrapper -->