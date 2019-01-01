<?php
/**
 * Created by PhpStorm.
 * User: toaha
 * Date: 12/20/2018
 * Time: 10:50 PM
 */

namespace App\classes;


class book
{
    public function saveBook($data){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        if(isset($data['ok'])) {
            $query="INSERT INTO save_book(book_name,author_name,price)
            VALUES ('$data[book_name]','$data[author_name]','$data[price]')";
            if(mysqli_query($link,$query)){
                $mass="<h3 class='text-success text-center'>"."Book Save Successfully"."</h3>";
                return $mass;
            }
        }
    }
    public function viewBook(){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        $query="SELECT * FROM save_book";
        if(mysqli_query($link,$query)){
            $queryResult1= mysqli_query($link,$query);
            return $queryResult1;
        }
    }

    public function deleteBook($id){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        $query="DELETE FROM save_book WHERE id=$id";
        if(mysqli_query($link,$query)){
            header("location:manage_book.php");
        }
    }

    public function saveBookForStudent($data){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        $query="INSERT INTO saveBookForStudent(student_id,student_name,class,roll_no,book)
       VALUES ('$data[id]','$data[name]','$data[class]','$data[roll_no]','$data[book]')";
        if(mysqli_query($link,$query)){
            $mass="<h3 class='text-success text-center'>"."Book Issue Successfully"."</h3>";
            return $mass;
        }

    }
    public function viewBookForStudent($data){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        $query="SELECT * FROM saveBookForStudent WHERE class='$data[class]' AND roll_no='$data[roll]'";
        if(mysqli_query($link,$query)){
            $queryResult2= mysqli_query($link,$query);
            return $queryResult2;
        }
    }

    public function deleteBookForStuden($id){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        $query="DELETE FROM saveBookForStudent WHERE id=$id";
        if(mysqli_query($link,$query)){
            $mass="<h3 class='text-success text-center'>"."Book Retrun Successfully"."</h3>";
            return $mass;
        }
    }
    public function viewBookById($id){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        $query="SELECT * FROM saveBookForStudent WHERE student_id='$id'";
        if(mysqli_query($link,$query)){
            $queryResult= mysqli_query($link,$query);
            return $queryResult;
        }
    }
    public function viewAllBookForStudent(){
        $link = mysqli_connect('localhost','root', '', 'school_management');
        $query="SELECT * FROM saveBookForStudent";
        if(mysqli_query($link,$query)){
            $queryResult= mysqli_query($link,$query);
            return $queryResult;
        }
    }

}