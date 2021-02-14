        <?php
            // Executa o comando SQL
            $query = mysqli_query($con, $SQL);
            if($query){
                echo "";
            } else {
                echo mysqli_error($con);
            }
            mysqli_close($con);
        ?>

    </body>
</html