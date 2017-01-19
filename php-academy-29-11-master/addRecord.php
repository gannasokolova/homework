<?php
include_once('config.php');
include_once('viewFunction.php');

$errors = [
	'status' => 'error',
	'messages' => [
		'username'  => '',
		'message'	=> ''
	]
];

$messageSchema = [
	'created_at' => '',
	'message'  => '',
	'username' => '',
];

$messagesStorage = [];

if(!empty($_POST)) {
	
	$username = (!empty($_POST['username'])) ? trim($_POST['username']) : null;
	
	$message = (!empty($_POST['message'])) ? trim($_POST['message']) : null;
	
	if(!$username) {
		$errors['messages']['username'] = 'Имя пользователя пустое';
	}
	if(!$message) {
		$errors['messages']['message'] = 'Сообщение пустое';
	}
	
	if( ($username) && ($message)) {
		$messageSchema = [
			'username' => $username,
			'message'	=> $message,
			'created_at' => date('Y-m-d H:i:s')
			
		];
		/*
		if(file_exists($config['database'])){
			$errors['status'] = 'OK';
			$database = file_get_contents($config['database']);
			if(empty($database) ) {
				array_push($messagesStorage, $messageSchema);
				$serializedStorage = serialize($messagesStorage);
				
				if(file_put_contents($config['database'], $serializedStorage)) {
					
				}	
			} else { //��� �� ������, ���� � ����� ���-�� ����
				$deserializedStorage = unserialize($database);
				if(!empty($deserializedStorage)) {
					array_push($deserializedStorage,$messageSchema);
					$serializedStorage = serialize($deserializedStorage);
					if(file_put_contents($config['database'],$serializedStorage)) {
						die('File saved..');
					}
				
				}
				
			}
			
			
		}
		*/
        $errors['status'] = 'OK';
        $messagesStorage = getArrayCommentFromFile($config);
        if($messagesStorage){
            array_push($messagesStorage, $messageSchema);
        }else{
            $messagesStorage[] = $messageSchema;
        }
        $serializedStorage = serialize($messagesStorage);
        if(file_put_contents($config['database'], $serializedStorage)) {
            require_once('index.php');
        }
        else{
            echo "Ошибка сохранения комменатария";
            require_once('index.php');
    }

    }
    if($errors['status'] != 'OK'){
        ?>
        <div class="col-md-12 error"><?=$errors['messages']['username'].' '.$errors['messages']['message']?>. Комментарий не отправлен</div>
        <?php
        require_once('index.php');
    }
}


