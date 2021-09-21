<?php
class UserTest extends \PHPUnit\Framework\TestCase{
    
    //These 2 are successfull in unit testing
    public function testReturnUserName(){
        $user = new \App\Model\User;
        $user->setUserName('arefin');
        $this->assertEquals($user->getUserName(), 'arefin');
    }
   
    public function testReturnEmailAddress(){
		$user = new \App\Model\User;
		$user->setEmail('arefin@gmail.com');
        $this->assertEquals($user->getEmail(), 'arefin@gmail.com');
    }
}
