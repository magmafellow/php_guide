<?php

// function = write some code once, reuse when you need it
//            type () after function name to invoke
//            ex. add() subtract() multiply() divide()


function happy_birthday($first_name, $age)
{
  echo "Happy Birthday dear {$first_name}! <br />";
  echo "Happy Birthday to you! <br />";
  echo "Happy Birthday dear {$first_name}! <br />";
  echo "You are {$age} years old! <br /> <br />";
}

happy_birthday("Spongebob", 30);
happy_birthday("Patrick", 35);
happy_birthday("Squidward", 45);
