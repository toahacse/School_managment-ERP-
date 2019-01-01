<?php
/**
 * Created by PhpStorm.
 * User: toaha
 * Date: 12/18/2018
 * Time: 5:37 PM
 */

namespace App\classes;


class result
{
    public function viewClassStudent($data){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        $query="SELECT * FROM save_student WHERE class='$data[class]' AND roll_no='$data[roll]'";
        if(mysqli_query($link,$query)){
            $queryResult= mysqli_query($link,$query);
            return $queryResult;
        }
    }
    public function saveResult($data){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        $query="INSERT INTO result(student_id,student_name,class,roll_no,bangla,english,mathematics,science,religion,banglaGPA,englishGPA,mathematicsGPA,scienceGPA,religionGPA)
       VALUES ('$data[id]','$data[name]','$data[class]','$data[roll_no]','$data[bangla]','$data[english]','$data[mathematics]','$data[science]','$data[religion]','$data[banglaGPA]','$data[englishGPA]','$data[mathematicsGPA]','$data[scienceGPA]','$data[religionGPA]')";
        if(mysqli_query($link,$query)){
            $mass="<h3 class='text-success text-center'>"."Result Save Successfully"."</h3>";
            return $mass;
        }

    }

    public function viewResult(){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        $query="SELECT * FROM result";
        if(mysqli_query($link,$query)){
            $queryResult= mysqli_query($link,$query);
            return $queryResult;
        }
    }
    public function deleteAttendance($id){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        $query="DELETE FROM result WHERE id=$id";
        if(mysqli_query($link,$query)){
            header("location:manage_result.php");
        }
    }


    public function viewResultById($id){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        $query="SELECT * FROM result WHERE student_id='$id'";
        if(mysqli_query($link,$query)){
            $queryResult= mysqli_query($link,$query);
            return $queryResult;
        }
    }



}