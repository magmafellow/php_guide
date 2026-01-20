<?php
//   switch = replacement to using many elseif statements
//            more efficient, less code

$date = date('l');  // Gives us the day of the week

switch ($date) {
    case 'Monday':
        echo "I hate Mondays";
        break;
    case 'Tuesday':
        echo "It is Taco Tuesday!";
        break;
    case 'Wednesday':
        echo "The work week is half over!";
        break;
    case 'Thursday':
        echo "Yes we are getting close!";
        break;
    case 'Friday':
        echo "The weekend is here";
        break;
    case 'Saturday':
        echo "Time to party!";
        break;
    case 'Sunday':
        echo "Time to relax!";
        break;
    default:
        echo "Oops why are you here? {$date}";
}
