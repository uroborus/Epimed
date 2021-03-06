@extends ('layouts.masterLayout')

@section ('pagetitle')
	Epimed - Batch Form
@stop

@section ('content')
	<div class="bg-grey-warm text-primary">		
		<div id="form_title" class="text-center">
			<h4>FINAL PRODUCT BATCH HISTORY RECORD</h4>
		</div>		
	
		<div id="form_subtitle" class="text-center">
			<h6>IHR-013</h4>
		</div>		
	</div>
	<hr>
	<div>
			
		<form class="form-horizontal" role="form">
			<div class="form-group">
				<label for="final_product" class="col-sm-2 control-label form-inline text-primary">Final Product</label>
				<div class="col-sm-4">
					<input type="text" class="form-control form-inline" id="final_product" placeholder="">
				</div>
				<label for="final_lot_#" class="col-sm-2 control-label col-sm-offset-1 form-inline text-primary">Final Lot #:</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="final_lot_#" placeholder="">
				</div>
			</div>
			
			<div class="form-group">
				<label for="catalog_#" class="col-sm-2 control-label form-inline text-primary">Catalog #</label>
				<div class="col-sm-4">
					<input type="text" class="form-control form-inline" id="catalog_#" placeholder="">
				</div>
				<label for="final_quantity" class="col-sm-2 control-label col-sm-offset-1 form-inline text-primary">Final Quantity:</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="final_quantity" placeholder="">
				</div>
			</div>
			
			<div class="form-group">
				<label for="component_product_#_0" class="col-sm-3 control-label form-inline">Componenet Product #</label>
				<div class="col-sm-3">
					<input type="text" class="form-control form-inline" id="component_product_#_0" placeholder="">
				</div>
				<label for="lot_#s_0" class="col-sm-2 control-label form-inline">Lot #(s):</label>
				<div class="col-sm-2 col-sm-offset-1">
					<input type="text" class="form-control" id="lot_#s_0" placeholder="">
				</div>
			</div>
			
			<div class="form-group">
				<label for="component_product_#_1" class="col-sm-3 control-label form-inline">Componenet Product #</label>
				<div class="col-sm-3">
					<input type="text" class="form-control form-inline" id="component_product_#_1" placeholder="">
				</div>
				<label for="lot_#s_1" class="col-sm-2 control-label form-inline">Lot #(s):</label>
				<div class="col-sm-2 col-sm-offset-1">
					<input type="text" class="form-control" id="lot_#s_1" placeholder="">
				</div>
			</div>
			
			<hr>
						
			<div id="pouch_label" class="text-primary text-center">
				<h4>Pouch Label</h4>
			</div>
			
			<div class="form-group">
				<label for="generated_by" class="col-sm-2 control-label form-inline">Generated By:</label>
				<div class="col-sm-4">
					<input type="text" class="form-control form-inline" id="component_product_#_1" placeholder="">
				</div>
				<label for="generated_by_date" class="col-sm-1 control-label form-inline">Date:</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="generated_by_date" placeholder="">
				</div>
				<label for="generated_#" class="col-sm-1 control-label form-inline">Generated#:</label>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="generated_#" placeholder="">
				</div>
			</div>
			
			<div class="form-group">
				<label for="approved_for_use_by" class="col-sm-3 control-label form-inline">Approved For Use By:</label>
				<div class="col-sm-3">
					<input type="text" class="form-control form-inline" id="component_product_#_1" placeholder="">
				</div>
				<label for="approved_for_use_by_date" class="col-sm-1 control-label form-inline">Date:</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="generated_by_date" placeholder="">
				</div>
				<label for="generated_#" class="col-sm-1 control-label form-inline">Used#:</label>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="generated_#" placeholder="">
				</div>
			</div>
			
			<div class="form-group">
				<label for="generated_by" class="col-sm-2 control-label form-inline">Generated By:</label>
				<div class="col-sm-4">
					<input type="text" class="form-control form-inline" id="component_product_#_1" placeholder="">
				</div>
				<label for="generated_by_date" class="col-sm-1 control-label form-inline">Date:</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="generated_by_date" placeholder="">
				</div>
				<label for="generated_#" class="col-sm-1 control-label form-inline">Generated#:</label>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="generated_#" placeholder="">
				</div>
			</div>
			
			<div class="form-group">
				<label for="approved_for_use_by" class="col-sm-3 control-label form-inline">Approved For Use By:</label>
				<div class="col-sm-3">
					<input type="text" class="form-control form-inline" id="component_product_#_1" placeholder="">
				</div>
				<label for="approved_for_use_by_date" class="col-sm-1 control-label form-inline">Date:</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="generated_by_date" placeholder="">
				</div>
				<label for="generated_#" class="col-sm-1 control-label form-inline">Used#:</label>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="generated_#" placeholder="">
				</div>
			</div>
			
			<div class="form-group">
				<label for="approved_for_use_by" class="col-sm-3 control-label form-inline">Undestroyed Labels Destroyed By:</label>
				<div class="col-sm-3">
					<input type="text" class="form-control form-inline" id="component_product_#_1" placeholder="">
				</div>
				<label for="approved_for_use_by_date" class="col-sm-1 control-label form-inline">Date:</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="generated_by_date" placeholder="">
				</div>
				<label for="generated_#" class="col-sm-1 control-label form-inline">Destroyed#:</label>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="generated_#" placeholder="">
				</div>
			</div>
			
			<hr>
			
			<div id="carton_label" class="text-primary text-center">
				<h4>Carton Label</h4>
			</div>
			
			<div class="form-group">
				<label for="generated_by" class="col-sm-2 control-label form-inline">Generated By:</label>
				<div class="col-sm-4">
					<input type="text" class="form-control form-inline" id="component_product_#_1" placeholder="">
				</div>
				<label for="generated_by_date" class="col-sm-1 control-label form-inline">Date:</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="generated_by_date" placeholder="">
				</div>
				<label for="generated_#" class="col-sm-1 control-label form-inline">Generated#:</label>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="generated_#" placeholder="">
				</div>
			</div>
			
			<div class="form-group">
				<label for="approved_for_use_by" class="col-sm-3 control-label form-inline">Approved For Use By:</label>
				<div class="col-sm-3">
					<input type="text" class="form-control form-inline" id="component_product_#_1" placeholder="">
				</div>
				<label for="approved_for_use_by_date" class="col-sm-1 control-label form-inline">Date:</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="generated_by_date" placeholder="">
				</div>
				<label for="generated_#" class="col-sm-1 control-label form-inline">Used#:</label>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="generated_#" placeholder="">
				</div>
			</div>
			
			<div class="form-group">
				<label for="generated_by" class="col-sm-2 control-label form-inline">Generated By:</label>
				<div class="col-sm-4">
					<input type="text" class="form-control form-inline" id="component_product_#_1" placeholder="">
				</div>
				<label for="generated_by_date" class="col-sm-1 control-label form-inline">Date:</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="generated_by_date" placeholder="">
				</div>
				<label for="generated_#" class="col-sm-1 control-label form-inline">Generated#:</label>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="generated_#" placeholder="">
				</div>
			</div>
			
			<div class="form-group">
				<label for="approved_for_use_by" class="col-sm-3 control-label form-inline">Approved For Use By:</label>
				<div class="col-sm-3">
					<input type="text" class="form-control form-inline" id="component_product_#_1" placeholder="">
				</div>
				<label for="approved_for_use_by_date" class="col-sm-1 control-label form-inline">Date:</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="generated_by_date" placeholder="">
				</div>
				<label for="generated_#" class="col-sm-1 control-label form-inline">Used#:</label>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="generated_#" placeholder="">
				</div>
			</div>
			
			<div class="form-group">
				<label for="approved_for_use_by" class="col-sm-3 control-label form-inline">Undestroyed Labels Destroyed By:</label>
				<div class="col-sm-3">
					<input type="text" class="form-control form-inline" id="component_product_#_1" placeholder="">
				</div>
				<label for="approved_for_use_by_date" class="col-sm-1 control-label form-inline">Date:</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="generated_by_date" placeholder="">
				</div>
				<label for="generated_#" class="col-sm-1 control-label form-inline">Destroyed#:</label>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="generated_#" placeholder="">
				</div>
			</div>
			
			<hr>
			
			<div class="form-group">
				<label for="nothing" class="col-sm-2 control-label form-inline text-danger">Heat Seal:</label>
				<label for="approved_for_use_by" class="col-sm-2 control-label form-inline">Target Burst Pressure:</label>
				<div class="col-sm-1">
					<input type="text" class="form-control form-inline" id="component_product_#_1" placeholder="">
				</div>
				<label for="approved_for_use_by_date" class="col-sm-2 control-label form-inline">Alert Limit:</label>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="generated_by_date" placeholder="">
				</div>
				<label for="generated_#" class="col-sm-2 control-label form-inline">Action Limit:</label>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="generated_#" placeholder="">
				</div>
			</div>
			
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>time</th>
						<th>Sample #</th>
						<th>Burst Pressure</th>
						<th>Burst Location</th>
						<th>Seal Transfer %</th>
						<th>Wicking(present/absent)</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><input type="text" class="form-control form-inline" id="" placeholder=""></td>
						<td><input type="text" class="form-control form-inline" id="" placeholder=""></td>
						<td><input type="text" class="form-control form-inline" id="" placeholder=""></td>
						<td><input type="text" class="form-control form-inline" id="" placeholder=""></td>
						<td><input type="text" class="form-control form-inline" id="" placeholder=""></td>
						<td><input type="text" class="form-control form-inline" id="" placeholder=""></td>
					</tr>
					<tr>
						<td><input type="text" class="form-control form-inline" id="" placeholder=""></td>
						<td><input type="text" class="form-control form-inline" id="" placeholder=""></td>
						<td><input type="text" class="form-control form-inline" id="" placeholder=""></td>
						<td><input type="text" class="form-control form-inline" id="" placeholder=""></td>
						<td><input type="text" class="form-control form-inline" id="" placeholder=""></td>
						<td><input type="text" class="form-control form-inline" id="" placeholder=""></td>
					</tr>
					<tr>
						<td><input type="text" class="form-control form-inline" id="" placeholder=""></td>
						<td><input type="text" class="form-control form-inline" id="" placeholder=""></td>
						<td><input type="text" class="form-control form-inline" id="" placeholder=""></td>
						<td><input type="text" class="form-control form-inline" id="" placeholder=""></td>
						<td><input type="text" class="form-control form-inline" id="" placeholder=""></td>
						<td><input type="text" class="form-control form-inline" id="" placeholder=""></td>
					</tr>
					<tr>
						<td><input type="text" class="form-control form-inline" id="" placeholder=""></td>
						<td><input type="text" class="form-control form-inline" id="" placeholder=""></td>
						<td><input type="text" class="form-control form-inline" id="" placeholder=""></td>
						<td><input type="text" class="form-control form-inline" id="" placeholder=""></td>
						<td><input type="text" class="form-control form-inline" id="" placeholder=""></td>
						<td><input type="text" class="form-control form-inline" id="" placeholder=""></td>
					</tr>
				</tbody>
			</table>
			
			<div id="machine_used" class="text-primary text-center">
				<h4>Machine Used</h4>
			</div>
			
			<div class="form-group">
				<label for="nothing" class="col-sm-2 control-label form-inline text-primary col-sm-offset-2">CE-002:</label>
				<label for="approved_for_use_by" class="col-sm-2 control-label form-inline">High Temp/Dwell:</label>
				<div class="col-sm-1">
					<input type="text" class="form-control form-inline" id="component_product_#_1" placeholder="">
				</div>
				
				<div class="col-sm-1">
					<input type="text" class="form-control" id="generated_by_date" placeholder="">
				</div>
			</div>
			
			<div class="form-group">
				<label for="nothing" class="col-sm-2 control-label form-inline text-primary col-sm-offset-2">CE-009:</label>
				<label for="approved_for_use_by" class="col-sm-2 control-label form-inline">Heat/Dwell/Pressure:</label>
				<div class="col-sm-1">
					<input type="text" class="form-control form-inline" id="component_product_#_1" placeholder="">
				</div>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="generated_by_date" placeholder="">
				</div>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="generated_by_date" placeholder="">
				</div>
			</div>
			
			<div class="form-group">
				<label for="nothing" class="col-sm-2 control-label form-inline text-primary col-sm-offset-2">CE-029:</label>
				<label for="approved_for_use_by" class="col-sm-2 control-label form-inline">Heat/Dwell:</label>
				<div class="col-sm-1">
					<input type="text" class="form-control form-inline" id="component_product_#_1" placeholder="">
				</div>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="generated_by_date" placeholder="">
				</div>
			</div>
			
			<div class="form-group">
				<label for="nothing" class="col-sm-2 control-label form-inline text-primary col-sm-offset-2">CE-029:</label>
				<label for="approved_for_use_by" class="col-sm-2 control-label form-inline">Heat/Dwell:</label>
				<div class="col-sm-1">
					<input type="text" class="form-control form-inline" id="component_product_#_1" placeholder="">
				</div>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="generated_by_date" placeholder="">
				</div>
			</div>
			
			<div class="form-group">
				<label for="nothing" class="col-sm-2 control-label form-inline text-primary col-sm-offset-2">CE-039:</label>
				<label for="approved_for_use_by" class="col-sm-2 control-label form-inline">Heat/Dwell:</label>
				<div class="col-sm-1">
					<input type="text" class="form-control form-inline" id="component_product_#_1" placeholder="">
				</div>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="generated_by_date" placeholder="">
				</div>
			</div>
			
			<div class="form-group">
				<label for="nothing" class="col-sm-2 control-label form-inline text-primary col-sm-offset-2">CE-376:</label>
				<label for="approved_for_use_by" class="col-sm-2 control-label form-inline">Heat/Dwell:</label>
				<div class="col-sm-1">
					<input type="text" class="form-control form-inline" id="component_product_#_1" placeholder="">
				</div>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="generated_by_date" placeholder="">
				</div>
			</div>
			
			<hr>
			
			<div class="form-group">
				<label for="nothing" class="col-sm-2 control-label form-inline text-primary col-sm-offset-2">Sealed By/Date</label>
				<div class="col-sm-3">
					<input type="text" class="form-control form-inline" id="component_product_#_1" placeholder="">
				</div>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="generated_by_date" placeholder="">
				</div>
			</div>
						
			<div class="form-group">
				<label for="nothing" class="col-sm-2 control-label form-inline text-primary col-sm-offset-2">Sealed By/Date</label>
				<div class="col-sm-3">
					<input type="text" class="form-control form-inline" id="component_product_#_1" placeholder="">
				</div>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="generated_by_date" placeholder="">
				</div>
			</div>				
			<br>
			<button type="submit" class="btn btn-success col-sm-offset-8">Submit Batch History Record</button>
		
		</form>
	</div>
 
@stop