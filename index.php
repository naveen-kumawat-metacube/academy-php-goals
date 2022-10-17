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
                  <h4 class="card-title">Static v/s Dynamic websites</h4>
                  <strong>Static Websites</strong>
                  <p>
                    In Static Websites, Web pages are returned by the server which are prebuilt source code files built using simple languages such as HTML, CSS, or JavaScript. There is no processing of content on the server (according to the user) in Static Websites. Web pages are returned by the server with no change therefore, static Websites are fast. There is no interaction with databases.
                  </p>

                  <strong>Dynamic Websites</strong>
                  <p>
                    In Dynamic Websites, Web pages are returned by the server which are processed during runtime means they are not prebuilt web pages but they are built during runtime according to the user’s demand with the help of server-side scripting languages such as PHP, Node.js, ASP.NET and many more supported by the server. So, they are slower than static websites but updates and interaction with databases are possible. 
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                          <tr>
                            <th>
                                Static Website
                            </th>
                            <th>
                                Dynamic Website
                            </th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                            <td>Content of Web pages can not be change at runtime.</td>
                            <td>Content of Web pages can be changed.</td>
                          </tr>
                          <tr>
                            <td>No interaction with database possible.</td>
                            <td>Interaction with database is possible</td>
                          </tr>
                          <tr>
                            <td>It is faster to load as compared to dynamic website.</td>
                            <td>It is slower then static website.</td>
                          </tr>
                          <tr>
                            <td>Cheaper Development costs.</td>
                            <td>More Development costs.</td>
                          </tr>
                          <tr>
                            <td>No feature of Content Management.</td>
                            <td>Feature of Content Management System.</td>
                          </tr>
                          <tr>
                            <td>HTML, CSS, Javascript is used for developing the website.</td>
                            <td>Server side languages such as PHP, Node.js are used.</td>
                          </tr>
                          <tr>
                            <td>Same content is delivered everytime the page is loaded.</td>
                            <td>Content may change everytime the page is loaded.</td>
                          </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Client side v/s Server side scripting languages</h4>
                  <strong>Client Side Scripting</strong>
                  <p>
                  Web browsers execute client-side scripting. It is used when browsers have all code. Source code is used to transfer from webserver to user’s computer over the internet and run directly on browsers. It is also used for validations and functionality for user events. 
                  </p>
                  <p>
                  It allows for more interactivity. It usually performs several actions without going to the user. It cannot be basically used to connect to databases on a web server. These scripts cannot access the file system that resides in the web browser. Pages are altered on basis of the user’s choice. It can also be used to create “cookies” that store data on the user’s computer. 
                  </p>

                  <strong>Server Side Scripting</strong>
                  <p>
                    Web servers are used to execute server-side scripting. They are basically used to create dynamic pages. It can also access the file system residing at the webserver. A server-side environment that runs on a scripting language is a web server. 
                  </p>
                  <p>
                    Scripts can be written in any of a number of server-side scripting languages available. It is used to retrieve and generate content for dynamic pages. It is used to require to download plugins. In this load times are generally faster than client-side scripting. When you need to store and retrieve information a database will be used to contain data. It can use huge resources of the server. It reduces client-side computation overhead. The server sends pages to the request of the user/client. 
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                          <tr>
                            <th>
                                Client-side scripting
                            </th>
                            <th>
                                Server-side scripting
                            </th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                            <td>Source code is visible to the user.</td>
                            <td>Source code is not visible to the user because its output&nbsp;<br>of server-sideside is an HTML page.&nbsp;<br>&nbsp;</td>
                          </tr>
                          <tr>
                            <td>Its main function is to provide the requested output to the end user.</td>
                            <td>Its primary function is to manipulate and provide access to the respective database as per the request.</td>
                          </tr>
                          <tr>
                            <td>It usually depends on the browser and its version.</td>
                            <td>In this any server-side technology can be used and it does not&nbsp;<br>depend on the client.&nbsp;<br>&nbsp;</td>
                          </tr>
                          <tr>
                            <td>It runs on the user’s computer.</td>
                            <td>It runs on the webserver.</td>
                          </tr>
                          <tr>
                            <td>There are many advantages linked with this like faster.&nbsp;<br>response times, a more interactive application.&nbsp;<br>&nbsp;</td>
                            <td>The primary advantage is its ability to highly customize, response&nbsp;<br>requirements, access rights based on user.&nbsp;<br>&nbsp;</td>
                          </tr>
                          <tr>
                            <td>It does not provide security for data.</td>
                            <td>It provides more security for data.</td>
                          </tr>
                          <tr>
                            <td>It is a technique used in web development in which scripts run on the client’s browser.</td>
                            <td>It is a technique that uses scripts on the webserver to produce a response that is customized for each client’s request.</td>
                          </tr>
                          <tr>
                            <td>HTML, CSS, and javascript are used.</td>
                            <td>PHP, Python, Java, Ruby are used.</td>
                          </tr>
                          <tr>
                            <td>No need of interaction with the server.</td>
                            <td>It is all about interacting with the servers.</td>
                          </tr>
                          <tr>
                            <td>It reduces load on processing unit of the server.</td>
                            <td>It surge the processing load on the server.</td>
                          </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">PHP Basics (Syntax, comments, variables, Data types, constants, Date-Time)</h4>
                  
                  <strong>Comments</strong>
                  <p>PHP comments can be used to describe any line of code so that other developer can understand the code easily. It can also be used to hide any code.</p>
                  <p>
                  PHP supports single line and multi line comments. These comments are similar to C/C++ and Perl style (Unix shell style) comments.
                  </p>
                  <p>
                  // This is a single-line comment
                  </p>
                  <p>
                  # This is also a single-line comment
                  </p>
                  <p>
                  /*
                  This is a multiple-lines comment block<br/>
                  that spans over multiple<br/>
                  lines
                  */
                  </p>

                  <strong>Variables</strong>
                  <p>
                  Variables in a program are used to store some values or data that can be used later in a program. The variables are also like containers that store character values, numeric values, memory addresses, and strings. PHP has its own way of declaring and storing variables. 
                  </p>
                  <p>There are a few rules, that need to be followed and facts that need to be kept in mind while dealing with variables in PHP:</p>
                  <ul>
                    <li>Any variables declared in PHP must begin with a dollar sign ($), followed by the variable name.</li>
                    <li>A variable can have long descriptive names (like $factorial, $even_nos) or short names (like $n or $f or $x)</li>
                    <li>A variable name can only contain alphanumeric characters and underscores (i.e., ‘a-z’, ‘A-Z’, ‘0-9, and ‘_’) in their name. Even it cannot start with a number.</li>
                    <li>A constant is used as a variable for a simple value that cannot be changed. It is also case-sensitive.</li>
                    <li>Assignment of variables is done with the assignment operator, “equal to (=)”. The variable names are on the left of equal and the expression or values are to the right of the assignment operator ‘=’.</li>
                    <li>One must keep in mind that variable names in PHP names must start with a letter or underscore and no numbers.</li>
                    <li>PHP is a loosely typed language, and we do not require to declare the data types of variables, rather PHP assumes it automatically by analyzing the values. The same happens while conversion. No variables are declared before they are used. It automatically converts types from one type to another whenever required.</li>
                    <li>PHP variables are case-sensitive, i.e., $sum and $SUM are treated differently.</li>
                  </ul>

                  <strong>Data Types</strong>
                  <p>
                    <ul>
                      <li><strong>String</strong> : A string is a sequence of characters like : ‘Hello World’. A string can be any text inside quotes.</li>
                      <li><strong>Integer</strong> : Integer number is non decimal positive or negative numbers. It has range between</li>
                      -2,147,483,648 and 2,147,483,647.
                      <li><strong>Float</strong> : A Float is a number with decimal point or in exponential form.</li>
                      <li><strong>Boolean</strong> : Boolean represents TRUE and FALSE values.</li>
                      <li><strong>Array</strong> : An Array store multiple values in list within a variable. It could contains different data
                      types values in an array.</li>
                      <li><strong>Object</strong> : PHP support OOPS programming to have Class and Objects.</li>
                      <li><strong>NULL</strong> : NULL is special data types that has NULL value means, no value assigned to any variable.</li>
                    </ul>
                  </p>

                  <strong>Constants</strong>
                  <p>
                  Constants are either identifiers or simple names that can be assigned any fixed values. They are similar to a variable except that they can never be changed. They remain constant throughout the program and cannot be altered during execution. Once a constant is defined, it cannot be undefined or redefined. Constant identifiers should be written in upper case following the convention. By default, a constant is always case-sensitive, unless mentioned. A constant name must never start with a number. It always starts with a letter or underscores, followed by letter, numbers or underscore. It should not contain any special characters except underscore, as mentioned.
                  </p>
                  <p>The define() function in PHP is used to create a constant as shown as:
                    <strong>define(name, value, case_insensitive);</strong>
                  </p>

                  <strong>Date-Time</strong>
                  <p>The PHP date() function converts timestamp to a more readable date and time format : </p>
                  <strong>date(‘Y-m-d H:i:s’, ‘TIMESTAMP’);</strong>

                </div>
              </div>
            </div>

            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">PHP Operators</h4>
                  <p>
                    Operators are used to performing operations on some values. In other words, we can describe operators as something that takes some values, performs some operation on them, and gives a result. From example, “1 + 2 = 3” in this expression ‘+’ is an operator. It takes two values 1 and 2, performs an addition operation on them to give 3. 
                  </p>
                  <p>Just like any other programming language, PHP also supports various types of operations like arithmetic operations(addition, subtraction, etc), logical operations(AND, OR etc), Increment/Decrement Operations, etc. Thus, PHP provides us with many operators to perform such operations on various operands or variables, or values. These operators are nothing but symbols needed to perform operations of various types. Given below are the various groups of operators:</p>
                  <ul>
                    <li>Arithmetic Operators</li>
                    <li>Assignment Operators</li>
                    <li>Bitwise Operators</li>
                    <li>Comparison Operators</li>
                    <li>Incrementing/Decrementing Operators</li>
                    <li>Logical Operators</li>
                    <li>String Operators</li>
                    <li>Array Operators</li>
                    <li>Type Operators</li>
                    <li>Execution Operators</li>
                    <li>Error Control Operators</li>
                  </ul>

                  <p>
                    <strong>Arithmetic Operators : </strong>
                    The PHP arithmetic operators are used to perform common arithmetic operations such as addition, subtraction, etc. with numeric values.
                    <div class="table-responsive">
                      <table class="table table-stripped">
                        <tbody>
                            <tr>
                              <th>Operator</th>
                              <th>Name</th>
                              <th>Example</th>
                              <th>Explanation</th>
                            </tr>
                            <tr>
                              <td>+</td>
                              <td>Addition</td>
                              <td>$a + $b</td>
                              <td>Sum of operands</td>
                            </tr>
                            <tr>
                              <td>-</td>
                              <td>Subtraction</td>
                              <td>$a - $b</td>
                              <td>Difference of operands</td>
                            </tr>
                            <tr>
                              <td>*</td>
                              <td>Multiplication</td>
                              <td>$a * $b</td>
                              <td>Product of operands</td>
                            </tr>
                            <tr>
                              <td>/</td>
                              <td>Division</td>
                              <td>$a / $b</td>
                              <td>Quotient of operands</td>
                            </tr>
                            <tr>
                              <td>%</td>
                              <td>Modulus</td>
                              <td>$a % $b</td>
                              <td>Remainder of operands</td>
                            </tr>
                            <tr>
                              <td>**</td>
                              <td>Exponentiation</td>
                              <td>$a ** $b</td>
                              <td>$a raised to the power $b</td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
                  </p>

                  <p>
                    <strong>Assignment Operators : </strong>
                    The assignment operators are used to assign value to different variables. The basic assignment operator is "=".
                    <div class="table-responsive">
                      <table class="table table-stripped">
                        <tbody>
                          <tr>
                            <th>Operator</th>
                            <th>Name</th>
                            <th>Example</th>
                            <th>Explanation</th>
                          </tr>
                          <tr>
                            <td>=</td>
                            <td>Assign</td>
                            <td>$a = $b</td>
                            <td>The value of right operand is assigned to the left operand.</td>
                          </tr>
                          <tr>
                            <td>+=</td>
                            <td>Add then Assign</td>
                            <td>$a += $b</td>
                            <td>Addition same as $a = $a + $b</td>
                          </tr>
                          <tr>
                            <td>-=</td>
                            <td>Subtract then Assign</td>
                            <td>$a -= $b</td>
                            <td>Subtraction same as $a = $a - $b</td>
                          </tr>
                          <tr>
                            <td>*=</td>
                            <td>Multiply then Assign</td>
                            <td>$a *= $b</td>
                            <td>Multiplication same as $a = $a * $b</td>
                          </tr>
                          <tr>
                            <td>/=</td>
                            <td>Divide then Assign<br>
                                (quotient)
                            </td>
                            <td>$a /= $b</td>
                            <td>Find quotient same as $a = $a / $b</td>
                          </tr>
                          <tr>
                            <td>%=</td>
                            <td>Divide then Assign<br>
                                (remainder)
                            </td>
                            <td>$a %= $b</td>
                            <td>Find remainder same as $a = $a % $b</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </p>

                  <p>
                    <strong>Bitwise Operators: </strong>
                    The bitwise operators are used to perform bit-level operations on operands. These operators allow the evaluation and manipulation of specific bits within the integer.
                    <div class="table-responsive">
                    <table class="table table-stripped">
                      <tbody>
                          <tr>
                            <th>Operator</th>
                            <th>Name</th>
                            <th>Example</th>
                            <th>Explanation</th>
                          </tr>
                          <tr>
                            <td>&amp;</td>
                            <td>And</td>
                            <td>$a &amp; $b</td>
                            <td>Bits that are 1 in both $a and $b are set to 1, otherwise 0.</td>
                          </tr>
                          <tr>
                            <td>|</td>
                            <td>Or (Inclusive or)</td>
                            <td>$a | $b</td>
                            <td>Bits that are 1 in either $a or $b are set to 1</td>
                          </tr>
                          <tr>
                            <td>^</td>
                            <td>Xor (Exclusive or)</td>
                            <td>$a ^ $b</td>
                            <td>Bits that are 1 in either $a or $b are set to 0.</td>
                          </tr>
                          <tr>
                            <td>~</td>
                            <td>Not</td>
                            <td>~$a</td>
                            <td>Bits that are 1 set to 0 and bits that are 0 are set to 1</td>
                          </tr>
                          <tr>
                            <td>&lt;&lt;</td>
                            <td>Shift left</td>
                            <td>$a &lt;&lt; $b</td>
                            <td>Left shift the bits of operand $a $b steps</td>
                          </tr>
                          <tr>
                            <td>&gt;&gt;</td>
                            <td>Shift right</td>
                            <td>$a &gt;&gt; $b</td>
                            <td>Right shift the bits of $a operand by $b number of places</td>
                          </tr>
                      </tbody>
                    </table>
                    </div>
                  </p>
                  <p>
                    <strong>Comparison Operators: </strong>
                    Comparison operators allow comparing two values, such as number or string. Below the list of comparison operators are given:
                    <div class="table-responsive">
                      <table class="table table-stripped">
                        <tbody>
                            <tr>
                              <th>Operator</th>
                              <th>Name</th>
                              <th>Example</th>
                              <th>Explanation</th>
                            </tr>
                            <tr>
                              <td>==</td>
                              <td>Equal</td>
                              <td>$a == $b</td>
                              <td>Return TRUE if $a is equal to $b</td>
                            </tr>
                            <tr>
                              <td>===</td>
                              <td>Identical</td>
                              <td>$a === $b</td>
                              <td>Return TRUE if $a is equal to $b, and they are of same data type</td>
                            </tr>
                            <tr>
                              <td>!==</td>
                              <td>Not identical</td>
                              <td>$a !== $b</td>
                              <td>Return TRUE if $a is not equal to $b, and they are not of same data type</td>
                            </tr>
                            <tr>
                              <td>!=</td>
                              <td>Not equal</td>
                              <td>$a != $b</td>
                              <td>Return TRUE if $a is not equal to $b</td>
                            </tr>
                            <tr>
                              <td>&lt;&gt;</td>
                              <td>Not equal</td>
                              <td>$a &lt;&gt; $b</td>
                              <td>Return TRUE if $a is not equal to $b</td>
                            </tr>
                            <tr>
                              <td>&lt;</td>
                              <td>Less than</td>
                              <td>$a &lt; $b</td>
                              <td>Return TRUE if $a is less than $b</td>
                            </tr>
                            <tr>
                              <td>&gt;</td>
                              <td>Greater than</td>
                              <td>$a &gt; $b</td>
                              <td>Return TRUE if $a is greater than $b</td>
                            </tr>
                            <tr>
                              <td>&lt;=</td>
                              <td>Less than or equal to</td>
                              <td>$a &lt;= $b</td>
                              <td>Return TRUE if $a is less than or equal $b</td>
                            </tr>
                            <tr>
                              <td>&gt;=</td>
                              <td>Greater than or equal to</td>
                              <td>$a &gt;= $b</td>
                              <td>Return TRUE if $a is greater than or equal $b</td>
                            </tr>
                            <tr>
                              <td>&lt;=&gt;</td>
                              <td>Spaceship</td>
                              <td>$a &lt;=&gt;$b</td>
                              <td>Return -1 if $a is less than $b<br>
                                  Return 0 if $a is equal $b<br>
                                  Return 1 if $a is greater than $b
                              </td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
                  </p>
                  <p>
                    <strong>Incrementing/Decrementing Operators: </strong>
                    The increment and decrement operators are used to increase and decrease the value of a variable.
                    <div class="table-responsive">
                      <table class="table table-stripped">
                        <tbody>
                            <tr>
                              <th>Operator</th>
                              <th>Name</th>
                              <th>Example</th>
                              <th>Explanation</th>
                            </tr>
                            <tr>
                              <td rowspan="2">++</td>
                              <td rowspan="2">Increment</td>
                              <td>++$a</td>
                              <td>Increment the value of $a by one, then return $a</td>
                            </tr>
                            <tr>
                              <td>$a++</td>
                              <td>Return $a, then increment the value of $a by one</td>
                            </tr>
                            <tr>
                              <td rowspan="2">--</td>
                              <td rowspan="2">decrement</td>
                              <td>--$a</td>
                              <td>Decrement the value of $a by one, then return $a</td>
                            </tr>
                            <tr>
                              <td>$a--</td>
                              <td>Return $a, then decrement the value of $a by one</td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
                  </p>
                  <p>
                    <strong>Logical Operators: </strong>
                    The logical operators are used to perform bit-level operations on operands. These operators allow the evaluation and manipulation of specific bits within the integer.
                    <div class="table-responsive">
                    <table class="table table-stripped">
                          <tbody>
                              <tr>
                                <th>Operator</th>
                                <th>Name</th>
                                <th>Example</th>
                                <th>Explanation</th>
                              </tr>
                              <tr>
                                <td>and</td>
                                <td>And</td>
                                <td>$a and $b</td>
                                <td>Return TRUE if both $a and $b are true</td>
                              </tr>
                              <tr>
                                <td>Or</td>
                                <td>Or</td>
                                <td>$a or $b</td>
                                <td>Return TRUE if either $a or $b is true</td>
                              </tr>
                              <tr>
                                <td>xor</td>
                                <td>Xor</td>
                                <td>$a xor $b</td>
                                <td>Return TRUE if either $ or $b is true but not both</td>
                              </tr>
                              <tr>
                                <td>!</td>
                                <td>Not</td>
                                <td>! $a</td>
                                <td>Return TRUE if $a is not true</td>
                              </tr>
                              <tr>
                                <td>&amp;&amp;</td>
                                <td>And</td>
                                <td>$a &amp;&amp; $b</td>
                                <td>Return TRUE if either $a and $b are true</td>
                              </tr>
                              <tr>
                                <td>||</td>
                                <td>Or</td>
                                <td>$a || $b</td>
                                <td>Return TRUE if either $a or $b is true</td>
                              </tr>
                          </tbody>
                        </table>
                    </div>
                  </p>
                  <p>
                    <strong>String Operators: </strong>
                    The string operators are used to perform the operation on strings. There are two string operators in PHP, which are given below:
                      <div class="table-responsive">
                        <table class="table table-stripped">
                          <tbody>
                              <tr>
                                <th>Operator</th>
                                <th>Name</th>
                                <th>Example</th>
                                <th>Explanation</th>
                              </tr>
                              <tr>
                                <td>.</td>
                                <td>Concatenation</td>
                                <td>$a . $b</td>
                                <td>Concatenate both $a and $b</td>
                              </tr>
                              <tr>
                                <td>.=</td>
                                <td>Concatenation and Assignment</td>
                                <td>$a .= $b</td>
                                <td>First concatenate $a and $b, then assign the concatenated string to $a, e.g. $a = $a . $b</td>
                              </tr>
                          </tbody>
                        </table>
                      </div>
                  </p>
                  <p>
                    <strong>Array Operators: </strong>
                    The array operators are used in case of array. Basically, these operators are used to compare the values of arrays.
                    <div class="table-responsive">
                      <table class="table table-stripped">
                        <tbody>
                            <tr>
                              <th>Operator</th>
                              <th>Name</th>
                              <th>Example</th>
                              <th>Explanation</th>
                            </tr>
                            <tr>
                              <td>+</td>
                              <td>Union</td>
                              <td>$a + $y</td>
                              <td>Union of $a and $b</td>
                            </tr>
                            <tr>
                              <td>==</td>
                              <td>Equality</td>
                              <td>$a == $b</td>
                              <td>Return TRUE if $a and $b have same key/value pair</td>
                            </tr>
                            <tr>
                              <td>!=</td>
                              <td>Inequality</td>
                              <td>$a != $b</td>
                              <td>Return TRUE if $a is not equal to $b</td>
                            </tr>
                            <tr>
                              <td>===</td>
                              <td>Identity</td>
                              <td>$a === $b</td>
                              <td>Return TRUE if $a and $b have same key/value pair of same type in same order</td>
                            </tr>
                            <tr>
                              <td>!==</td>
                              <td>Non-Identity</td>
                              <td>$a !== $b</td>
                              <td>Return TRUE if $a is not identical to $b</td>
                            </tr>
                            <tr>
                              <td>&lt;&gt;</td>
                              <td>Inequality</td>
                              <td>$a &lt;&gt; $b</td>
                              <td>Return TRUE if $a is not equal to $b</td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
                  </p>
                  <p>
                    <strong>Type Operators: </strong>
                    The type operator <strong>instanceof</strong> is used to determine whether an object, its parent and its derived class are the same type or not. Basically, this operator determines which certain class the object belongs to. It is used in object-oriented programming.
                    <pre>
                    class Developer  
                    {}  
                    class Programmer  
                    {}  
                    //creating an object of type Developer  
                    $charu = new Developer();  
                      
                    //testing the type of object  
                    if( $charu instanceof Developer)  
                    {  
                        echo "Charu is a developer.";  
                    }  
                    else  
                    {     
                        echo "Charu is a programmer.";  
                    }
                    var_dump($charu instanceof Developer);           //It will return true.  
                    var_dump($charu instanceof Programmer);       //It will return false.  
                    </pre>
                  </p>
                  
                  <p>
                    <strong>Execution Operators: </strong>
                    PHP has an execution operator backticks (``). PHP executes the content of backticks as a shell command. Execution operator and shell_exec() give the same result.
                    <table class="table table-stripped">
                      <tbody>
                          <tr>
                            <th>Operator</th>
                            <th>Name</th>
                            <th>Example</th>
                            <th>Explanation</th>
                          </tr>
                          <tr>
                            <td>``</td>
                            <td>backticks</td>
                            <td>echo `dir`;</td>
                            <td>Execute the shell command and return the result.<br>
                                Here, it will show the directories available in current folder.
                            </td>
                          </tr>
                      </tbody>
                    </table>
                  </p>
                  <p>
                    <strong>Error Control Operators: </strong>
                    PHP has one error control operator, i.e., at (@) symbol. Whenever it is used with an expression, any error message will be ignored that might be generated by that expression.
                    <table class="table table-stripped">
                      <tbody>
                          <tr>
                            <th>Operator</th>
                            <th>Name</th>
                            <th>Example</th>
                            <th>Explanation</th>
                          </tr>
                          <tr>
                            <td>@</td>
                            <td>at</td>
                            <td>@file ('non_existent_file')</td>
                            <td>Intentional file error</td>
                          </tr>
                      </tbody>
                    </table>
                  </p>
                </div>
              </div>
            </div>

            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">PHP Sessions & Cookies</h4>
                  <strong>Session</strong>
                  <p>A session is used to save information on the server momentarily so that it may be utilized across various pages of the website. It is the overall amount of time spent on an activity. The user session begins when the user logs in to a specific network application and ends when the user logs out of the program or shuts down the machine.</p>
                  <p>Session values are far more secure since they are saved in binary or encrypted form and can only be decoded at the server. When the user shuts down the machine or logs out of the program, the session values are automatically deleted. We must save the values in the database to keep them forever.</p>

                  <strong>Cookie</strong>
                  <p>A cookie is a small text file that is saved on the user’s computer. The maximum file size for a cookie is 4KB. It is also known as an HTTP cookie, a web cookie, or an internet cookie. When a user first visits a website, the site sends data packets to the user’s computer in the form of a cookie.</p>
                  <p>The information stored in cookies is not safe since it is kept on the client-side in a text format that anybody can see. We can activate or disable cookies based on our needs.</p>
                  <div class="table-responsive">
                  <table class="table table-stripped">
                    <tbody>
                        <tr>
                          <th>
                            Cookie
                          </th>
                          <th>
                            Session
                          </th>
                        </tr>
                        <tr>
                          <td>Cookies are client-side files on a local computer that hold user information.</td>
                          <td>Sessions are server-side files that contain user data.</td>
                        </tr>
                        <tr>
                          <td>Cookies end on the lifetime set by the user.</td>
                          <td>When the user quits the browser or logs out of the programmed, the session is over.</td>
                        </tr>
                        <tr>
                          <td>It can only store a certain amount of info.</td>
                          <td>It can hold an indefinite quantity of data.</td>
                        </tr>
                        <tr>
                          <td>The browser’s cookies have a maximum capacity of 4 KB.</td>
                          <td>We can keep as much data as we like within a session, however there is a maximum memory restriction of 128 MB that a script may consume at one time.</td>
                        </tr>
                        <tr>
                          <td>Because cookies are kept on the local computer, we don’t need to run a function to start them.</td>
                          <td>To begin the session, we must use the session start() method.</td>
                        </tr>
                        <tr>
                          <td>Cookies are not secured.</td>
                          <td>Session are more secured compare than cookies.</td>
                        </tr>
                        <tr>
                          <td>Cookies stored data in text file.</td>
                          <td>Session save data in encrypted form.</td>
                        </tr>
                        <tr>
                          <td>Cookies stored on a limited data.</td>
                          <td>Session stored a unlimited data.</td>
                        </tr>
                        <tr>
                          <td>In PHP, to get the data from Cookies , $_COOKIES the global variable is used</td>
                          <td>In PHP &nbsp;, to set the data from Session, $_SESSION the global variable is used</td>
                        </tr>
                        <tr>
                          <td>We can set an expiration date to delete the cookie’s data. It will automatically delete the data at that specific time.&nbsp;</td>
                          <td>In PHP, to destroy or remove the data stored within a session, we can use the session_destroy() function, and to unset a specific variable, we can use the unset() function.</td>
                        </tr>
                    </tbody>
                  </table>
                  </div>
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

