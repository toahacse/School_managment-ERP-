<?php
/**
 * Created by PhpStorm.
 * User: toaha
 * Date: 12/17/2018
 * Time: 9:42 PM
 */

namespace App\classes;


class librarian
{
    public function saveLibrarian($data){
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
                    $query="INSERT INTO save_librarian(name,email,img,address)
                         VALUES ('$data[name]','$data[email]','$imageUrl','$data[address]')";

                    if(mysqli_query($link,$query)){
                        $mass="<h3 class='text-success text-center'>"."Librarian Save Successfully"."</h3>";
                        return $mass;
                    }
                }
            }
        }

    }

    public function viewLibrarian(){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        $query="SELECT * FROM save_librarian";
        if(mysqli_query($link,$query)){
            $queryResult= mysqli_query($link,$query);
            return $queryResult;
        }
    }


    public function viewLibrarianById($id){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        $query="SELECT * FROM save_librarian WHERE id = $id";
        if(mysqli_query($link,$query)){
            $queryResult= mysqli_query($link,$query);
            return $queryResult;
        }
    }


    public function updateLibrarian($data,$id){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        if(isset($data['ok'])) {
            $fileName=$_FILES['img']['name'];
            $directory='images/';
            $imageUrl=$directory.$fileName;
            $filetype=pathinfo($fileName, PATHINFO_EXTENSION);
            if($fileName){
                $query1="SELECT * FROM save_librarian WHERE id='$id'";
                $out= mysqli_query($link,$query1);
                $res=mysqli_fetch_array($out);
                unlink($res['img']);
                move_uploaded_file($_FILES['img']['tmp_name'], $imageUrl);
                $query="UPDATE save_librarian SET name='$data[name]',email='$data[email]',
                img='$imageUrl',address='$data[address]' WHERE id='$id'";
                if(mysqli_query($link,$query)){
                    header("location:manage_librarian.php");
                }
            }else{
                $query="UPDATE save_librarian SET name='$data[name]',email='$data[email]',address='$data[address]' WHERE id='$id'";
                if(mysqli_query($link,$query)){
                    header("location:manage_librarian.php");
                }
            }
        }
    }


    public function deleteLibrarian($id){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        $query="DELETE FROM save_librarian WHERE id=$id";
        if(mysqli_query($link,$query)){
            header("location:manage_librarian.php");
        }
    }
}