<div class="spacer all-30"></div>
<div class="row">
	<div class="col text-right">
		<a href="#" class="btn btn-primary">
			<i class="far fa-plus-square"></i>
			<span class="block xs-15 sm-15"></span>
			Create Table
		</a>
		<span class="block xs-15 sm-15"></span>
		<a href="{c2r-mdl-url}/api/?r=dump" class="btn btn-primary">
			<i class="fas fa-cloud-download-alt"></i>
			<span class="block xs-15 sm-15"></span>
			Dump
		</a>
	</div>
</div>
<div class="spacer all-30"></div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Table Name</th>
					<th scope="col">Rows</th>
					<th scope="col">Engine</th>
					<th scope="col">Collaction</th>
					<th scope="col">Date</th>
					<th scope="col">Actions</th>
				</tr>
			</thead>
			<tbody>
				{c2r-list}
			</tbody>
		</table>
	</div>
</div>
