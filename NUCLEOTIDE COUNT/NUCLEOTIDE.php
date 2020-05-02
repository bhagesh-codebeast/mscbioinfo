<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        td{
    border:1px solid black;
    text-align: center;
    padding:5px;
    }
    table{
    padding-top: 10px;
    }
    h3{
    text-align:center;
    padding-top:50px;
    background-color: skyblue;
    }
    </style>
    <title>NUCLEOTIDE COUNT RESULT</title>
</head>
<body>
<?php


#if(isset($_POST['submit']) && !empty($sequp)){

if(isset($_POST['submit']) && !empty($_POST['DNA_SEQ'])){
    $sequence = $_POST['DNA_SEQ'];
    $sequp = strtoupper($sequence);
    $len = strlen( $sequp);
    
}elseif(isset($_POST['upload'])){
    $file_name = $_FILES['file']['name'];
        #$file_type = $_FILES['file']['type'];
        #$file_size = $_FILES['file']['size'];
        $file_tem_loc = $_FILES['file']['tmp_name'];
        $file_store = "/".$file_name;
    
        move_uploaded_file($file_tem_loc,$file_store);
        $fasta_sequence = file_get_contents("$file_store");
        $fasta_lines = explode("\n", $fasta_sequence);
        $sequence1 = "";
    
        foreach($fasta_lines as $line){// We strip possible whitespace (or other characters such as \t\n\r\0\x0B) // from the beginning and end of the line
            $line = trim($line);
            if(preg_match("/^>/", $line)){  // If the line starts with a > it's the header line
                $header = $line;
            }
            elseif($line != ""){
                $sequence1 = $sequence1.$line; // We concatenate each new sequence line in the $sequence variable
            }
            $sequp = strtoupper($sequence1);
            $len = strlen($sequp);
        }
        
}else{
    echo "<center><h3>please enter sequence</h3></center>";
}

if($_POST['type'] == 'dna' && !empty($len)){
    $a = substr_count( $sequp,"A");
    $t = substr_count( $sequp,"T");
    $g = substr_count( $sequp,"G");
    $c = substr_count( $sequp,"C");

    echo "<h3>NUCLEOTIDE COUNT</h3><br>";

    echo "<center><table><tr><td><b>BASES</b></td><td><b>COUNT</b></td><td><b>%</b></td></tr>";
    echo "<tr><td>A</td><td> ".$a."</td><td> ".round(100*($a/$len),2)."</td></tr>";
    echo "<tr><td>T</td><td> ".$t."</td><td> ".round(100*($t/$len),2)."</td></tr>";
    echo "<tr><td>G</td><td> ".$g."</td><td> ".round(100*($g/$len),2)."</td></tr>";
    echo "<tr><td>C</td><td> ".$c."</td><td> ".round(100*($c/$len),2)."</td></tr></table></center><br>";

}elseif ($_POST['type'] == 'rna' && !empty($len)) {
    $a = substr_count( $sequp,"A");
    $u = substr_count( $sequp,"U");
    $g = substr_count( $sequp,"G");
    $c = substr_count( $sequp,"C");

    echo "<h3>NUCLEOTIDE COUNT</h3><br>";

    echo "<center><table><tr><td><b>BASES</b></td><td><b>COUNT</b></td><td><b>%</b></td></tr>";
    echo "<tr><td>A</td><td> ".$a."</td><td> ".round(100*($a/$len),2)."</td></tr>";
    echo "<tr><td>U</td><td> ".$u."</td><td> ".round(100*($u/$len),2)."</td></tr>";
    echo "<tr><td>G</td><td> ".$g."</td><td> ".round(100*($g/$len),2)."</td></tr>";
    echo "<tr><td>C</td><td> ".$c."</td><td> ".round(100*($c/$len),2)."</td></tr></table></center><br>";

}elseif ($_POST['type'] == 'protein' && !empty($len)) {
    $G = substr_count( $sequp,"G");
    $P = substr_count( $sequp,"P");
    $A = substr_count( $sequp,"A");
    $V = substr_count( $sequp,"V");
    $L = substr_count( $sequp,"L");
    $I = substr_count( $sequp,"I");
    $M = substr_count( $sequp,"M");
    $C = substr_count( $sequp,"C");
    $F = substr_count( $sequp,"F");
    $Y = substr_count( $sequp,"Y");
    $W = substr_count( $sequp,"W");
    $H = substr_count( $sequp,"H");
    $K = substr_count( $sequp,"K");
    $R = substr_count( $sequp,"R");
    $Q = substr_count( $sequp,"Q");
    $N = substr_count( $sequp,"N");
    $E = substr_count( $sequp,"E");
    $D = substr_count( $sequp,"D");
    $S = substr_count( $sequp,"S");
    $T = substr_count( $sequp,"T");

    echo "<h3>AMINO ACID COUNT</h3><br>";

    echo "<center><table><tr><td><b>A.ACID</b></td><td><b>COUNT</b></td><td><b>%</b></td></tr>";
    echo "<tr><td>G</td><td> ".$G."</td><td> ".round(100*($G/$len),2)."</td></tr>";
    echo "<tr><td>P</td><td> ".$P."</td><td> ".round(100*($P/$len),2)."</td></tr>";
    echo "<tr><td>A</td><td> ".$A."</td><td> ".round(100*($A/$len),2)."</td></tr>";
    echo "<tr><td>V</td><td> ".$V."</td><td> ".round(100*($V/$len),2)."</td></tr>";
    echo "<tr><td>L</td><td> ".$L."</td><td> ".round(100*($L/$len),2)."</td></tr>";
    echo "<tr><td>I</td><td> ".$I."</td><td> ".round(100*($I/$len),2)."</td></tr>";
    echo "<tr><td>M</td><td> ".$M."</td><td> ".round(100*($M/$len),2)."</td></tr>";
    echo "<tr><td>C</td><td> ".$C."</td><td> ".round(100*($C/$len),2)."</td></tr>";
    echo "<tr><td>F</td><td> ".$F."</td><td> ".round(100*($F/$len),2)."</td></tr>";
    echo "<tr><td>Y</td><td> ".$Y."</td><td> ".round(100*($Y/$len),2)."</td></tr>";
    echo "<tr><td>W</td><td> ".$W."</td><td> ".round(100*($W/$len),2)."</td></tr>";
    echo "<tr><td>H</td><td> ".$H."</td><td> ".round(100*($H/$len),2)."</td></tr>";
    echo "<tr><td>K</td><td> ".$K."</td><td> ".round(100*($K/$len),2)."</td></tr>";
    echo "<tr><td>R</td><td> ".$R."</td><td> ".round(100*($R/$len),2)."</td></tr>";
    echo "<tr><td>Q</td><td> ".$Q."</td><td> ".round(100*($Q/$len),2)."</td></tr>";
    echo "<tr><td>N</td><td> ".$N."</td><td> ".round(100*($N/$len),2)."</td></tr>";
    echo "<tr><td>E</td><td> ".$E."</td><td> ".round(100*($E/$len),2)."</td></tr>";
    echo "<tr><td>D</td><td> ".$D."</td><td> ".round(100*($D/$len),2)."</td></tr>";
    echo "<tr><td>S</td><td> ".$S."</td><td> ".round(100*($S/$len),2)."</td></tr>";
    echo "<tr><td>T</td><td> ".$T."</td><td> ".round(100*($T/$len),2)."</td></tr></table></center><br>";
}else {
    echo "<center><h3>please pick an option</h3></center>";
}

?>
</body>
</html>