<?php
/**
 * Created by PhpStorm.
 * User: toaha
 * Date: 12/17/2018
 * Time: 5:53 PM
 */

namespace App\classes;


class teacher
{
    public function saveTeacher($data){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        if(isset($data['s_ok'])) {
            $fileName=$_FILES['img']['name'];
            $directory='images/';
            $imageUrl=$directory.$fileName;
            $filetype=pathinfo($fileName, PATHINFO_EXTENSION);
            $check=getimagesize($_FILES['img']['tmp_name']);
            if($check) {
                if (file_exists($imageUrl)) {
                    $mass="<h3 class='text-danger text-center'>"."This image alredy Exist"."</h3>";
                } else {
                    move_uploaded_file($_FILES['img']['tmp_name'], $imageUrl);
                    $query="INSERT INTO save_teacher(name,email,department,img,address)
                         VALUES ('$data[name]','$data[email]','$data[department]','$imageUrl','$data[address]')";

                    if(mysqli_query($link,$query)){
                        $mass="<h3 class='text-success text-center'>"."Teacher Save Successfully"."</h3>";
                        return $mass;
                    }
                }
            }
        }

    }

    public function viewTeacher(){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        $query="SELECT * FROM save_teacher";
        if(mysqli_query($link,$query)){
            $queryResult= mysqli_query($link,$query);
            return $queryResult;
        }
    }

    public function viewTeacherById($id){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        $query="SELECT * FROM save_teacher WHERE id = $id";
        if(mysqli_query($link,$query)){
            $queryResult= mysqli_query($link,$query);
            return $queryResult;
        }
    }

    public function updateTeacher($data,$id){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        if(isset($data['ok'])) {
            $fileName=$_FILES['img']['name'];
            $directory='images/';
            $imageUrl=$directory.$fileName;
            $filetype=pathinfo($fileName, PATHINFO_EXTENSION);
            if($fileName){
                $query1="SELECT * FROM save_teacher WHERE id='$id'";
                $out= mysqli_query($link,$query1);
                $res=mysqli_fetch_array($out);
                unlink($res['img']);
                move_uploaded_file($_FILES['img']['tmp_name'], $imageUrl);
                $query="UPDATE save_teacher SET name='$data[name]',email='$data[email]',department='$data[department]',
                img='$imageUrl',address='$data[address]' WHERE id='$id'";
                if(mysqli_query($link,$query)){
                    header("location:manage_teacher.php");
                }
            }else{
                $query="UPDATE save_teacher SET name='$data[name]',email='$data[email]',department='$data[department]',address='$data[address]' WHERE id='$id'";
                if(mysqli_query($link,$query)){
                    header("location:manage_teacher.php");
                }
            }
        }
    }

    public function deleteTeacher($id){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        $query="DELETE FROM save_teacher WHERE id=$id";
        if(mysqli_query($link,$query)){
            header("location:manage_teacher.php");
        }
    }

}