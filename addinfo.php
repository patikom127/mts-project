<?php
session_start();
include('condb.php');   

	if(isset($_POST['save']));{
	//Student
	$S_Fullname = $_POST['S_Fullname'];
	$DOB = $_POST['DOB'];
	$Old = $_POST['Old'];
    $Height = $_POST['Height'];
	$Balance = $_POST['Balance'];
	$Race = $_POST['Race'];
    $Nationality = $_POST['Nationality'];
    $Culture = $_POST['Culture'];
	$IDcard = $_POST['IDcard'];
    $CurrentAddress = $_POST['CurrentAddress'];
    $Country = $_POST['Country'];
    $S_Phone = $_POST['S_Phone'];
    $EContact_Name = $_POST['EContact_Name'];
	$Relation = $_POST['Relation'];
	$EContact_Phone = $_POST['EContact_Phone'];
	$EContact_Address = $_POST['EContact_Address'];
	$Class = $_POST['Class'];
    //Family
    $Father_Fullname = $_POST['Father_Fullname'];
	$F_StatusLive = $_POST['F_StatusLive'];
	$Father_Old = $_POST['Father_Old'];
    $Father_Career = $_POST['Father_Career'];
    $Mother_Fullname = $_POST['Mother_Fullname'];
	$M_StatusLive = $_POST['M_StatusLive'];
	$Mother_Old = $_POST['Mother_Old'];
    $Mother_Career = $_POST['Mother_Career'];
    $StatusRelation = $_POST['StatusRelation'];
	$Tel = $_POST['Tel'];
	$Brother = $_POST['Brother'];
    $You = $_POST['You'];
	//Education
    $SchoolName = $_POST['SchoolName'];
	$Year_Admission = $_POST['Year_Admission'];
	$Year_Graduation = $_POST['Year_Graduation'];
    $Graduation = $_POST['Graduation'];
    $GPA = $_POST['GPA'];
	//Ability
    $A_Language = $_POST['A_Language'];
	$Degree_Language = $_POST['Degree_Language'];
	$Talent = $_POST['Talent'];
	$NewsForm = $_POST['NewsForm'];

	//ประวัตินักเรียน
	$sqlSTD = "INSERT INTO student(S_Fullname, DOB, Old, Height, Balance, Race, Nationality, Culture, IDcard, CurrentAddress, Country, S_Phone, EContact_Name, Relation, EContact_Phone, EContact_Address, Class)
			 VALUES('$S_Fullname', '$DOB', '$Old', '$Height', '$Balance', '$Race', '$Nationality', '$Culture', '$IDcard', '$CurrentAddress', '$Country', '$S_Phone', '$EContact_Name', '$Relation', '$EContact_Phone', '$EContact_Address', '$Class')";
	$result = mysqli_query($sqlSTD) or die ("Error in query: $sqlSTD " . mysqli_error());

	//ประวัติครอบครัว
	$sqlFM = "INSERT INTO family(Father_Fullname, F_StatusLive, Father_Old, Father_Career, Mother_Fullname, M_StatusLive, Mother_Old, Mother_Career, StatusRelation, Tel, Brother, You)
			 VALUES('$Father_Fullname', '$F_StatusLive', '$Father_Old', '$Father_Career', '$Mother_Fullname', '$M_StatusLive', '$Mother_Old', '$Mother_Career', '$StatusRelation', '$Tel', '$Brother', '$You')";
    $result2 = mysqli_query($sqlFM) or die ("Error in query: $sqlFM " . mysqli_error());
    
    //ประวัติการศึกษา
	$sqlEDU = "INSERT INTO education(SchoolName, Year_Admission, Year_Graduation, Graduation, GPA)
    VALUES('$SchoolName', '$Year_Admission', '$Year_Graduation', '$Graduation', '$GPA')";
    $result3 = mysqli_query($sqlEDU) or die ("Error in query: $sqlEDU " . mysqli_error());

    //ประวัติความสามารถ
    $sqlABI = "INSERT INTO ability(A_Language, Degree_Language, Talent, NewsForm)
    VALUES('$A_Language', '$Degree_Language', '$Talent', '$NewsForm')";
    $result4 = mysqli_query($sqlABI) or die ("Error in query: $sqlABI " . mysqli_error());
	
	if($condb->query($sqlSTD,$sqlFM,$sqlEDU,$sqlABI)==TRUE){
		echo "<script>";
		echo "alert('บันทึกข้อมูลสำเร็จ!!');";
		echo "window.location.href='./';";
		echo "</script>";
	}
	else{
		echo "ERROR".$sqlSTD,$sqlFM,$sqlEDU,$sqlABI."<BR>".$condb->error;
	}
}
?>