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
        <h1 class="text-red-600 text-xl">Create</h1>
        <a href="/" class="bg-green-600 text-white rounded  py-2 px-4">Back To Home</a>

       </div>
       <div class="container">
        <form action="{{url('/store')}}" method="POST" enctype="multipart/form-data">
            @csrf
           <div class="flex flex-col gap-5">
            <label for="">Name</label>
            <input type="text" name="name" value="" placeholder="product name" required>
            <label for="">Sku Code</label>
            <input type="text" name="sku_code" value="" placeholder="sku_code " required>
            <label for="">Description</label>
            <input class="text" name="description" value="" placeholder="description">
            <label for="">Price</label>
            <input class="text" name="price" value="" placeholder=" price" required>
            <label for="">Image</label>
            <input type="file" name="image">
            <div>
                <input type="submit" class="bg-green-600  text-white rounded py-2 px-4 inline-block"> 
            </div>
           </div>
        </form>

    </div>
    </div>
</body>
</html>