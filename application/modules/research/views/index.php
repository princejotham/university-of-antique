<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="page-head">
	<h2 class="my-2"><?=$page_title;?></h2>
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="tab-2 m-b-30">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link active" href="#in-progress" data-toggle="tab" aria-expanded="false">In Progress</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#pending" data-toggle="tab" aria-expanded="false">Pending</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#approved" data-toggle="tab" aria-expanded="false">Approved</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#not-approved" data-toggle="tab" aria-expanded="false">Not Approved</a>
				</li>
			</ul>
			<div class="tab-content bg-white">
				<div class="tab-pane active p-4" id="in-progress">
					<div class="table-responsive-sm">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th scope="col" width="80">#</th>
									<th scope="col">Research Title</th>
									<th scope="col" width="150">References</th>
									<th scope="col" width="150">Prepared By</th>
									<th scope="col" width="150">Actions</th>
								</tr>
							</thead>
							<tbody>
							<?php
								for ($i = 1;$i < 100 + 1; $i++) {
							?>
							<tr>
								<th scope="row"><?=$i;?></th>
								<td>Title <?=$i;?></td>
								<td>References <?=$i;?></td>
								<td>Prepared By <?=$i;?></td>
								<td class="p-0">
									<button type="button" class="btn btn-sm btn-info" style="float: none; margin: 5px; margin-right: 0px;"><span class="ti-pencil"></span></button>
									<button type="button" class="btn btn-sm btn-info" style="float: none; margin: 5px;"><span class="ti-trash"></span></button>
								</td>
							</tr>
							<?php
								}
							?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="tab-pane p-4" id="pending">
					<div class="table-responsive-sm">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th scope="col" width="80">#</th>
									<th scope="col">Research Title</th>
									<th scope="col" width="150">References</th>
									<th scope="col" width="150">Prepared By</th>
									<th scope="col" width="150">Actions</th>
								</tr>
							</thead>
							<tbody>
							<?php
								for ($i = 1;$i < 100 + 1; $i++) {
							?>
							<tr>
								<th scope="row"><?=$i;?></th>
								<td>Title <?=$i;?></td>
								<td>References <?=$i;?></td>
								<td>Prepared By <?=$i;?></td>
								<td class="p-0">
									<button type="button" class="btn btn-sm btn-info" style="float: none; margin: 5px; margin-right: 0px;"><span class="ti-pencil"></span></button>
									<button type="button" class="btn btn-sm btn-info" style="float: none; margin: 5px;"><span class="ti-trash"></span></button>
								</td>
							</tr>
							<?php
								}
							?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="tab-pane p-4" id="approved">
					<div class="table-responsive-sm">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th scope="col" width="80">#</th>
									<th scope="col">Research Title</th>
									<th scope="col" width="150">References</th>
									<th scope="col" width="150">Prepared By</th>
									<th scope="col" width="150">Actions</th>
								</tr>
							</thead>
							<tbody>
							<?php
								for ($i = 1;$i < 100 + 1; $i++) {
							?>
							<tr>
								<th scope="row"><?=$i;?></th>
								<td>Title <?=$i;?></td>
								<td>References <?=$i;?></td>
								<td>Prepared By <?=$i;?></td>
								<td class="p-0">
									<button type="button" class="btn btn-sm btn-info" style="float: none; margin: 5px; margin-right: 0px;"><span class="ti-pencil"></span></button>
									<button type="button" class="btn btn-sm btn-info" style="float: none; margin: 5px;"><span class="ti-trash"></span></button>
								</td>
							</tr>
							<?php
								}
							?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="tab-pane p-4" id="not-approved">
					<div class="table-responsive-sm">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th scope="col" width="80">#</th>
									<th scope="col">Research Title</th>
									<th scope="col" width="150">References</th>
									<th scope="col" width="150">Prepared By</th>
									<th scope="col" width="150">Actions</th>
								</tr>
							</thead>
							<tbody>
							<?php
								for ($i = 1;$i < 100 + 1; $i++) {
							?>
							<tr>
								<th scope="row"><?=$i;?></th>
								<td>Title <?=$i;?></td>
								<td>References <?=$i;?></td>
								<td>Prepared By <?=$i;?></td>
								<td class="p-0">
									<button type="button" class="btn btn-sm btn-info" style="float: none; margin: 5px; margin-right: 0px;"><span class="ti-pencil"></span></button>
									<button type="button" class="btn btn-sm btn-info" style="float: none; margin: 5px;"><span class="ti-trash"></span></button>
								</td>
							</tr>
							<?php
								}
							?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!--end row-->