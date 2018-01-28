<?php

        //Make connection to database
        include 'init.php';
        //Prepare query to select all
        $query="SELECT * FROM products";
        //run query and store result
        $result=mysqli_query($connection, $query);
        //loop through result and display name, price then image name, edit to show image
        $num_row = mysqli_num_rows($result);
        echo 'Welcome <strong>'. $_SESSION['email']. '</strong><a href="index.php?content=logout"> Log Out</a><br />';
        echo 'Number of records is ' . $num_row ."";
        echo '<a href="index.php?content=InsertForm"> Insert New Product</a>';
        echo '<table border=1>
                <col width="100">
                <col width="100">
                <col width="100">
                <col width="100">
                <col width="100">
                <col width="100">
                <col width="100">
                <col width="100">
                <col width="100">
                <col width="100">
                <col width="100">
                <col width="100">
                <col width="100">
                <tr>
                    <td> ProductID</td>
                    <td> Product Name</td>
                    <td> Product Brand</td>
                    <td> Price &pound</td>
                    <td> Country/td>
                    <td> Alcohol</td>
                    <td> Centilitre</td>
                    <td> Image</td>
                    <td> Review</td>
                    <td> Amend</td>
                    <td> Delete</td>
                </tr>
                
            </table>';
        //Then add delete link followed by update link
        while($row=mysqli_fetch_assoc($result)){
            echo '<table border=1>
                <col width="100">
                <col width="100">
                <col width="100">
                <col width="100">
                <col width="100">
                <col width="100">
                <col width="100">
                <col width="100">
                <col width="100">
                <col width="100">   
                <col width="100">
                <tr>
                    <td>'. $row['id']. '</td>
                    <td>'. $row['name']. '</td>
                    <td>'. $row['type']. '</td>
                    <td>'. $row['price']. '</td>
                    <td>'. $row['country']. '</td>
                    <td>'. $row['alcohol']. '</td>
                    <td>'. $row['centilitre']. '</td>
                    <td>'. '<img src=" ' . $row['image'] . '" width="50px"/>'. '</td>
                    <td>'. $row['review']. '</td>
                    <td>'. '<a href="index.php?content=AmendProduct&theid='. $row['id']. '"> Amend</a>'. '</td>
                    <td>'. '<a href="index.php?content=DeleteProduct&theid='. $row['id']. '"> Delete</a>'. '</td>
                </td>
                
            </table>';
        }
        
        ?>