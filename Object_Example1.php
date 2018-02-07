<?php
 /*
 *Same PHP code using basic OOP 
 *Matt Sweeney 2/7/2018
 */
function changeJob($person, $newjob)
{
  $person['job'] = $newjob; // Change the person's job
  return $person;
}
 
$person1 = array(
  'name' => 'Matt',
  'job' => 'ASP.NET Dev',
  'age' => 26
);
 
$person2 = array(
  'name' => 'Lily',
  'job' => 'Doctor Person',
  'age' => 27
);
 
// Output the starting values for the people
echo "<pre>Person 1: ", print_r($person1, TRUE), "</pre>";
echo "<pre>Person 2: ", print_r($person2, TRUE), "</pre>";
 
// Change the job of Matt
$person1 = changeJob($person1, 'PHP Back End Developer');
 
 
// Output the new values for the people
echo "<pre>Person 1: ", print_r($person1, TRUE), "</pre>";
echo "<pre>Person 2: ", print_r($person2, TRUE), "</pre>";
 