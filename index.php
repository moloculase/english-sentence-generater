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
    function sen() {
        include("list.php");
        $rand_con = array_rand($conjuctions,1);
        $rand1 = array_rand($nouns_start,1);
        $rand2 = array_rand($verbs,1);
        $rand3 = array_rand($adject,1);
        $rand4 = array_rand($nouns,1);
        if (rand(1,2) == 1) {
            return $conjuctions[$rand_con]." ".$nouns_start[$rand1]." ".$verbs[$rand2]." a ".$adject[$rand3]." ".$nouns[$rand4];
        } else {
            return $nouns_start[$rand1]." ".$verbs[$rand2]." a ".$adject[$rand3]." ".$nouns[$rand4];
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
