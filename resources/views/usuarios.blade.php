

@extends('layouts.app')

@section('content')
 
 <div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>correo</th>
                <th>acciones</th>
            </tr>
        </thead>
        <tbody>
         <?php 
            // foreach ($users as $user) {
            //     echo "<tr>";
            //     echo "<td>";
            //     echo $user->id;
            //     echo "</td>";
            //     echo "<td>";
            //     echo $user->name;
            //     echo "</td>";
            //     echo "<td>";
            //     echo $user->email;
            //     echo "</td>";
            //     echo "</tr>";
            // }
          ?>


        <!--  <?php foreach ($users as $user) { ?>
            <tr>
                <td> <?php echo $user->id; ?></td>
                <td> <?php echo $user->name; ?></td>
                <td> <?php echo $user->email; ?></td>                
            </tr>
        <?php  } ?> -->

        @foreach ($users as $user)
            <tr>
                <td> {{ $user->id }} </td>
                <td> {{ $user->name }} </td>
                <td> {{ $user->email }} </td>                
                <td> <button>eliminar</button> </td>                
            </tr>
        @endforeach


        </tbody>

    </table>
 </div>


 @endsection
