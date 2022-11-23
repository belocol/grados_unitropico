@extends('layouts.vistapadre')


@section('contenidoPrincipal')


<!-- component -->
<section class="max-w-4xl p-6 mx-auto bg-indigo-600 rounded-md shadow-md dark:bg-gray-700 mt-20">
  <h1 class="text-xl font-bold text-white capitalize dark:text-white">Solicitud de grado</h1>
  <form>
      <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
          <div>
              <label class="text-white dark:text-gray-200" for="username" >Nombres Completos</label>
              
              <input id="username" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-black-800 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
          </div>

          <div>
              <label class="text-white dark:text-gray-200" for="emailAddress">Correo Institucional</label>
              <input id="emailAddress" type="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-black-800 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
          </div>

          <div>
              <label class="text-white dark:text-gray-200" for="password">Celular</label>
              <input id="password" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-black-800 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
          </div>

          <div>
              <label class="text-white dark:text-gray-200" for="passwordConfirmation">Direccion</label>
              <input id="passwordConfirmation" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-black-800 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
          </div>
         
          <div>
              <label class="text-white dark:text-gray-200" for="passwordConfirmation">Programa Academico</label>
              <select class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                <option>Seleccione </option>
                <option>Ingenieria de sistemas por ciclos propedeuticos</option>
                  <option>Jakarta</option>
                  <option>Tangerang</option>
                  <option>Bandung</option>
              </select>
          </div>
        
      </div>

      <div class="flex justify-end mt-6">
          <button class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-green-600 rounded-md hover:bg-pink-700 focus:outline-none focus:bg-gray-600">ENVIAR</button>
      </div>
  </form>
</section>


  
  
  

  
 
  
  
  
@endsection