<?php 
$I = new FunctionalTester($scenario);

$I->am('a Larabook user.');
$I->wantTo('follow other Larabook users.');

//setup
$I->haveAnAccount(['username'=>'OtherUser']);
$I->signIn();

//action
$I->click('Browse Users');
$I->click('OtherUser');

$I->seeCurrentUrlEquals('/@OtherUser');
$I->click('Follow OtherUSer');
$I->seeCurrentUrlEquals('/@OtherUser');

$I->see('Unfollow OtherUser');

$I->click('Unfollow OtherUser');
$I->seeCurrentUrlEquals('/@otherUser');
$I->see('Follow OtherUser');

