<?php
/**
 * Created by PhpStorm.
 * User: toaha
 * Date: 12/17/2018
 * Time: 10:15 PM
 */

namespace App\classes;


class event
{
    public function saveEvent($data){
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
                    $query="INSERT INTO save_event(name,img,discraption)
                         VALUES ('$data[name]','$imageUrl','$data[discraption]')";

                    if(mysqli_query($link,$query)){
                        $mass="<h3 class='text-success text-center'>"."Event Save Successfully"."</h3>";
                        return $mass;
                    }
                }
            }
        }

    }

    public function viewEvent(){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        $query="SELECT * FROM save_event";
        if(mysqli_query($link,$query)){
            $queryResult= mysqli_query($link,$query);
            return $queryResult;
        }
    }

    public function viewEventById($id){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        $query="SELECT * FROM save_event WHERE id = $id";
        if(mysqli_query($link,$query)){
            $queryResult= mysqli_query($link,$query);
            return $queryResult;
        }
    }

    public function updateEvent($data,$id){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        if(isset($data['ok'])) {
            $fileName=$_FILES['img']['name'];
            $directory='images/';
            $imageUrl=$directory.$fileName;
            $filetype=pathinfo($fileName, PATHINFO_EXTENSION);
            if($fileName){
                $query1="SELECT * FROM save_event WHERE id='$id'";
                $out= mysqli_query($link,$query1);
                $res=mysqli_fetch_array($out);
                unlink($res['img']);
                move_uploaded_file($_FILES['img']['tmp_name'], $imageUrl);
                $query="UPDATE save_event SET name='$data[name]',
                img='$imageUrl',discraption='$data[discraption]' WHERE id='$id'";
                if(mysqli_query($link,$query)){
                    header("location:manage_event.php");
                }
            }else{
                $query="UPDATE save_event SET name='$data[name]',discraption='$data[discraption]' WHERE id='$id'";
                if(mysqli_query($link,$query)){
                    header("location:manage_event.php");
                }
            }
        }
    }

    public function deleteEvent($id){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        $query="DELETE FROM save_event WHERE id=$id";
        if(mysqli_query($link,$query)){
            header("location:manage_event.php");
        }
    }
}