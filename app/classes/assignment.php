<?php
/**
 * Created by PhpStorm.
 * User: toaha
 * Date: 12/18/2018
 * Time: 11:25 AM
 */

namespace App\classes;


class assignment
{
    public function saveAssignment($data){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        if(isset($data['ok'])) {
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
                    $query="INSERT INTO assignment(class,name,img,discraption)
                         VALUES ('$data[class]','$data[name]','$imageUrl','$data[discraption]')";

                    if(mysqli_query($link,$query)){
                        $mass="<h3 class='text-success text-center'>"."Assignment Save Successfully"."</h3>";
                        return $mass;
                    }
                }
            }
        }

    }

    public function viewAssignment(){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        $query="SELECT * FROM assignment";
        if(mysqli_query($link,$query)){
            $queryResult= mysqli_query($link,$query);
            return $queryResult;
        }
    }

    public function viewAssignmentById($id){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        $query="SELECT * FROM assignment WHERE id = $id";
        if(mysqli_query($link,$query)){
            $queryResult= mysqli_query($link,$query);
            return $queryResult;
        }
    }

    public function updateAssignment($data,$id){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        if(isset($data['ok'])) {
            $fileName=$_FILES['img']['name'];
            $directory='images/';
            $imageUrl=$directory.$fileName;
            $filetype=pathinfo($fileName, PATHINFO_EXTENSION);
            if($fileName){
                $query1="SELECT * FROM assignment WHERE id='$id'";
                $out= mysqli_query($link,$query1);
                $res=mysqli_fetch_array($out);
                unlink($res['img']);
                move_uploaded_file($_FILES['img']['tmp_name'], $imageUrl);
                $query="UPDATE assignment SET class='$data[class]',name='$data[name]',
                img='$imageUrl',discraption='$data[discraption]' WHERE id='$id'";
                if(mysqli_query($link,$query)){
                    header("location:manage_assignment.php");
                }
            }else{
                $query="UPDATE assignment SET class='$data[class]',name='$data[name]',discraption='$data[discraption]' WHERE id='$id'";
                if(mysqli_query($link,$query)){
                    header("location:manage_assignment.php");
                }
            }
        }
    }

    public function deleteAssignment($id){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        $query="DELETE FROM assignment WHERE id=$id";
        if(mysqli_query($link,$query)){
            header("location:manage_assignment.php");
        }
    }
    public function viewAssignmentForStudent($class){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        $query="SELECT * FROM assignment WHERE class='$class'";
        if(mysqli_query($link,$query)){
            $queryResult= mysqli_query($link,$query);
            return $queryResult;
        }
    }

}