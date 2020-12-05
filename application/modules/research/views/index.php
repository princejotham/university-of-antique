<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="row">
<div class="col-12">
	<div class="card m-b-30 my-2">
		<div class="card-body">
			<div class="page-head">
				<h2 class="text-center"><?=$page_title;?></h2>
			</div>

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
						for ($i = 1;$i < 10 + 1; $i++) {
					?>
					<tr>
						<th scope="row"><?=$i;?></th>
						<td>Title <?=$i;?></td>
						<td>References <?=$i;?></td>
						<td>Prepared By <?=$i;?></td>
						<td class="p-0">
							<button type="button" class="btn btn-sm btn-info" style="float: none; margin: 5px; margin-right: 0px;"><span class="ti-pencil"></span></button>
							<button type="button" class="btn btn-sm btn-info" style="float: none; margin: 5px;"><span class="ti-trash"></span></button>
							<button type="button" class="btn btn-sm btn-info" style="float: none; margin: 5px;">Endorse Research</button>
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
