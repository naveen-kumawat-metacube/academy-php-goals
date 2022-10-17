<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PHP Academy Goals</title>
  <?php require_once 'partials/css-loader.php' ;?>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php require_once 'partials/navbar.php' ;?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?php require_once 'partials/sidebar.php' ;?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">If-Else-Elseif, Switch, Loops</h4>

                <strong>If-Else-Elseif</strong>
                <p>
                PHP allows you to write code that perform different actions based on the results of a logical or comparative test conditions at run time. This means, you can create test conditions in the form of expressions that evaluates to either true or false and based on these results you can perform certain actions.
                </p>
                <p>There are several statements in PHP that you can use to make decisions:</p>
                <ul>
                  <li>The if statement</li>
                  <li>The if...else statement</li>
                  <li>The if...elseif....else statement</li>
                </ul>

                <p>
                  <strong>if Statement</strong>: The if statement is used to execute a block of code only if the specified condition evaluates to true. This is the simplest PHP's conditional statements and can be written like:
                  <pre>
                  if(condition){
                      // Code to be executed
                  }
                  </pre>
                </p>

                <p>
                  <strong>if...else Statement</strong>: You can enhance the decision making process by providing an alternative choice through adding an else statement to the if statement. The if...else statement allows you to execute one block of code if the specified condition is evaluates to true and another block of code if it is evaluates to false. It can be written, like this:
                  <pre>
                  if(condition){
                      // Code to be executed if condition is true
                  } else{
                      // Code to be executed if condition is false
                  }
                  </pre>
                </p>

                <p>
                  <strong>if...elseif...else Statement</strong>: The if...elseif...else a special statement that is used to combine multiple if...else statements.
                  <pre>
                  if(condition1){
                      // Code to be executed if condition1 is true
                  } elseif(condition2){
                      // Code to be executed if the condition1 is false and condition2 is true
                  } else{
                      // Code to be executed if both condition1 and condition2 are false
                  }
                  </pre>
                </p>

                <strong>Switch</strong>
                <p>
                  PHP switch statement is used to execute one statement from multiple conditions. It works like PHP if-else-if statement.
                  <pre>
                    switch(expression){      
                      case value1:      
                        //code to be executed  
                      break;  
                      case value2:      
                        //code to be executed  
                      break;  
                      ......      
                      default:       
                        code to be executed if all cases are not matched;    
                    }  
                  </pre>
                  <p>Important points to be noticed about switch case:</p>
                  <ul>
                    <li>
                      The <strong>default</strong> is an optional statement. Even it is not important, that default must always be the last statement.
                    </li>
                    <li>
                      There can be only one <strong>default</strong> in a switch statement. More than one default may lead to a <strong>Fatal</strong> error.
                    </li>
                    <li>
                      Each case can have a <strong>break</strong> statement, which is used to terminate the sequence of statement.
                    </li>
                    <li>
                      The <strong>break</strong> statement is optional to use in switch. If break is not used, all the statements will execute after finding matched case value.
                    </li>
                    <li>
                      PHP allows you to use number, character, string, as well as functions in switch expression.
                    </li>
                    <li>
                      Nesting of switch statements is allowed, but it makes the program more complex and less readable.
                    </li>
                    <li>
                      You can use semicolon (;) instead of colon (:). It will not generate any error.
                    </li>
                  </ul>
                </p>

                <strong>Loops</strong>
                <p>Like any other language, loop in PHP is used to execute a statement or a block of statements, multiple times until and unless a specific condition is met. This helps the user to save both time and effort of writing the same code multiple times.</p>
                <p>PHP supports four types of looping techniques;</p>
                <ul>
                  <li>for loop</li>
                  <li>while loop</li>
                  <li>do-while loop</li>
                  <li>foreach loop</li>
                </ul>

                <p>
                  <strong>for loop: </strong> This type of loops is used when the user knows in advance, how many times the block needs to execute. That is, the number of iterations is known beforehand. These type of loops are also known as entry-controlled loops. There are three main parameters to the code, namely the initialization, the test condition and the counter.
                  <pre>
                  for (initialization expression; test condition; update expression) {
                    // code to be executed
                  }
                  </pre>
                  <p>In for loop, a loop variable is used to control the loop. First initialize this loop variable to some value, then check whether this variable is less than or greater than counter value. If statement is true, then loop body is executed and loop variable gets updated . Steps are repeated till exit condition comes.</p>
                  <ul>
                    <li>
                      <strong>Initialization Expression</strong>: In this expression we have to initialize the loop counter to some value. for example: $num = 1;
                    </li>
                    <li>
                      <strong>Test Expression</strong>: In this expression we have to test the condition. If the condition evaluates to true then we will execute the body of loop and go to update expression otherwise we will exit from the for loop. For example: $num <= 10;
                    </li>
                    <li>
                      <strong>Update Expression</strong>: After executing loop body this expression increments/decrements the loop variable by some value. for example: $num += 2;
                    </li>
                  </ul>
                  <pre>
                  // code to illustrate for loop
                  for ($num = 1; $num <= 10; $num += 2) {
                      echo "$num \n";
                  } 
                  </pre>
                </p>

                <p>
                  <strong>while loop: </strong> The while loop is also an entry control loop like for loops i.e., it first checks the condition at the start of the loop and if its true then it enters the loop and executes the block of statements, and goes on executing it as long as the condition holds true.
                  <pre>
                  while (if the condition is true) {
                      // code is executed
                  }
                  </pre>
                </p>

                <p>
                  <strong>do-while loop: </strong> This is an exit control loop which means that it first enters the loop, executes the statements, and then checks the condition. Therefore, a statement is executed at least once on using the do…while loop. After executing once, the program is executed as long as the condition holds true.
                  <pre>
                  do {

                  //code is executed

                  } while (if condition is true);
                  </pre>
                </p>

                <p>
                  <strong>foreach loop: </strong> This loop is used to iterate over arrays. For every counter of loop, an array element is assigned and the next counter is shifted to the next element.
                  <pre>
                  foreach (array_element as value) {
                    //code to be executed
                  }
                  </pre>
                  <pre>
                  $arr = array (10, 20, 30, 40, 50, 60);
                  foreach ($arr as $val) { 
                      echo "$val \n";
                  }
                    
                  $arr = array ("Ram", "Laxman", "Sita");
                  foreach ($arr as $val) { 
                      echo "$val \n";
                  }
                  </pre>
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Arrays</h4>
                <p>
                  An array is a data structure that stores one or more similar type of values in a single value.
                </p>
                <p>For example if you want to store 100 numbers then instead of defining 100 variables its easy to define an array of 100 length.</p>
                <p>
                There are three different kind of arrays and each array value is accessed using an ID c which is called array index.
                </p>
                <ul>
                  <li>
                    <strong>Numeric array</strong> − An array with a numeric index. Values are stored and accessed in linear fashion.
                  </li>
                  <li>
                    <strong>Associative array</strong> − An array with strings as index. This stores element values in association with key values rather than in a strict linear index order.
                  </li>
                  <li>
                    <strong>Multidimensional array</strong> − An array containing one or more arrays and values are accessed using multiple indices.
                  </li>
                </ul>

                <p>
                  <strong>Numeric Array: </strong>These arrays can store numbers, strings and any object but their index will be represented by numbers. By default array index starts from zero.
                </p>
                <p>Following is the example showing how to create and access numeric arrays.</p>
                <pre>
                  /* First method to create array. */
                  $numbers = array( 1, 2, 3, 4, 5);
                  
                  foreach( $numbers as $value ) {
                      echo "Value is $value";
                  }
                  
                  /* Second method to create array. */
                  $numbers[0] = "one";
                  $numbers[1] = "two";
                  $numbers[2] = "three";
                  $numbers[3] = "four";
                  $numbers[4] = "five";
                  
                  foreach( $numbers as $value ) {
                      echo "Value is $value";
                  }
                </pre>

                <p>
                  <strong>Associative Arrays: </strong> The associative arrays are very similar to numeric arrays in term of functionality but they are different in terms of their index. Associative array will have their index as string so that you can establish a strong association between key and values.
                </p>
                <p>To store the salaries of employees in an array, a numerically indexed array would not be the best choice. Instead, we could use the employees names as the keys in our associative array, and the value would be their respective salary.</p>
                <pre>
                /* First method to associate create array. */
                $salaries = array("Amit" => 2000, "Kishan" => 1000, "Sunil" => 500);
                
                echo "Salary of Amit is ". $salaries['Amit'];
                echo "Salary of Kishan is ".  $salaries['Kishan']";
                echo "Salary of Sunil is ".  $salaries['Sunil']";
                
                /* Second method to create array. */
                $salaries['Amit'] = "high";
                $salaries['Kishan'] = "medium";
                $salaries['Sunil'] = "low";
                
                echo "Salary of Amit is ". $salaries['Amit'];
                echo "Salary of Kishan is ".  $salaries['Kishan']";
                echo "Salary of Sunil is ".  $salaries['Sunil']";
                </pre>
                
                <p><strong>Multidimensional Arrays: </strong>A multi-dimensional array each element in the main array can also be an array. And each element in the sub-array can be an array, and so on. Values in the multi-dimensional array are accessed using multiple index.</p>
                <p>This example is an associative array, you can create numeric array in the same fashion.</p>
                <pre>
                  $marks = array( 
                    "amit" => array (
                      "physics" => 35,
                      "maths" => 30,	
                      "chemistry" => 39
                    ),
                    
                    "kishan" => array (
                      "physics" => 30,
                      "maths" => 32,
                      "chemistry" => 29
                    ),
                    
                    "sunil" => array (
                      "physics" => 31,
                      "maths" => 22,
                      "chemistry" => 39
                    )
                );
                
                /* Accessing multi-dimensional array values */
                echo "Marks for amit in physics : " ;
                echo $marks['amit']['physics']; 
                
                echo "Marks for kishan in maths : ";
                echo $marks['kishan']['maths']; 
                
                echo "Marks for sunil in chemistry : " ;
                echo $marks['sunil']['chemistry'];
                </pre>
              </div>
            </div>
          </div>

          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Functions</h4>
                <p>
                PHP function is a piece of code that can be reused many times. It can take input as argument list and return value. There are thousands of built-in functions in PHP.
                </p>
                <p>In PHP, we can define Conditional function, Function within Function and Recursive function also.</p>

                <p>
                  <strong>Advantage of PHP Functions</strong>
                  <ul>
                    <li><strong>Code Reusability:</strong>PHP functions are defined only once and can be invoked many times, like in other programming languages.</li>

                    <li><strong>Less Code:</strong>It saves a lot of code because you don't need to write the logic many times. By the use of function, you can write the logic only once and reuse it.</li>
                    
                    <li><strong>Easy to understand:</strong>PHP functions separate the programming logic. So it is easier to understand the flow of the application because every logic is divided in the form of functions.</li>
                    
                  </ul>
                </p>

                <p>
                  <strong>User-defined Functions</strong> We can declare and call user-defined functions easily. Let's see the syntax to declare user-defined functions.
                  <pre>
                  function functionname(){  
                    //code to be executed  
                  }  
                  </pre>
                  <pre>
                  function sayHello(){  
                    echo "Hello PHP Function";  
                  }  
                  sayHello();//calling function  
                  </pre>
                </p>

                <p>
                  <strong>PHP Function Arguments:</strong> We can pass the information in PHP function through arguments which is separated by comma.
                </p>
                <p>PHP supports <strong>Call by Value</strong> (default), <strong>Call by Reference</strong>, <strong>Default argument values</strong> and <strong>Variable-length argument list</strong>.</p>

                <pre>
                function sayHello($name){  
                  echo "Hello $name";  
                }  
                sayHello("Sonoo");  
                sayHello("Vimal");  
                sayHello("John");  
                </pre>
                <pre>
                function sayHello($name,$age){  
                  echo "Hello $name, you are $age years old";  
                }  
                sayHello("Sonoo",27);  
                sayHello("Vimal",29);  
                sayHello("John",23);  
                </pre>

                <p>
                  <strong>Call By Reference: </strong>Value passed to the function doesn't modify the actual value by default (call by value). But we can do so by passing value as a reference.
                </p>
                <p>By default, value passed to the function is call by value. To pass value as a reference, you need to use ampersand (&) symbol before the argument name.</p>
                <p>Let's see a simple example of call by reference in PHP.</p>
                <pre>
                function adder(&$str2)  
                {  
                    $str2 .= 'Call By Reference';  
                }  
                $str = 'Hello ';  
                adder($str);  
                echo $str;  
                </pre>

                <p>
                  <strong>Default Argument Value:</strong>We can specify a default argument value in function. While calling PHP function if you don't specify any argument, it will take the default argument. Let's see a simple example of using default argument value in PHP function.
                  <pre>
                  function sayHello($name="Sonoo"){  
                    echo "Hello $name";  
                  }  
                  sayHello("Rajesh");  
                  sayHello();//passing no value  
                  sayHello("John");   
                  </pre>
                </p>

                <p><strong>Returning Value:</strong>Let's see an example of PHP function that returns value.</p>
                <pre>
                function cube($n){  
                  return $n*$n*$n;  
                }  
                echo "Cube of 3 is: ".cube(3);  
                </pre>
              </div>
            </div>
          </div>

          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Superglobals</h4>
                <p>
                  There are several predefined variables in PHP that are considered as superglobals, which means that you don’t need to use the global keyword to access them. The superglobal variables are available in all scopes of a script.
                </p>
                <ul>
                  <li>$GLOBALS</li>
                  <li>$_SERVER</li>
                  <li>$_GET</li>
                  <li>$_POST</li>
                  <li>$_FILES</li>
                  <li>$_COOKIE</li>
                  <li>$_SESSION</li>
                  <li>$_REQUEST</li>
                  <li>$_ENV</li>
                </ul>

                <p>
                  <strong>$GLOBALS: </strong>The <strong>$GLOBALS</strong> superglobal variable is used to access all the global variables in PHP. Basically, it’s an associative array which holds all variables that are defined in the global scope.
                </p>
                <pre>
                  // variable defined in the global scope
                  $variable = 'php';
                  
                  function displayTechnologyName() {
                      // PHP Notice:  Undefined variable: variable
                      echo 'Technology: ' . $variable;
                  
                      // outputs Technology: php”
                      echo $GLOBALS['variable'];
                  }
                  displayTechnologyName();
                </pre>
                <p>Firstly, we’ve defined the $variable variable in the global scope.</p>

                <p>Now, when we try to access the $variable variable in the displayWebsiteName function, it will try to find the $variable variable in the local scope. And since haven’t defined it in the displayWebsiteName function, you'll get a PHP notice complaining that you’re trying to access an undefined variable.</p>
                
                <p>Next, when we try to access it with the $GLOBALS superglobal, it works since the $GLOBALS variable holds references to all global variables.</p>


                <p>
                  <strong>$_SERVER: </strong>The <strong>$_SERVER</strong> superglobal variable holds the web server and execution environment information. Specifically, it’s initialized by a web server with HTTP headers, paths, and script locations.
                </p>
                <p>Let’s have a look at the output of the print_r($_SERVER) command.</p>
                <pre>
                  Array
                  (
                      [USER] => ubuntu
                      [HOME] => /var/www
                      [HTTP_UPGRADE_INSECURE_REQUESTS] => 1
                      [HTTP_COOKIE] => _ga=GA1.1.19480044.1597729890; _hjid=41b3ce18-a24c-41d4-ac7f-dc5d9066120d; _ga_17Y2VJYG6X=GS1.1.1606729885.14.1.1606730391.0; __gads=ID=4fad16ec33ad9598:T=1606730074:S=ALNI_MaYqS1Ftx7eMR2naLutOqRPT1LytQ
                      [HTTP_CONNECTION] => keep-alive
                      [HTTP_ACCEPT_ENCODING] => gzip, deflate
                      [HTTP_ACCEPT_LANGUAGE] => en-US,en;q=0.5
                      [HTTP_ACCEPT] => text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8
                      [HTTP_USER_AGENT] => Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:78.0) Gecko/20100101 Firefox/78.0
                      [HTTP_HOST] => localhost
                      [REDIRECT_STATUS] => 200
                      [SERVER_NAME] => localhost
                      [SERVER_PORT] => 80
                      [SERVER_ADDR] => 127.0.0.1
                      [REMOTE_PORT] => 39482
                      [REMOTE_ADDR] => 127.0.0.1
                      [SERVER_SOFTWARE] => nginx/1.14.0
                      [GATEWAY_INTERFACE] => CGI/1.1
                      [REQUEST_SCHEME] => http
                      [SERVER_PROTOCOL] => HTTP/1.1
                      [DOCUMENT_ROOT] => /web/demoproject
                      [DOCUMENT_URI] => /server.php
                      [REQUEST_URI] => /server.php
                      [SCRIPT_NAME] => /server.php
                      [CONTENT_LENGTH] =>
                      [CONTENT_TYPE] =>
                      [REQUEST_METHOD] => GET
                      [QUERY_STRING] =>
                      [SCRIPT_FILENAME] => /web/demoproject/server.php
                      [FCGI_ROLE] => RESPONDER
                      [PHP_SELF] => /server.php
                      [REQUEST_TIME_FLOAT] => 1613665334.6422
                      [REQUEST_TIME] => 1613665334
                  )
                </pre>
                <p>Mostly, this contains server-specific information like the server name, server port, script name, document root, and so on. Apart from that, it may also contain information about the client environment like user agent, remote IP address, cookies, and more.</p>
                <p>The important thing is that there’s no guarantee that every web server will initialize all this information. Also, if you’re running a script from the command line, none of the <strong>SERVER_*</strong> variables are initialized, as they are server-specific.</p>

                <p>
                  <strong>$_GET: </strong> When a user submits a form with the GET method, the form data which is sent to a server is available in the <strong>$_GET</strong> variable. The <strong>$_GET</strong> superglobal variable contains an array of variables that are passed to the script via a query string. Basically, anything which is passed as a part of the URL query string will be available in the <strong>$_GET</strong> superglobal variable.
                </p>
                <pre>
                  /index.php?keyword=PHP
                </pre>
                <p>On the server side, you can access it like this:</p>
                <pre>
                if (isset($_GET['keyword'])) {
                    $search_keyword = filter_var($_GET['keyword'], FILTER_SANITIZE_STRING);
                }
                </pre>
                <p>
                You must sanitize the user input before it’s processed or displayed back to the browser, and that’s why we’ve used the filter_var function to sanitize the value of the $_GET[‘keyword’] variable.
                </p>

                <p>
                  <strong>$_POST: </strong> Where the $_GET superglobal variable is used to collect form data which is submitted with the GET method, the $_POST superglobal variable is used to get the form data for the POST method. The POST form data won’t be displayed in the URL; instead, it’s available as a part of the request body.
                </p>
                <pre>
                  <form action="/login.php" method="POST">
                      Username: <input type="text" name="username" />
                      Password: <input type="password" name="password" />
                      <input type="submit" value="Login"/>
                  </form>
                </pre>
                <p>when a user submits the search form, you can access the field values like this on the server side.</p>
                <pre>
                if (isset($_POST['username']) && isset($_POST['password'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                }
                </pre>
                <p>When you work with the $_POST data, you must ensure that you’re taking enough measures to sanitize the incoming data, otherwise it could lead to potential attacks on your site.</p>

                <p>
                  <strong>$_FILES:</strong> When a user submits a form which supports file uploads, the $_FILES superglobal variable will be populated with the information of the files that are uploaded. It’s a two-dimensional array which holds the following attributes of uploaded files:
                    <ul>
                      <li><strong>name</strong>: name of the file</li>
                      <li><strong>type</strong>: type of the file</li>
                      <li><strong>size</strong>: size of the file</li>
                      <li><strong>tmp_name</strong>: server path of the uploaded file</li>
                      <li><strong>error</strong>: error if file upload has failed</li>
                    </ul>
                </p>
                <p>Let’s have a look at the following example to see how file uploads work in PHP.</p>
                <pre>
                    <form action="upload.php" method="POST" enctype="multipart/form-data">
                        Upload File:<input type="file" name="document">
                        <input type="submit" value="Upload" name="Submit">
                    </form>
                </pre>
                <p>In the above example, we’ve set the enctype attribute to multipart/form-data, and thus it enables file uploads. When a user submits a file, you can use the $_FILES superglobal variable to access the uploaded file information, as shown in the following snippet.</p>
                <pre>
                  if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_FILES["document"]) && $_FILES["document"]["error"] === UPLOAD_ERR_OK) {
                        $fileName     = $_FILES["document"]["name"];
                        $fileType     = $_FILES["document"]["type"];
                        $fileSize     = $_FILES["document"]["size"];
                        $fileTmpName = $_FILES["document"]["tmp_name"];
                          
                        $fileNameCmps = explode(".", $fileName);
                        $fileExtension = strtolower(end($fileNameCmps));
                
                        // sanitize file-name
                        $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
                
                        // check if file has one of the following extensions
                        $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc');
                
                        if (in_array($fileExtension, $allowedfileExtensions))
                        {
                          $uploadFileDir = './uploaded_files/';
                          $dest_path = $uploadFileDir . $newFileName;
                
                          if(move_uploaded_file($fileTmpPath, $dest_path))
                          {
                            $message ='File is successfully uploaded.';
                          }
                          else
                          {
                            $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
                          }
                        }
                        else
                        {
                          $message = 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
                        }
                        echo $message;
                    } else {
                        echo 'There was some error uploading the file:' . $_FILES["document"]["error"];
                    }
                  }
                </pre>
                <p>The important thing is that the $_FILES["document"]["tmp_name"] variable contains the path of the uploaded file, which you could use to move the uploaded file to the desired location. If there’s an error, the $_FILES["document"]["error"] variable will be populated with it.</p>

                <p>
                  <strong>$_COOKIE:</strong> As the name suggests, the $_COOKIE superglobal variable is used to read cookies that are available to the current script. Basically, it allows you to access cookies that are already set by the setcookie function in PHP. The $_COOKIE variable is an associate array which holds all cookie variables that are sent via HTTP cookies.
                </p>
                <pre>
                setcookie('lastVisitedSection', 'codeTutsPlus', time() + 3600, "/");
                </pre>
                <p>Now, you can access the lastVisitedSection cookie, as shown in the following snippet.</p>
                <pre>
                if(isset($_COOKIE['lastVisitedSection'])) {
                    echo 'Last visited section:' . htmlspecialchars($_COOKIE['lastVisitedSection']);
                } else {
                    echo 'We encourage you to explore different sections of tutsplus.com!';
                }
                </pre>

                <p>
                  <strong>$_SESSION:</strong> If you’ve already worked with sessions in PHP, you'll be aware of the $_SESSION superglobal variable. A session variable allows you to share information across the different pages of a single site or app—thus it helps maintain state. The $_SESSION variable holds an associative array of session variables that are available to the current script.
                </p>
                <p>Let’s have a look at the following example, which demonstrates how to set and get a session variable.</p>
                <pre>
                session_start();
                // set a session variable
                $_SESSION['loggedInUserName'] = 'John';
                  
                // get a session variable later in the script or in subsequent requests
                If (isset($_SESSION['loggedInUserName'])) {
                    echo 'Hello, '. $_SESSION['loggedInUserName'];
                } else {
                    echo 'Login Now!';
                }
                </pre>
                <p>The important thing is that the session_start function must be called at the beginning of the script to start a session and initialize the $_SESSION variable.</p>

                <p>
                  <strong>$_REQUEST: </strong>The $_REQUEST superglobal variable is an associative array which holds HTTP request variables. Basically, it’s a combination of the$_GET, $_POST, and $_COOKIE superglobal variables. And thus, it’s convenient to use the $_REQUEST variable, specifically if you don’t want to use the aforementioned superglobal variables.
                </p>
                <p>The presence and order of variables in this array depend on the values of the request_order and variables_order configuration directives in the php.ini file. You should be always careful when you use the $_REQUEST variable, and in fact, it’s recommended that you go with $_GET, $_POST, and $_COOKIE instead of using this superglobal variable.</p>

                <p>
                  <strong>$_ENV: </strong>The $_ENV superglobal variable is an associative array of variables that are passed to the script by the environment method. It’s useful when you want to set different values for different environments like local, staging, and production. In your application, you would have database credentials and configuration variables that are different for each environment, and thus, you could use the $_ENV variable to access them in your script since they are initialized dynamically. There are different ways that you could use to set the environment variables.
                </p>
                <p>In PHP, you can use the putenv function to initialize it, as shown in the following snippet.</p>
                <pre>putenv('HOSTNAME=localhost');</pre>
                <p>On the other hand, if you want to set an environment variable in the Apache virtual host file, use:</p>
                <pre>SetEnv HOSTNAME localhost</pre>
                <p>You should always prefer the getenv function to get the value of an environment variable.</p>
                <pre>$hostname = getenv('HOSTNAME');</pre>
                <p>You should always use the getenv function to retrieve the value of an environment variable, since the $_ENV variable might be empty if you haven’t enabled it via the variables_order configuration directive in the php.ini file. The variables_order configuration directive defines the order in which the EGPCS (Environment, Get, Post, Cookie, and Server) variables will be initialized.</p>
              </div>
            </div>
          </div>

          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Form Handling</h4>
                <p>
                HTML forms are used to send the user information to the server and returns the result back to the browser. For example, if you want to get the details of visitors to your website, and send them good thoughts, you can collect the user information by means of form processing. Then, the information can be validated either at the client-side or on the server-side. The final result is sent to the client through the respective web browser. To create a HTML form, form tag should be used.
                </p>
                <p><strong>Attributes of Form Tag:</strong></p>
                <div class="table-responsive">
                  <table class="table table-stripped">
                    <tbody>
                        <tr>
                          <th>Attribute</th>
                          <th>Description</th>
                        </tr>
                        <tr>
                          <td>name or id</td>
                          <td>It specifies the name of the form and is used to identify individual forms.</td>
                        </tr>
                        <tr>
                          <td>action</td>
                          <td>It specifies the location to which the form data has to be sent when the form is submitted.</td>
                        </tr>
                        <tr>
                          <td>method</td>
                          <td>It specifies the HTTP method that is to be used when the form is submitted. The possible values are <strong>get</strong> and <strong>post</strong>. If <strong>get</strong> method is used, the form data are visible to the users in the url. Default HTTP method is <strong>get</strong>.</td>
                        </tr>
                        <tr>
                          <td>encType</td>
                          <td>It specifies the encryption type for the form data when the form is submitted.</td>
                        </tr>
                        <tr>
                          <td>novalidate</td>
                          <td>It implies the server not to verify the form data when the form is submitted.</td>
                        </tr>
                    </tbody>
                  </table>
                </div>
                  <p><strong>Controls used in forms:</strong> Form processing contains a set of controls through which the client and server can communicate and share information. The controls used in forms are:</p>
                  <ul>
                    <li><strong>Textbox:</strong> Textbox allows the user to provide single-line input, which can be used for getting values such as names, search menu and etc.</li>
                    <li><strong>Textarea:</strong> Textarea allows the user to provide multi-line input, which can be used for getting values such as an address, message etc.</li>
                    <li><strong>DropDown:</strong> Dropdown or combobox allows the user to provide select a value from a list of values.</li>
                    <li><strong>Radio Buttons: Radio buttons allow the user to select only one option from the given set of options.</li>
                    <li><strong>CheckBox:</strong> Checkbox allows the user to select multiple options from the set of given options.</li>
                    <li><strong>Buttons:</strong> Buttons are the clickable controls that can be used to submit the form.</li>
                  </ul>
                  <p><strong>Creating a simple HTML Form:</strong> All the form controls given above is designed by using the input tag based on the type attribute of the tag. In the below script, when the form is submitted, no event handling mechanism is done. Event handling refers to the process done while the form is submitted. These event handling mechanisms can be done by using javaScript or PHP. However, JavaScript provides only client-side validation. Hence, we can use PHP for form processing.</p>
                  
                  <p><strong>Form Validation:</strong> Form validation is done to ensure that the user has provided the relevant information. Basic validation can be done using HTML elements. For example, in the above script, the email address text box is having a type value as “email”, which prevents the user from entering the incorrect value for an email. Every form field in the above script is followed by a required attribute, which will intimate the user not to leave any field empty before submitting the form. PHP methods and arrays used in form processing are:</p>
                  <ul>
                    <li><strong>isset():</strong> This function is used to determine whether the variable or a form control is having a value or not.</li>
                    <li><strong>$_GET[]:</strong> It is used the retrieve the information from the form control through the parameters sent in the URL. It takes the attribute given in the url as the parameter.</li>
                    <li><strong>$_POST[]:</strong> It is used the retrieve the information from the form control through the HTTP POST method. IT takes name attribute of corresponding form control as the parameter.</li>
                    <li><strong>$_REQUEST[]:</strong> It is used to retrieve an information while using a database.</li>
                  </ul>
                  <p><strong>Form Processing using PHP:</strong> Above HTML script is rewritten using the above mentioned functions and array. The rewritten script validates all the form fields and if there are no errors, it displays the received information in a tabular form.</p>
                  <pre>
                  if (isset($_POST['submit']))
                  {
                      if ((!isset($_POST['firstname'])) || (!isset($_POST['lastname'])) || 
                          (!isset($_POST['address'])) || (!isset($_POST['emailaddress'])) || 
                          (!isset($_POST['password'])) || (!isset($_POST['gender'])))
                      {
                          $error = "*" . "Please fill all the required fields";
                      }
                      else
                      {
                          $firstname = $_POST['firstname'];
                          $lastname = $_POST['lastname'];
                          $address = $_POST['address'];
                          $emailaddress = $_POST['emailaddress'];
                          $password = $_POST['password'];
                          $gender = $_POST['gender'];
                      }
                  }
                  </pre>
              </div>
            </div>
          </div>

          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">File Upload</h4>
                <p>
                PHP file upload features allows you to upload binary and text files both. Moreover, you can have the full control over the file to be uploaded through PHP authentication and file operation functions.
                </p>
                <p>
                  <strong>$_FILES: </strong>The PHP global $_FILES contains all the information of file. By the help of $_FILES global, we can get file name, file type, file size, temp file name and errors associated with file.
                </p>
                <p>Here, we are assuming that file name is filename.</p>
                <ul>
                  <li><strong>$_FILES['filename']['name']</strong>returns file name.</li>
                  <li><strong>$_FILES['filename']['type']</strong>returns MIME type of the file.</li>
                  <li><strong>$_FILES['filename']['size']</strong>returns size of the file (in bytes).</li>
                  <li><strong>$_FILES['filename']['tmp_name']</strong>returns temporary file name of the file which was stored on the server.</li>
                  <li><strong>$_FILES['filename']['error']</strong>returns error code associated with this file.</li>
                </ul>
                <p><strong>move_uploaded_file() function: </strong> The move_uploaded_file() function moves the uploaded file to a new location. The move_uploaded_file() function checks internally if the file is uploaded thorough the POST request. It moves the file if it is uploaded through the POST request.</p>
                <pre>
                bool move_uploaded_file ( string $filename , string $destination )  
                </pre>
                <pre>
                $target_path = "path_to_directory";  
                $target_path = $target_path.basename( $_FILES['fileToUpload']['name']);   
                  
                if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {  
                    echo "File uploaded successfully!";  
                } else{  
                    echo "Sorry, file not uploaded, please try again!";  
                }  
                </pre>
              </div>
            </div>
          </div>

          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">File Handling</h4>
                <p>
                PHP File System allows us to create file, read file line by line, read file character by character, write file, append file, delete file and close file.
                </p>
                <p>
                  <strong>Open File - fopen(): </strong> The PHP fopen() function is used to open a file.
                </p>
                <pre>
                resource fopen( string $filename , string $mode [, bool $use_include_path = false [, resource $context ]] );

                $handle = fopen("path_to_file", "r");  
                </pre>

                <p>
                  <strong>Close File - fclose(): </strong> The PHP fclose() function is used to close an open file pointer.
                </p>
                <pre>
                bool fclose ( resource $handle ) 
                
                fclose($handle);
                </pre>

                <p>
                  <strong>Read File - fread():</strong> The PHP fread() function is used to read the content of the file. It accepts two arguments: resource and file size.
                </p>
                <pre>
                string fread ( resource $handle , int $length )

                $filename = "file.txt";    
                $handle = fopen($filename, "r");//open file in read mode    
                  
                $contents = fread($handle, filesize($filename));//read file    
                  
                echo $contents;//printing data of file  

                fclose($handle);//close file    
                </pre>

                <p>
                  <strong>Write File - fwrite(): </strong>The PHP fwrite() function is used to write content of the string into file.
                </p>
                <pre>
                int fwrite ( resource $handle , string $string [, int $length ] )

                $fp = fopen('data.txt', 'w');//open file in write mode  
                fwrite($fp, 'hello ');  
                fwrite($fp, 'php file');  
                fclose($fp);  
                  
                echo "File written successfully";  
                </pre>

                <p>
                  <strong>Delete File - unlink(): </strong>The PHP unlink() function is used to delete file.
                </p>
                <pre>
                bool unlink ( string $filename [, resource $context ] )

                unlink('data.txt');  
                </pre>
              </div>
            </div>
          </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php require_once 'partials/footer.php' ;?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <?php require_once 'partials/js-loader.php' ;?>
</body>
</html>

