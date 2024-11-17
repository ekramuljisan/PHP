<?php
//1.Parse Error (Syntax Error):
// # Caused by a mistake in the PHP syntax.
// # Common examples include missing semicolons or curly braces.
// # Execution stops immediately when a parse error occurs.
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//  echo "Hello, World"
// }


//2.Fatal Error:
// # Caused when PHP understands what you've written, but what you're asking it to do can't be done.
// # Common examples include calling an undefined function or class.
// # Execution stops immediately when a fatal error occurs.
// if ($_SERVER["REQUEST_METHOD"] == "GET") {
//     echo myUndefinedFunction();
// }


//3.Warning Error:
// # Less severe than fatal errors.
// # They indicate something that's probably an error, but not so severe that execution must be halted.
// # An example might be including a file that doesn't exist using the include() function. The script will continue to execute after
// the warning.
// if ($_SERVER["REQUEST_METHOD"] == "GET") {
//     include("non_existent_file.php");
//     echo "Hello";
// }


//4.Notice Error:
// # Less severe than warnings.
// # Indicate something that might be an error or might be perfectly fine, but it's worth investigating.
// # A common example is trying to access an undefined variable.
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // error_reporting(E_WARNING);
    $x = "Hello, World!";
    echo $y;
}


//5.Deprecated Error:
// # These errors are thrown for functions or features that are outdated and will likely be removed in future versions of PHP.
// # An example might be using a function that has been deprecated in favor of a newer, better function.
// if ($_SERVER["REQUEST_METHOD"] == "GET") {
//     $lat = 34.0522;
//     $lon = -118.2437;
//     $sunrise = date_sunrise(time(), SUNFUNCS_RET_STRING, $lat, $lon);
//     echo "Sunrise time in Los Angeles is: $sunrise";
// }


//6.Strict Error:
// # Indicate that you're using PHP in a way that may not be compatible with future versions.
// # They are suggestions for writing more robust code.
// # An example might be calling a non-static method statically.   
// if ($_SERVER["REQUEST_METHOD"] == "GET") {
//     class MyClass {
//     function nonStaticMethod() {
//     echo "nonStaticMethod";
//     }
//     }
//     MyClass::nonStaticMethod();
// }


//7.Recoverable Fatal Error:
// # A fatal error that can be caught and handled using a custom error handler.
// # An example might be type hinting against a class and then passing an incorrect object type.   
// if ($_SERVER["REQUEST_METHOD"] == "GET") {
//     function myFunction(array $myArray) {
//     echo $myArray[0];
//     }
//     myFunction("this is not an array");
// }


//8.User Errors:
// # You can trigger custom error messages using the trigger_error() function.
// # This allows you to define your own error levels like E_USER_ERROR, E_USER_WARNING, and E_USER_NOTICE.
// if ($_SERVER["REQUEST_METHOD"] == "GET") {
//     if (1 !== 2) {
//     trigger_error("One does not equal two!", E_USER_NOTICE);
//     }
// }   