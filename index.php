<?php 
/* mandarin bot
made by: ahmed adhiyyu mohamed hassan
email: adhiyyuahmed@gmail.com
*/  
    include("database.php");
    $domain_with_slash = "http://localhost/ma/";
    function redirect($url_r = 'http://localhost/ma/error.php', $send="") {
        header("Location: ".$url_r."?".$send ?? null);
        exit();
    }
    $lines = 20;

    function rand_word() {
        $word = null;
        $lenght = rand(5,12);
        $s = 0;
        while ($s < $lenght) {
            $letter_rand_123 = rand(1,30);
            switch ($letter_rand_123) {
                case '1':
                    $word = $word."a";
                    break;
                case '2':
                    $word = $word."b";
                    break;
                case '3':
                    $word = $word."c";
                    break;
                case '4':
                    $word = $word."d";
                    break;
                case '5':
                    $word = $word."e";
                    break;
                case '6':
                    $word = $word."f";
                    break;
                case '7':
                    $word = $word."g";
                    break;
                case '8':
                    $word = $word."h";
                    break;
                case '9':
                    $word = $word."i";
                    break;
                case '10':
                    $word = $word."j";
                    break;
                case '11':
                    $word = $word."k";
                    break;
                case '12':
                    $word = $word."l";
                    break;
                case '13':
                    $word = $word."m";
                    break;
                case '14':
                    $word = $word."n";
                    break;
                case '15':
                    $word = $word."o";
                    break;
                case '16':
                    $word = $word."p";
                    break;
                case '17':
                    $word = $word."q";
                    break;
                case '18':
                    $word = $word."r";
                    break;
                case '19':
                    $word = $word."s";
                    break;
                case '20':
                    $word = $word."t";
                    break;
                case '21':
                    $word = $word."u";
                    break;
                case '22':
                    $word = $word."v";
                    break;
                case '23':
                    $word = $word."w";
                    break;
                case '24':
                    $word = $word."x";
                    break;
                case '25':
                    $word = $word."y";
                    break;
                case '26':
                    $word = $word."z";
                    break;
                case '27':
                    $word = $word."a";
                    break;
                case '28':
                    $word = $word."a";
                    break;
                case '29':
                    $word = $word."a";
                    break;
                case '30':
                    $word = $word."a";
                    break;
            }
            $s = $s + 1;
        }
        return $word;      
    } 
    function sen() {
        include("list.php");
        $rand_back = array_rand($items,1);
        $rand_quote = array_rand($quote,1);
        $conjuctions = array(
            'and',
            'while',
            'so',
            'if',
            'but',
            'or',
            'yet',
            'nor',
            'after',
            'for',
            'as',
            'as though',
            'to which',
            'Now that',
            'Even if',
            'As soon as',
            'Provided that',
            'Until',
            'Wherever',
            'Provided that',
            'so that',
            'i willed'
        );
        $rand_con = array_rand($conjuctions,1);
        if (rand(1,2) == 1) {
            return $conjuctions[$rand_con]." ".$quote[$rand_quote]." ".$items[$rand_back].". ";
        } else {
            return $quote[$rand_quote]." ".$items[$rand_back].". ";
        }     
    }
  
    $q = 0;
    $poem = null;
    while ($q < $lines) {
        $poem = $poem.sen()."<br>";     
        $q = $q + 1;
    }
    
    $heading = explode("<br>", $poem);
    $heading_get = $heading[rand(1,$lines - 15)];
    echo "<h1>".$heading_get."</h1>";
    echo "<h4>a poem made by mandarin bot</h4><br>";
    echo $poem."<br>";
    echo "<title>".$heading_get." | by: MandarinBot</title>";

    if (rand(1, 10) == 1) {
        $sql = 'INSERT INTO bad (texts) VALUES (:texts)';
        $statement = $pdo->prepare($sql);                
        $statement->execute([
            ':texts' => $poem,
        ]);
    }

     

    $sql = 'SELECT * FROM bad WHERE texts = :texts';
    $statment = $pdo->prepare($sql);
    $statment->execute([
        ':texts' => $poem
    ]);
    $post = $statment->fetch();

    if ($post !== false) {
        redirect("http://localhost/ma/index.php");
        echo "bad";
        
    }
    
?>
