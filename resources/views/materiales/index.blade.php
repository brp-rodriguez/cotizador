@extends('layouts.plantilla')
@section('tittle','Materiales')
@section('content')
<section class="flex">		
					      
			<!--Container-->
			<div class="container-fluid w-full md:w-full xl:w-full  mx-auto px-10 border-red-600 border">
					 
				  <!--Title-->
				  <h1 class="flex items-center font-sans font-semibold break-normal text-green-500 px-10 pt-6	 text-xl md:text-2xl">
					  Materiales
				  </h1>
				  
				  
				  <!--Card-->
				   <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">				   
					  
					  <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em; color: black;">
						  <thead>
							  <tr>
								  <th data-priority="1">Name</th>
								  <th data-priority="2">Position</th>
								  <th data-priority="3">Office</th>
								  <th data-priority="4">Age</th>
								  <th data-priority="5">Start date</th>
								  <th data-priority="6">Salary</th>
							  </tr>
						  </thead>
						  <tbody>
							
							@foreach ($materiales as $material)
								<tr>
									<td>{{$material->nombre}}</td>
									<td>{{$material->descripcion}}</td>
									<td>{{$material->unidad}}</td>
									<td>{{$material->lugar_compra}}</td>
									<td>{{$material->precio_compra}}</td>
									<td>{{$material->precio_venta}}</td>
								</tr>
							@endforeach	
							 
							  
							  <!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing)-->
							  
							  
						  </tbody>
						  
					  </table>
					  
					  
				  </div>
				  <!--/Card-->
	  	  
			</div>
			<!--/container-->	  		  

</section>
@endsection
