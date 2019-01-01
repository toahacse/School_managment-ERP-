<?php
/**
 * Created by PhpStorm.
 * User: toaha
 * Date: 12/18/2018
 * Time: 12:16 PM
 */

namespace App\classes;


class attendance
{

    public function viewClassStudent($name){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        $query="SELECT * FROM save_student WHERE class='$name'";
        if(mysqli_query($link,$query)){
            $queryResult= mysqli_query($link,$query);
            return $queryResult;
        }
    }

    public function saveAttendanceP($data,$date){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        $query="INSERT INTO attendance(attendance,student_id,student_name,class,roll_no,date)
                         VALUES ('Present','$data[id]','$data[name]','$data[class]','$data[roll_no]','$date')";
        if(mysqli_query($link,$query)){
            $mass="<h3 class='text-success text-center'>"."Attendance Save Successfully"."</h3>";
            return $mass;
        }
    }
    public function saveAttendanceA($data,$date){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        $query="INSERT INTO attendance(attendance,student_id,student_name,class,roll_no,date)
                         VALUES ('Absent','$data[id]','$data[name]','$data[class]','$data[roll_no]','$date')";
        if(mysqli_query($link,$query)){
            $mass="<h3 class='text-success text-center'>"."Attendance Save Successfully"."</h3>";
            return $mass;
        }
    }

    public function viewAttendance(){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        $query="SELECT * FROM attendance";
        if(mysqli_query($link,$query)){
            $queryResult= mysqli_query($link,$query);
            return $queryResult;
        }
    }
    public function deleteAttendance($id){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        $query="DELETE FROM attendance WHERE id=$id";
        if(mysqli_query($link,$query)){
            header("location:manage_attendance.php");
        }
    }


    public function viewAttendanceById($id){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        $query="SELECT * FROM attendance WHERE student_id='$id'";
        if(mysqli_query($link,$query)){
            $queryResult= mysqli_query($link,$query);
            return $queryResult;
        }
    }


}