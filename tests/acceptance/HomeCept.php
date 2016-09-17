<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Ensure the home page says ExampleFramework PHP');
$I->amOnPage('/');
$I->see('ExampleFramework PHP');
