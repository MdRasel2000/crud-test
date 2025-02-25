<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <style type="text/tailwindcss">
        @layer utilities {
            .container {
                @apply px-10 mx-auto;

            }
        }
    </style>
    <title>CRUD</title>
</head>

<body>
    <div class="container">
        <div class="flex justify-between my-5">
            <h1 class="text-red-600 text-xl">Home</h1>
            <a href="/create" class="bg-green-600 text-white rounded  py-2 px-4">Add New Product</a>
        </div>
        <div class="">
          <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
              <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                  <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-green-600 text-white">
                      <tr>
                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium uppercase">id</th>
                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium  uppercase">name</th>
                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium  uppercase">price</th>
                        <th scope="col" class="px-6 py-3 text-end text-xs font-medium  uppercase">sku_code</th>
                        <th scope="col" class="px-6 py-3 text-end text-xs font-medium  uppercase">description</th>
                        <th scope="col" class="px-6 py-3 text-end text-xs font-medium uppercase">image</th>
                        <th scope="col" class="px-6 py-3 text-end text-xs font-medium  uppercase">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr class="odd:bg-white even:bg-gray-100">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">{{$product->id}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$product->name}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$product->price}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$product->sku_code}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$product->description}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800"><img src="images/{{$product->image}}" width= "80px"></td>
                            <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                              <a href="{{url('edit/'.$product->id)}}" class="bg-green-600 text-white rounded  py-2 px-4">Edit</a>
                              <a href="{{url('delete/'.$product->id)}}" class="bg-red-600 text-white rounded  py-2 px-4">Delete</a>
                            </td>
                          </tr> 
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</body>
</html>
