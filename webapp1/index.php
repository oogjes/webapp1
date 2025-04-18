<html>
    <head>
        <link rel="stylesheet" href="assets\css\style.css">

        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Livvic:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">

    </head>

    <body>
        <header>
            <nav>
                <ul class="home-text">
                    <h1> <li><a href="index.php">Home</a></li> </h1>
                </ul>

                

                <ul class="header-text">
                    <p> <li><a href="index.php">Menu</a></li> </p>
                    <p> <li><a href="contact.php">Contact</a></li> </p>
                </ul>
            </nav>
        </header>

        <main>
            <div> <img src="assets/img/extra/home-img3.png" width= 100% ><div>
            <h1 class= "menu-text">Menu</h1>

            <!-- menu in php-->
            <?php
                include("dbcalls/read.php");
                include('dbcalls/conn.php');

                // Starters
                foreach ($result2 as $key => $value){
                if ($value['catogorie'] == 'starters'){
                    echo '<div class="menu" >';
                    
                    echo '<h1> starters </h1>';
                        echo '<section class="catogorie">';
                            //echo '<br>' . $value['ID'];
                            
                            //Naam
                            echo '<div class="name" >';
                                echo '<br> ' . $value['Productnaam'];
                            echo '</div>';

                            //beschrijving
                            echo '<div class="beschrijving" >';
                                echo '<br> ' . $value['beschrijving'];
                            echo '</div>';

                            //prijs
                            echo '<div class="prijs" >';
                                echo '€' . $value['prijs'];
                                echo ' <button class="button" value="add">Add +</button>';
                            echo '</div>';

                            //img
                            echo '<br> ' . ' <img src="' . $value['img'] . '">';
    
                        echo '</section >';
                    
                    
                }
                // Main course
                else if ($value['catogorie'] == 'main course'){
                    echo '<h1> main course </h1>';
                        echo '<div class="menu" >';
                
                        echo '<section class="catogorie">';
                            //echo '<br>' . $value['ID'];

                            //Naam
                            echo '<div class="name" >';
                                echo '<br> ' . $value['Productnaam'];
                            echo '</div>';

                            //beschrijving
                            echo '<div class="beschrijving" >';
                                echo '<br> ' . $value['beschrijving'];
                            echo '</div>';

                            //prijs
                            echo '<div class="prijs" >';
                                echo '€' . $value['prijs'];
                                echo ' <button class="button" value="add">Add +</button>';
                            echo '</div>';

                            //img
                            echo '<br> ' . ' <img src="' . $value['img'] . '">';
    
                        echo '</section >';
                }
                // dessert
                else if ($value['catogorie'] == 'dessert'){
                    echo '<h1> dessert </h1>';
                        echo '<div class="menu" >';
                
                        echo '<section class="catogorie">';
                            //echo '<br>' . $value['ID'];
                            
                            //Naam
                            echo '<div class="name" >';
                                echo '<br> ' . $value['Productnaam'];
                            echo '</div>';

                            //beschrijving
                            echo '<div class="beschrijving" >';
                                echo '<br> ' . $value['beschrijving'];
                            echo '</div>';

                            //prijs
                            echo '<div class="prijs" >';
                                echo '€' . $value['prijs'];
                                echo ' <button class="button" value="add">Add +</button>';
                            echo '</div>';

                            //img
                            echo '<br> ' . ' <img src="' . $value['img'] . '">';
    
                        echo '</section >';
                        echo '</div>'; 
                }

            }

                    echo '<form action="./dbcalls/delete.php" method ="POST">';
                    echo '<input type="hidden" value="' .$value['ID']. '">';
                    echo '<input type="submit" name="" value="delete">';
                    echo '</form>';
            ?> 

            </section>
            <h1 class="drinks-text"><a href="drinks.php">Drinks</a></h1>
        </main>

        <footer>
            <p>Heyendaalseweg  98</p>
            <p>6525 EE  Nijmegen</p>
        </footer>
    </body>

</html>