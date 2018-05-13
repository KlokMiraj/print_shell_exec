<?php

$shell_command= 
'#!/bin/bash
sting1=hey
sting2=lay
:
if [[: "$sting1" ==  "$sting2" ]]
then
echo "Function failure"
else
echo "varaible is echoing 0"
fi;';

$delete_confirmation_form = <<<DEL
	<html><form method= action=>
				<input type='text' name=>
				<input type='submit' name=>
				</form></html>
DEL;

if($_POST['submit'] && $_POST['submit']== "submit"){	
		// putenv("post=$post");
		$exec_return=exec('./print_shell_dos.bat');

		
		// $exec_return=exec('mkdir dloder');

		if(isset($exec_return)){
			echo "Well done";
			echo $exec_return ;
			
		}
	

	// if(isset($exec_return)){
	// 	echo "Function is retruning command out-put but not file out-put ";
	// 	echo "<pre>";
	// 	print_r($exec_return);
	// 	}else{
	// 		echo 'lul';
	// 	}
	}
?>