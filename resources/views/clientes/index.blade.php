@extends('layouts.plantilla')
@section('tittle','Clientes')
@section('content')
<section class="flex">

			<!--Container-->
			<div class="container-fluid w-full md:w-full xl:w-full  mx-auto px-10">


                <!--Title-->
				  <h1 class="flex items-center font-sans font-semibold break-normal text-green-500 px-4 pt-6	my-4	 text-xl md:text-2xl">
					  Clientes
				  </h1>

				  <div class="relative flex mb-3">
					<form class="flex w-2/3" action="{{ route('clientes.search') }}" method="GET">
						@csrf

						<div class="w-6/12">
							<input type="text" name="filter" placeholder="Buscar"
								class="h-10 w-full pl-2 py-2 ml-4 placeholder-gray-400 text-gray-600 relative bg-white rounded text-sm border border-gray-400 outline-none focus:outline-none focus:ring" />
						</div>
						<div>
							<button type="submit" class="h-10 w-20 ml-4 text-white rounded-lg bg-red-500 hover:bg-red-600">Buscar</button>
						</div>
					</form>

					<div class="w-1/12">
					</div>
					<div class="ml-40">
						<a  href="{{route('clientes.create')}}">
							<button class="h-10 w-40 px-2 text-white rounded-lg bg-blue-700 hover:bg-blue-900"> Agregar cliente</button>
						</a>
					</div>
				  </div>




				  <br>
  				  <div class="flex flex-col">
						<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
						  <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
							<div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
							  <table class="min-w-full divide-y divide-gray-200">
								<thead class="bg-gray-300">
								  <tr>

									<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">
									  Razón Social
									</th>

									<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">
									  RUC
									</th>
									<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">
										Contacto
									</th>
								    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">
                                        Correo de Contacto
									</th>
									<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">
									    Celular de Contacto
									</th>
									<th scope="col" class="px-6 py-3 text-left text-xs font-medium text-black uppercase tracking-wider">
									    Opciones
									</th>
								  </tr>
								</thead>
								<tbody class="bg-white divide-y divide-gray-200">
								@foreach ( $clientes as $cliente )

								<tr class="{{$loop->even ? 'bg-gray-200' : 'bg-white'}}">


									<td class="px-6 py-4 whitespace-nowrap">
									<div class="flex items-center">
										<div class="flex-shrink-0 h-10 w-10">
										  	<img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
											</div>

											<div class="ml-4">
												<div class="text-sm font-medium text-gray-900">
													{{$cliente->nombre}}
												</div>

											</div>
									    </div>
									</td>

									<td class="px-6 py-4 whitespace-normal text-sm text-gray-500">
										{{$cliente->descripcion}}
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										<div class="text-sm text-gray-900">{{number_format($cliente->precio_compra,2,'.',' ')}}</div>
										<div class="text-sm text-gray-500">{{number_format($cliente->precio_venta,2,'.',' ')}}</div>
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
										   {{$cliente->ruc}}
										</span>
									  </td>
									<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
										    {{$cliente->contacto}}
									</td>
									<td class="px-6 py-2 whitespace-normal text-sm font-medium">

										<div class="flex space-x-1 justify-items-start">
											<a href="{{route('clientes.show',$cliente)}}">
												<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
											  	</svg>
											</a>
											<a href="{{route('clientes.show',$cliente)}}" class="text-indigo-600 hover:text-indigo-900 ">Ver</a>
										</div>

										<div class="flex space-x-1 justify-items-start" >
											<a href="{{route('clientes.edit',$cliente)}}">
												<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
												</svg>
											</a>
											<a href="{{route('clientes.edit',$cliente)}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
										</div>



										<div class="flex space-x-1 justify-items-start">
											<form class="flex" action="{{route('clientes.destroy',$cliente)}}" method="POST">
													@method('delete')
													@csrf
											 		<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
														<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
											 		</svg>
													 <button class="text-indigo-600 hover:text-indigo-900"type="submit"> Eliminar </button>
											</form>
										</div>


									</td>
								  </tr>
								@endforeach
								  <!-- More people... -->
								</tbody>
							  </table>
							</div>
						  </div>
						</div>
					  </div>

			</div>
			<!--/container-->

</section>
@endsection
