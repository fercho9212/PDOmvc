<table class="table table-bordered table-inverse table-responsive">
    <thead class="thead-inverset">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Category</th>
            <th>Precio</th>
        </tr>
    </thead>
    <tbody>
        

            <?php 
                    foreach($filas as $fila){
                        echo "<tr>";
                            echo "<td>".$fila['id']."</td>";
                            echo "<td>".$fila['name']."</td>";
                            echo "<td>" . $fila['description'] . "</td>";
                            echo "<td>" . $fila['category'] . "</td>";
                            echo "<td>" . $fila['sale'] . "</td>";
                        echo "</tr>";
                    }
                ?>

        </tr>
    </tbody>
</table>