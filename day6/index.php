<?php

//fopen we use to open a file
//$my_file = fopen("ds.txt", "w");

//fclose we use to close a file
//dclose($my_file);


//fread wer use to read a file
// $myfile_name = "ds.txt";
// $my_file = fopen($myfile_name, "r");
// $my_size = filesize($my_filename);
// $my_filedata = fread($my_file, $my_size);

//feof we use to print evrything in a file
// $file = fopen("ds.txt", "r");
// while(!feof($file)){
//     echo fgets($file)."<br>"
// }

// fclose($file);


//fwrite makes us write new text in an existing file
// $myfile = fopen("ds.txt", "w");
// $my_text = "Digital School \n";
// fwrite($myfile, $my_text);

// $h = fopen("data.txt", "w+");
// fwrite($h, "Test 1");

//a+ made lets us write content in a file

// $h = fopen("data.txt", "a+");
// fwrite($h, "\n Add more lines to the file");
// flose($h);

//file_put_contents is identic to fopen(), fwrite(), fclose()

file_put_contents("test.txt", "Add more text");
echo file_get_contents("test.txt");


?>