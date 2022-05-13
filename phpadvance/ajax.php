<?php
    $action = $_REQUEST['action'];

    if(!empty($action)){
        require_once 'partials/User.php';
        $obj= new User();
    }
  
 

    //Adding user actions
    if($action == 'adduser' && !empty($_POST)){
         $pname = $_POST['username'];
         $email = $_POST['email'];
         $mobile = $_POST['mobile'];
         $photo = $_FILES['photo'];
         $playerId = (!empty($_POST['userid'])) ? $_POST['userid'] : '';

        //file upload
        $imagename = '';
        if(!empty($photo['name'])){
            $imagename = $obj->uploadPhoto($photo);
            $playerData = [
                'name' => $pname,
                'email' => $email,
                'mobile' => $mobile,
                'photo' => $imagename,
            ];
        }else{
            $playerData= [
                'name' => $pname,
                'email' => $email,
                'mobile' => $mobile,
            ];
        }
        $playerId = $obj->add($playerData);

        if(!empty($playerId)){
            $player = $obj->getRow('id', $playerId);
            echo json_encode($player);
            exit();
        }   
    }

?>