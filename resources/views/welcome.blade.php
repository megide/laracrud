<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>all beverages</h1>
    <table border="2">
        <thead>
            <th>Name</th>
            <th>price</th>
            <th>date created</th>
            <th>updated at</th>
            <th>opetaions</th>
           
        </thead>

    <tbody>
        @foreach ($beverages  as $b )
        <tr>


            <td>
                {{ $b->name }}
            </td>
            <td>
                {{ $b->price }}
            </td>
            <td>    
                {{ $b->created_at }}
            </td>
            <td>    
                {{ $b->updated_at }}
                <td><a href="{{ route('beverage.edit',$b->id) }}">edit</a> <a href="">remove</a> </td>
                <td>
                    <form action="/beverage/{{ $b->id }}" method='post'>
            
                        @method('delete')
                        @csrf
                        <button type="submit">remove</button>
                    </form>
                    
                    </td>  
            </td>
        </tr>

        @endforeach
    </tbody>
      
      
       
      
          
      

    </table> 
</body>
</html>
    
