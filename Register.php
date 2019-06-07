<?php
if (true) 
{
    

// if(!isset($_POST["email"]) || !isset($_POST["pwd"]) ||
// !isset($_POST["lname"]) || !isset($_POST["fname"]) || !isset($_POST["gender"]))
// {
//     $file=fopen("Store.txt","r");
//     $finduser = false;
//     while(!feof($file))
//     {
//         $line = fgets($file);
//         $array = explode(";",$line);
//         if(trim($array[0]) == $_POST['email'] && trim($array[1] == $_POST["pwd"]))
//         {
//             $finduser=true;
//             break;
//         }
//     }
//     fclose($file);

//     // register user or pop up message
//     if($finduser)
//     {
//         $file = fopen("Store.txt", "a");
//         fputs($file,$_POST["email"].";".$_POST["pwd"].";".$_POST["fname"].
//         ";".$_POST["lname"].";".$_POST["gender"]."\r\n");
//         fclose($file);
//         header("Location:message.html");
//     }
//     else
//     {
        
//         header("Location:Register.html");
//     }
// }else {
//     header("Location:Register.html");
// }
}

?>

<?php
if (isset($_POST["email"]) && isset($_POST["pwd"]) &&
isset($_POST["lname"]) && isset($_POST["fname"]) 
&& isset($_POST["gender"])) {
    $fr = fopen("Store.txt","a") or die("No permission!");
    fwrite($fr,$_POST["email"].";".$_POST["pwd"].
    ";".$_POST["lname"].";".$_POST["fname"].";".$_POST["gender"]."\n");
    fclose($fr);
    header("location:message.html");
}else {
    header("location:Register.html");
}

?>