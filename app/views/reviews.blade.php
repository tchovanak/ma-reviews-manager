@extends('master')

	@section('head-script')
		$("#reviewsTab").addClass("active");
	@stop
	
	@section('main-container')
	
	  <div class="row">
	  <h3>Pridaj novú Testovačku</h3>
	     @if (count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li><b>Chyba: </b> {{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		@if (!empty(Session::get('confirmation_code')))
			<script>
			  $(function() {
				$("#myModal").modal();
			  });
			</script>
			
		@endif
		<!-- Modal -->
		<div id="myModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Modal Header</h4>
			  </div>
			  <div class="modal-body">
				<p>Some text in the modal.</p>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			</div>

		  </div>
		</div>
		
        <form class="add" action="testings/add" method="post">
	   
         <div class="form-group col-md-4 group1">
            <label>*Spoločnosť:</label>
             <?php echo Form::select('company',$companies,null, ['class' => 'form-control']) ?>
            <label>*Zariadenie:</label>
            <?php echo Form::text('device_model',null, ['class' => 'form-control']) ?>
            <label>*Typ zariadenia:</label>
            <?php echo Form::select('device_type',$device_types,null, ['class' => 'form-control']) ?>
          </div>
		  
          <div class="form-group col-md-4">
            <label>*Prevzaté dňa</label>
			<?php echo Form::text('received_date',null, ['class' => 'form-control datepicker']) ?>
            <label>*Plánovaný deň publikovania</label>
			<?php echo Form::text('planned_publish_date',null,['class' => 'form-control datepicker']) ?>
          </div>
          
          <div class="form-group col-md-4">
			<label>*Portál</label>
			<?php echo Form::select('portal',$portals, null, ['class' => 'form-control']) ?>
            <label>*Testuje:</label>
			<?php echo Form::select('redactor',$redsContacts, null, ['class' => 'form-control']) ?>
          </div>
           <button id="addTesting" type="submit" class="btn btn-primary">Pridaj testovanie</button>
        </form>
      </div>
     
	 <div class="row">
     <h3>Aktuálne testované zariadenia</h3>
      <div class="container col-md-12 testing">
        <form>
        <table class="table vert-align">
          <thead>
            <tr>
              <th>#</th>
              <th>Zariadenie</th>
              <th>Prevzané</th>
              <th>Plán</th>
              <th>Testuje</th>
              <th>Portál</th>
              <th>Online</th>
              <th>Vrátené</th>
              <th>Ostáva redakcii</th>
            </tr>
          </thead>
          <tr>
            <th scope="row">1</th>
            <td class="vert-align">Samsung Galaxy S6</td>
            <td class="vert-align">30.3.2015</td>
            <td class="vert-align">5.4.2015</td>
            <td class="vert-align">Matúš Kapusta</td>
            <td class="vert-align">MA</td>
            <td class="vert-align">
              <input type="date" class="form-control" name="online">
            </td>
            <td class="vert-align">
                <input type="date" class="form-control" name="vratene">
            </td>
            <td class="vert-align">
              <input type="checkbox" value="">
            </td>
          </tr>
          <tr class="unfinished">
            <th scope="row">1</th>
            <td class="vert-align">HTC One M9</td>
            <td class="vert-align">20.3.2015</td>
            <td class="vert-align">5.4.2015</td>
            <td class="vert-align">Fero Chovaňák</td>
            <td class="vert-align">MA</td>
             <td class="vert-align">
               <input type="date" class="form-control" name="bday" value="2011-09-08">
            </td>
            <td class="vert-align">
                <input type="date" class="form-control" name="bday">
            </td>
            <td class="vert-align">
              <input type="checkbox" value="">
            </td>
          </tr>
          <tr class="complete">
            <th scope="row">1</th>
            <td class="vert-align">Samsung Galaxy S6</td>
            <td class="vert-align">30.3.2015</td>
            <td class="vert-align">5.4.2015</td>
            <td class="vert-align">Matúš Kapusta</td>
            <td class="vert-align">MA</td>
             <td class="vert-align">
               <input type="date" class="form-control" name="bday">
            </td>
            <td class="vert-align">
                <input type="date" class="form-control" name="bday">
            </td>
            <td class="vert-align">
              <input type="checkbox" value="" checked>
            </td>
          </tr>
        </table>
        </form>
      </div>
     </div>
     
	 <div class="row">
     <h3>Publikované recenzie</h3>
      <div class="container col-md-12 testing">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>#</th>
            <th>Zariadenie</th>
            <th>Publikované</th>
            <th>Mimo plánu</th>
            <th>Testoval</th>
            <th>Portál</th>
          </tr>
          </thead>
          <tr>
            <th scope="row">1</th>
            <td>Samsung Galaxy S6</td>
            <td>30.3.2015</td>
            <td>5.4.2015</td>
            <td>Matúš Kapusta</td>
            <td>MA</td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>HTC One M9</td>
            <td>20.3.2015</td>
            <td>5.4.2015</td>
            <td>Fero Chovaňák</td>
            <td>MA</td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Samsung Galaxy S6</td>
            <td>30.3.2015</td>
            <td>5.4.2015</td>
            <td>Matúš Kapusta</td>
            <td>MA</td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Samsung Galaxy S6</td>
            <td>30.3.2015</td>
            <td>5.4.2015</td>
            <td>Matúš Kapusta</td>
            <td>MA</td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>HTC One M9</td>
            <td>20.3.2015</td>
            <td>5.4.2015</td>
            <td>Fero Chovaňák</td>
            <td>MA</td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Samsung Galaxy S6</td>
            <td>30.3.2015</td>
            <td>5.4.2015</td>
            <td>Matúš Kapusta</td>
            <td>MA</td>
          </tr>
        </table>
      </div>
     </div>
    @stop

