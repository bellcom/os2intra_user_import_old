<?php
$users_query = db_query('SELECT u.uid FROM {users} u WHERE u.uid > :uid', array(':uid' => '80'));
$result = $users_query->fetchAll();

foreach($result as $uid){
  user_delete($uid->uid);
}
