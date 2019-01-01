<?php
/**
 * Created by PhpStorm.
 * User: toaha
 * Date: 12/17/2018
 * Time: 12:51 PM
 */
namespace App\classes;
class student
{
        public function saveStudent($data){
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
                        $query="INSERT INTO save_student(name,email,father_name,class,roll_no,fee,img,address)
                         VALUES ('$data[name]','$data[email]','$data[father_name]','$data[class]','$data[roll_no]','$data[fee]','$imageUrl','$data[address]')";

                        if(mysqli_query($link,$query)){
                            $mass="<h3 class='text-success text-center'>"."Student Save Successfully"."</h3>";
                            return $mass;
                        }
                    }
                }
            }

        }

        public function viewStudent(){
            $link = mysqli_connect('localhost','root', '', 'school_management');
            $query="SELECT * FROM save_student";
            if(mysqli_query($link,$query)){
               $queryResult= mysqli_query($link,$query);
                return $queryResult;
            }
        }

        public function viewStudentById($id){
            $link = mysqli_connect('localhost','root', '', 'school_management');
            $query="SELECT * FROM save_student WHERE id = $id";
            if(mysqli_query($link,$query)){
               $queryResult= mysqli_query($link,$query);
                return $queryResult;
            }
        }
        public function updateStudent($data,$id){
            $link = mysqli_connect('localhost','root', '', 'school_management');
            if(isset($data['ok'])) {
            $fileName=$_FILES['img']['name'];
            $directory='images/';
            $imageUrl=$directory.$fileName;
            $filetype=pathinfo($fileName, PATHINFO_EXTENSION);
            if($fileName){
                $query1="SELECT * FROM save_student WHERE id='$id'";
                $out= mysqli_query($link,$query1);
                $res=mysqli_fetch_array($out);
                unlink($res['img']);
                move_uploaded_file($_FILES['img']['tmp_name'], $imageUrl);
                $query="UPDATE save_student SET name='$data[name]',email='$data[email]',father_name='$data[father_name]',class='$data[class]',roll_no='$data[roll_no]',
                  fee='$data[fee]',img='$imageUrl',address='$data[address]' WHERE id='$id'";
                if(mysqli_query($link,$query)){
                    header("location:manage_student.php");
                }
            }else{
                $query="UPDATE save_student SET name='$data[name]',email='$data[email]',father_name='$data[father_name]',class='$data[class]',roll_no='$data[roll_no]',
                  fee='$data[fee]',address='$data[address]' WHERE id='$id'";
                if(mysqli_query($link,$query)){
                    header("location:manage_student.php");
                }
            }
        }
        }
        public function deleteStudent($id){
            $link = mysqli_connect('localhost','root', '', 'school_management');
            $query="DELETE FROM save_student WHERE id=$id";
            if(mysqli_query($link,$query)){
                header("location:manage_student.php");
            }
        }


}