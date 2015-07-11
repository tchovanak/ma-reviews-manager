@extends('master')
	
	@section('head-script')
		 var editedPortal = {};
		 $(function() {
			tableRowsSelection();
			$("#btn1").click(function() {
				SwapDivsWithClick('swapper1','btn1');
			});
			$("#btn2").click(function() {
				 SwapDivsWithClick('swapper2','btn2');
			});
			$("#addPortal").click(function(){
				$("#addPortalModal").modal();
			});
			$("#addPortal").click(function(){
				$("#addPortalModal").modal();
			});
			$("#editPortal").click(function(){
				$("#editPortalModal").modal();
				$("#portalLabel").val($(".highlight:eq(0) td:eq(1)").text());
			});
			$("#deletePortal").click(function(){
				$("#deletePortalModal").modal();
				$("#portalName").text($(".highlight:eq(0) td:eq(1)").text());
				$("#inputPortalId").val($(".highlight:eq(0) td:eq(0)").text());
			});
			
			
		  });
	@stop
	
	@section('main-container')
		<script>
			$("#enumsTab").addClass("active");
		</script>
		<div class="row">
			<ul class="nav nav-tabs">
			  <li id="btn1" role="presentation" class="active"><a href="#">Portály</a></li>
			  <li id="btn2" role="presentation"><a href="#">Redaktori</a></li>
			  <li id="btn3" role="presentation"><a href="#">Kontakty</a></li>
			</ul>
		</div>
		
	  
		<div id="swapper1" class="col-md-10 col-sm-9" style="display:block">
			<!-- Modal - ADD PORTAL -->
			  <div class="modal fade" id="addPortalModal" role="dialog">
				<div class="modal-dialog">
				  <!-- Modal content-->
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					  <h4 style="color:red;">Pridanie nového portálu</h4>
					</div>
					<div class="modal-body">
					  <?php echo Form::open(array('route' => 'enums.addPortal','method' => 'post')) ?>
						<div class="form-group">
						  <label>Skratka označujúca portál:</label>
						  <?php echo Form::text('label',null, ['class' => 'form-control']) ?>
						</div>
						<button id="btnSubmitAddPortalForm" type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-ok"></span> Pridať</button>
					  <?php echo Form::close() ?>
					</div>
					<div class="modal-footer">
					</div>
				  </div>
				</div>
			  </div> 
			  
			  <!-- Modal - EDIT PORTAL -->
			  <div class="modal fade" id="editPortalModal" role="dialog">
				<div class="modal-dialog">
				  <!-- Modal content-->
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					  <h4 style="color:red;">Upravenie existujúceho portálu</h4>
					</div>
					<div class="modal-body">
					  <form class="add" action="enums/portals" method="post">
						<div class="form-group">
						  <label>Skratka označujúca portál: </label>
						  <?php echo Form::text('label',null, ['class' => 'form-control','id' => 'portalLabel']) ?>
						</div>
						<button id="btnSubmitEditPortalForm" type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-ok"></span> Uložiť</button>
					  </form>
					</div>
					<div class="modal-footer">
					</div>
				  </div>
				</div>
			  </div> 
			
			  <!-- Modal - DELETE PORTAL -->
			  <div class="modal fade" id="deletePortalModal" role="dialog">
				<div class="modal-dialog">
				  <!-- Modal content-->
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					  <h4 style="color:red;">Odstránenie portálu z databázy</h4>
					</div>
					<div class="modal-body">
					   Skutočne chcete portál : <b><span id="portalName"></span></b> odstrániť z databázy ?
					</div>
					<div class="modal-footer">
						<?php $portalId = 0; echo Form::open(array('route' => array('enums.deletePortal',$portalId),'method' => 'post')) ?>
							 <?php echo Form::hidden('id',$portalId,array('id' => 'inputPortalId')) ?>
							
							<button id="btnConfirmDeletePortal" type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-ok"></span> Zmazať</button>
						 <?php echo Form::close() ?>
					</div>
				  </div>
				</div>
			  </div>
			
			<div style="display:inline">
				<button id="deletePortal" type="button" class="btn btn-default" aria-label="Remove" style="float:right;margin:5px;">
				  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
				<button id="addPortal" type="button" class="btn btn-default" aria-label="Add" style="float:right;margin:5px;">
				  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
				</button>
				<button id="editPortal" type="button" class="btn btn-default" aria-label="Edit" style="float:right;margin:5px;">
				  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
				</button>
			</div>
			<table class="table" class="list">
			  <tr>
				<th>ID</th>
				<th>PORTÁL(skratka)</th>
				<th></th>
			  </tr>
			  <!-- IMPORTANT, class="list" have to be at tbody -->
			  <tbody class="list">				     	
					  @foreach ($portals as $portal)
		               <tr>
		                   <td><p>{{$portal->id}}<p></td>
		                   <td><p>{{$portal->label}}</p></td>
		               </tr>
		               @endforeach 
				   </tbody>
				 </table>
 		</div>
		
		<div id="swapper2" class="col-md-10 col-sm-9" style="display:none">
 			HELLO 2
 		</div>
    @stop

