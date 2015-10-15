<?php

// Law of Demter (Tell, Don't Ask!)
//
//
// The method on an object is allowed to interact with the following:
//
//  1. Other methods on its object;
//  2. Methods on properties of the object; 
//  3. Methods on arguments passed into the method;
//  4. Methods on instances of new objects, created inside of the method. 

include "User.php";
include "Profile.php";

/**
 * If we want to get the user's name, through the Profile object,
 * it should TELL the name, not ASK for it a third party object,
 * in our case the User object.
 *
 * So, without the law of Demeter in mind, the code would look like this:
 */

$user = new User("Josh", 29);
$userProfile = new Profile($user, "/img/josh.jpg");

echo $userProfile->getUser()->getName();

/**
 * In the above example, we ASK the User object to give us it's name.
 *
 * Now, we'll make the Profile object TELL the user's name:
 */

echo $userProfile->getName();

/**
 * The above row is the law of Demeter in action.
 */
