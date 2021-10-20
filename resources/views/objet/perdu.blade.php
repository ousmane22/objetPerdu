@extends('partials.nav')


 @section('content')
<!-- component -->
<div class="">
    <div class="container max-w-screen-lg mx-auto">
      <div>
        <h2 class="font-semibold text-xl text-green-600">Informations sur votre objet perdu</h2>
        <p class="text-gray-500 mb-6"></p>

        <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
          <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
            <div class="text-gray-600">
              <p class="font-medium text-lg">Détails de l'objet</p>
            </div>


                <div class="lg:col-span-2 sm:col-span-3">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf

                    <div class="md:col-span-5">
                        <label for="full_name">Etat de l'objet</label>
                        <input type="text" name="name" value="" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                    </div>

                    <div class="md:col-span-5 mt-3">
                        <label for="full_name">Vous avez perdu?</label>
                        <select type="text" name="name" value="" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" >
                            <option value="">CNI</option>
                        </select>
                    </div>

                    <div class="md:col-span-5 mt-3">
                        <label for="full_name">Numero de référence</label>
                        <input type="text" name="name" value="" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                    </div>

                    <div class="md:col-span-5 mt-3">
                        <label for="full_name">Date de perte</label>
                        <input type="date" name="datePerte" value="" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                    </div>

                    <div class="md:col-span-5 mt-3">
                        <label for="full_name">Dites nous plus en détails sur l'objet</label>
                        <textarea name="description" id="" cols="5" rows="2" class="form-control">

                        </textarea>
                    </div>


                        <div class="mt-3">
                            <div class="form-group m-2">
                                <label for="">Image 1</label>
                                <input type="file" name=""  class="form-control h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                            </div>



                            <div class="form-group m-2">
                                <label for="">Image 2</label>
                                <input type="file" name=""  class="form-control h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                            </div>



                            <div class="form-group m-2">
                                <label for="">Image 3</label>
                                <input type="file" name=""  class="form-control h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                            </div>
                        </div>

                    <div class="md:col-span-5 text-right">
                    <div class="inline-flex items-end">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Envoyer</button>
                    </div>
                    </div>

                </div>
                </div>
           </form>
          </div>
        </div>
      </div>


    </div>
  </div>
  @stop
