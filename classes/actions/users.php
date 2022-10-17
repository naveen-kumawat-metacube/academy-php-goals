<?php
require_once ('classes/general/session.php');
require_once ('classes/db/DBClass.php');
$db = new DBClass;

if(isset($_GET["id"])){
    $result = $db->query("SELECT * FROM users WHERE id = {$_GET['id']}");
    if($db->numRows($result)){
        $user = $db->fetchArray($result);
    }else{
        $session->setFlash("error", "User not found!");
        header("Location: poc-users.php");
    }
}

if($_POST){
    $validationErrors = [];

    require_once ('classes/general/validate.php');
    
    $validate = new Validate();

    if($_GET['action'] === 'add-user'){
        
        if($validate->checkExists('fname')){
            if($validate->checkNotEmpty('fname')){
                $validationErrors["fname"][] = "Please enter first name.";
            }
        }

        if($validate->checkExists('lname')){
            if($validate->checkNotEmpty('lname')){
                $validationErrors["lname"][] = "Please enter last name.";
            }
        }

        if($validate->checkExists('email')){
            if($validate->checkNotEmpty('email')){
                $validationErrors["email"][] = "Please enter email address.";
            }
            if($validate->checkValidEmail('email')){
                $validationErrors["email"][] = "Please enter valid email address.";
            }

            $result = $db->query("SELECT email FROM users WHERE email LIKE '{$_POST['email']}'");

            if($db->numRows($result)){
                $validationErrors["email"][] = "This email is already associated with another account.";
            }
        }

        if($validate->checkExists('phone')){
            if($validate->checkNotEmpty('phone')){
                $validationErrors["phone"][] = "Please enter phone number.";
            }

            if($validate->checkNumeric('phone')){
                $validationErrors["phone"][] = "Phone number allowed numbers only.";
            }

            if($validate->checkLength('phone', 10)){
                $validationErrors["phone"][] = "Please enter valid phone number.";
            }
        }

        if($validate->checkFileExists('image')){
            if($validate->checkFileUploaded('image')){
                $validationErrors["image"][] = "Please upload profile image.";
            }else{
                if($validate->checkImageType('image')){
                    $validationErrors["image"][] = "PNG, JPG and JPEG image format allowed only.";
                }
    
                if($validate->checkImageSize('image', 5)){
                    $validationErrors["image"][] = "Maximum 5MB size is allowed";
                }
            }
        }

        if(empty($validationErrors)){
            $time = time();
            $target = "uploads/users/" . $time."-".str_replace(" ","", basename($_FILES["image"]["name"]));
            if (isset($_FILES["image"]["tmp_name"]) && move_uploaded_file($_FILES["image"]["tmp_name"], $target)) {
                $result = $db->query("INSERT INTO `users` (`fname`, `lname`, `email`, `phone`, `image`, `status`, `created_at`) VALUES ('{$_POST['fname']}', '{$_POST['lname']}', '{$_POST['email']}', '{$_POST['phone']}', '{$target}', '{$_POST['status']}', {$time})");

                if($result){
                    $session->setFlash("success", "User has been added successfully!");
                    header('Location: poc-users.php');
                    exit();
                }
            } else {
                $validationErrors["image"][] = "Problem in uploading image files.";
                $session->setSession("addUserFormErrors", $validationErrors);
                $session->setFlash("error", "There is something wrong while uploading your profile image. Please try again.");
            }
        }else{
            $session->setSession("addUserFormErrors", $validationErrors);
            $session->setFlash("error", "Please correct the form validation");
        }
    }

    if($_GET['action'] === 'edit-user'){
        
        if($validate->checkExists('fname')){
            if($validate->checkNotEmpty('fname')){
                $validationErrors["fname"][] = "Please enter first name.";
            }
        }

        if($validate->checkExists('lname')){
            if($validate->checkNotEmpty('lname')){
                $validationErrors["lname"][] = "Please enter last name.";
            }
        }

        if($validate->checkExists('email')){
            if($validate->checkNotEmpty('email')){
                $validationErrors["email"][] = "Please enter email address.";
            }
            if($validate->checkValidEmail('email')){
                $validationErrors["email"][] = "Please enter valid email address.";
            }

            $result = $db->query("SELECT email FROM users WHERE email LIKE '{$_POST['email']}' AND id != {$_GET['id']}");

            if($db->numRows($result)){
                $validationErrors["email"][] = "This email is already associated with another account.";
            }
        }

        if($validate->checkExists('phone')){
            if($validate->checkNotEmpty('phone')){
                $validationErrors["phone"][] = "Please enter phone number.";
            }

            if($validate->checkNumeric('phone')){
                $validationErrors["phone"][] = "Phone number allowed numbers only.";
            }

            if($validate->checkLength('phone', 10)){
                $validationErrors["phone"][] = "Please enter valid phone number.";
            }
        }

        if($validate->checkFileExists('image')){
            if(!$validate->checkFileUploaded('image')){
                if($validate->checkImageType('image')){
                    $validationErrors["image"][] = "PNG, JPG and JPEG image format allowed only.";
                }
    
                if($validate->checkImageSize('image', 5)){
                    $validationErrors["image"][] = "Maximum 5MB size is allowed";
                }
            }
        }

        if(empty($validationErrors)){
            $time = time();
            if (isset($_FILES["image"]["tmp_name"])) {
                $target = "uploads/users/" . $time."-".str_replace(" ","", basename($_FILES["image"]["name"]));
                if(move_uploaded_file($_FILES["image"]["tmp_name"], $target)){
                    $target = "uploads/users/" . $time."-".str_replace(" ","", basename($_FILES["image"]["name"]));
                }
            } else {
                $target = $user["image"];
            }

            $result = $db->query("UPDATE `users` set `fname` = '{$_POST['fname']}', `lname` = '{$_POST['lname']}', `email` = '{$_POST['email']}', `phone` = '{$_POST['phone']}', `image` = '{$target}', `status` = '{$_POST['status']}' WHERE id = {$_GET['id']}");

            if($result){
                $session->setFlash("success", "User has been updated successfully!");
                header('Location: poc-users.php');
                exit();
            }
        }else{
            $session->setSession("addUserFormErrors", $validationErrors);
            $session->setFlash("error", "Please correct the form validation");
        }
    }

    if($_GET['action'] === 'delete-user'){
        if($db->query("DELETE FROM `users` WHERE id = {$_POST['id']}")){
            $session->setFlash("success", "User has been deleted successfully");
            echo 1;
        }else{
            $session->setFlash("error", "User has been failed to delete.");
            echo 0;
        }
        exit;
    }
}

$result = $db->query("SELECT * FROM users");

$users = [];

if($db->numRows($result)){
    $users = $db->fetchAll($result);
}