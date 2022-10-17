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
                  <h4 class="card-title">OOPS CONCEPT</h4>
                  <p>Before we go in detail, lets define important terms related to Object Oriented Programming..</p>
                  
                  <ul>
                    <li>
                      <strong>Class: </strong>
                      This is a programmer-defined data type, which includes local functions as well as local data. You can think of a class as a template for making many instances of the same kind (or class) of object.
                    </li>
                    <li>
                      <strong>Object: </strong>
                      An individual instance of the data structure defined by a class. You define a class once and then make many objects that belong to it. Objects are also known as instance.
                    </li>
                    <li>
                      <strong>Member Variable: </strong>
                      These are the variables defined inside a class. This data will be invisible to the outside of the class and can be accessed via member functions. These variables are called attribute of the object once an object is created.
                    </li>
                    <li>
                      <strong>Member function: </strong>
                      These are the function defined inside a class and are used to access object data.
                    </li>
                    <li>
                      <strong>Inheritance: </strong>
                      When a class is defined by inheriting existing function of a parent class then it is called inheritance. Here child class will inherit all or few member functions and variables of a parent class.
                    </li>
                    <li>
                      <strong>Polymorphism: </strong>
                      This is an object oriented concept where same function can be used for different purposes. For example function name will remain same but it take different number of arguments and can do different task.
                    </li>
                    <li>
                      <strong>Overloading: </strong>
                      A type of polymorphism in which some or all of operators have different implementations depending on the types of their arguments. Similarly functions can also be overloaded with different implementation.
                    </li>
                    <li>
                      <strong>Data Abstraction: </strong>
                      Any representation of data in which the implementation details are hidden (abstracted).
                    </li>
                    <li>
                      <strong>Encapsulation: </strong>
                      refers to a concept where we encapsulate all the data and member functions together to form an object.
                    </li>
                    <li>
                      <strong>Constructor: </strong>
                      refers to a special type of function which will be called automatically whenever there is an object formation from a class.
                    </li>
                    <li>
                      <strong>Destructor: </strong>
                      refers to a special type of function which will be called automatically whenever an object is deleted or goes out of scope.
                    </li>
                  </ul>
              </div>
            </div>
          </div>

          <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">PHP Classes</h4>
                  <p>The general form for defining a new class in PHP is as follows −</p>
                  <pre>
                  class phpClass {
                      var $var1;
                      var $var2 = "constant string";
                      
                      function myfunc ($arg1, $arg2) {
                        [..]
                      }
                      [..]
                  }
                  </pre>
                  <p>Here is the description of each line −</p>
                  <ul>
                    <li>
                      The special form <strong>class</strong>, followed by the name of the class that you want to define.
                    </li>
                    <li>
                      A set of braces enclosing any number of variable declarations and function definitions.
                    </li>
                    <li>
                      Variable declarations start with the special form <strong>var</strong>, which is followed by a conventional $ variable name; they may also have an initial assignment to a constant value.
                    </li>
                    <li>
                      Function definitions look much like standalone PHP functions but are local to the class and will be used to set and access object data.
                    </li>
                    <li></li>
                  </ul>

                  <p>Here is an example which defines a class of Books type −</p>
                  <pre>
                  class Books {
                      /* Member variables */
                      var $price;
                      var $title;
                      
                      /* Member functions */
                      function setPrice($par){
                        $this->price = $par;
                      }
                      
                      function getPrice(){
                        echo $this->price;
                      }
                      
                      function setTitle($par){
                        $this->title = $par;
                      }
                      
                      function getTitle(){
                        echo $this->title;
                      }
                  }
                  </pre>

                  <p>The variable $this is a special variable and it refers to the same object ie. itself.</p>

                  <p>
                    <strong>Creating Objects in PHP: </strong>
                    Once you defined your class, then you can create as many objects as you like of that class type. Following is an example of how to create object using new operator.
                  </p>
                  <pre>
                  $physics = new Books;
                  $maths = new Books;
                  $chemistry = new Books;
                  </pre>
                  <p>
                  Here we have created three objects and these objects are independent of each other and they will have their existence separately. Next we will see how to access member function and process member variables.
                  </p>

                  <p>
                    <strong>Calling Member Functions:</strong>
                    After creating your objects, you will be able to call member functions related to that object. One member function will be able to process member variable of related object only.
                  </p>
                  <p>Following example shows how to set title and prices for the three books by calling member functions.</p>
                  <pre>
                  $physics->setTitle( "Physics for High School" );
                  $chemistry->setTitle( "Advanced Chemistry" );
                  $maths->setTitle( "Algebra" );

                  $physics->setPrice( 10 );
                  $chemistry->setPrice( 15 );
                  $maths->setPrice( 7 );
                  </pre>
                  <p>Now you call another member functions to get the values set by in above example −</p>
                  <pre>
                  $physics->getTitle();
                  $chemistry->getTitle();
                  $maths->getTitle();
                  $physics->getPrice();
                  $chemistry->getPrice();
                  $maths->getPrice();
                  </pre>
                  <p>This will produce the following result −</p>
                  <pre>
                  Physics for High School
                  Advanced Chemistry
                  Algebra
                  10
                  15
                  7
                  </pre>

                  <p>
                    <strong>Constructor Functions: </strong>
                    Constructor Functions are special type of functions which are called automatically whenever an object is created. So we take full advantage of this behaviour, by initializing many things through constructor functions.
                  </p>
                  <p>
                  PHP provides a special function called <strong>__construct()</strong> to define a constructor. You can pass as many as arguments you like into the constructor function.
                  </p>
                  <p>Following example will create one constructor for Books class and it will initialize price and title for the book at the time of object creation.</p>
                  <pre>
                  function __construct( $par1, $par2 ) {
                    $this->title = $par1;
                    $this->price = $par2;
                  }
                  </pre>
                  <p>
                  Now we don't need to call set function separately to set price and title. We can initialize these two member variables at the time of object creation only. Check following example below −
                  </p>
                  <pre>
                  $physics = new Books( "Physics for High School", 10 );
                  $maths = new Books ( "Advanced Chemistry", 15 );
                  $chemistry = new Books ("Algebra", 7 );

                  /* Get those set values */
                  $physics->getTitle();
                  $chemistry->getTitle();
                  $maths->getTitle();

                  $physics->getPrice();
                  $chemistry->getPrice();
                  $maths->getPrice();
                  </pre>

                  <p>
                    <strong>Destructor: </strong>
                    Like a constructor function you can define a destructor function using function <strong>__destruct()</strong>. You can release all the resources with-in a destructor.
                  </p>
              </div>
            </div>
          </div>

          <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Inheritance</h4>
                  <p>PHP class definitions can optionally inherit from a parent class definition by using the extends clause. The syntax is as follows −</p>
                  <pre>
                  class Child extends Parent {
                    <definition body>
                  }
                  </pre>
                  <p>The effect of inheritance is that the child class (or subclass or derived class) has the following characteristics −</p>
                  <ul>
                    <li>Automatically has all the member variable declarations of the parent class.</li>
                    <li>Automatically has all the same member functions as the parent, which (by default) will work the same way as those functions do in the parent.</li>
                  </ul>
                  <p>Following example inherit Books class and adds more functionality based on the requirement.</p>
                  <pre>
                  class Novel extends Books {
                    var $publisher;
                    
                    function setPublisher($par){
                        $this->publisher = $par;
                    }
                    
                    function getPublisher(){
                        echo $this->publisher. "<br />";
                    }
                  }
                  </pre>
                  <p>Now apart from inherited functions, class Novel keeps two additional member functions.</p>

                  <p>
                    <strong>Function Overriding</strong>
                    Function definitions in child classes override definitions with the same name in parent classes. In a child class, we can modify the definition of a function inherited from parent class.
                  </p>
                  <p>In the following example getPrice and getTitle functions are overridden to return some values.</p>
                  <pre>
                  function getPrice() {
                    echo $this->price . "<br/>";
                    return $this->price;
                  }
                    
                  function getTitle(){
                    echo $this->title . "<br/>";
                    return $this->title;
                  }
                  </pre>

                  <p>
                    <strong>Public Members: </strong>
                    Unless you specify otherwise, properties and methods of a class are public. That is to say, they may be accessed in three possible situations −
                  </p>
                  <ul>
                    <li>From outside the class in which it is declared</li>
                    <li>From within the class in which it is declared</li>
                    <li>From within another class that implements the class in which it is declared</li>
                  </ul>
                  <p>Till now we have seen all members as public members. If you wish to limit the accessibility of the members of a class then you define class members as private or protected.</p>

                  <p>
                    <strong>Private Members: </strong>
                    By designating a member private, you limit its accessibility to the class in which it is declared. The private member cannot be referred to from classes that inherit the class in which it is declared and cannot be accessed from outside the class.
                  </p>
                  <p>
                  A class member can be made private by using private keyword infront of the member.
                  </p>
                  <pre>
                  class MyClass {
                    private $car = "skoda";
                    $driver = "SRK";
                    
                    function __construct($par) {
                        // Statements here run every time
                        // an instance of the class
                        // is created.
                    }
                    
                    function myPublicFunction() {
                        return("I'm visible!");
                    }
                    
                    private function myPrivateFunction() {
                        return("I'm  not visible outside!");
                    }
                  }
                  </pre>
                  <p>When MyClass class is inherited by another class using extends, myPublicFunction() will be visible, as will $driver. The extending class will not have any awareness of or access to myPrivateFunction and $car, because they are declared private.</p>

                  <p>
                    <strong>Protected Members: </strong>
                    A protected property or method is accessible in the class in which it is declared, as well as in classes that extend that class. Protected members are not available outside of those two kinds of classes. A class member can be made <strong>protected</strong> by using protected keyword in front of the member.
                  </p>
                  <p>Here is different version of MyClass −</p>
                  <pre>
                  class MyClass {
                    protected $car = "skoda";
                    $driver = "SRK";

                    function __construct($par) {
                        // Statements here run every time
                        // an instance of the class
                        // is created.
                    }
                    
                    function myPublicFunction() {
                        return("I'm visible!");
                    }
                    
                    protected function myPrivateFunction() {
                        return("I'm  visible in child class!");
                    }
                  }
                  </pre>

                  <p>
                    <strong>Interfaces: </strong>
                    Interfaces are defined to provide a common function names to the implementers. Different implementors can implement those interfaces according to their requirements. You can say, interfaces are skeletons which are implemented by developers.
                  </p>
                  <pre>
                  interface Mail {
                    public function sendMail();
                  }
                  </pre>
                  <p>Then, if another class implemented that interface, like this −</p>
                  <pre>
                  class Report implements Mail {
                    // sendMail() Definition goes here
                  }
                  </pre>
                  <p>
                    <strong>Constants</strong>
                    A constant is somewhat like a variable, in that it holds a value, but is really more like a function because a constant is immutable. Once you declare a constant, it does not change.
                  </p>
                  <p>Declaring one constant is easy, as is done in this version of MyClass −</p>
                  <pre>
                  class MyClass {
                    const requiredMargin = 1.7;
                    
                    function __construct($incomingValue) {
                        // Statements here run every time
                        // an instance of the class
                        // is created.
                    }
                  }
                  </pre>
                  <p>In this class, requiredMargin is a constant. It is declared with the keyword const, and under no circumstances can it be changed to anything other than 1.7. Note that the constant's name does not have a leading $, as variable names do.</p>

                  <p>
                    <strong>Abstract Classes: </strong>
                    An abstract class is one that cannot be instantiated, only inherited. You declare an abstract class with the keyword abstract, like this −
                  </p>
                  <p>When inheriting from an abstract class, all methods marked abstract in the parent's class declaration must be defined by the child; additionally, these methods must be defined with the same visibility.</p>
                  <pre>
                  abstract class MyAbstractClass {
                    abstract function myAbstractFunction() {
                    }
                  }
                  </pre>
                  <p>Note that function definitions inside an abstract class must also be preceded by the keyword abstract. It is not legal to have abstract function definitions inside a non-abstract class.</p>

                  <p>
                    <strong>Static Keyword: </strong>
                    Declaring class members or methods as static makes them accessible without needing an instantiation of the class. A member declared as static can not be accessed with an instantiated class object (though a static method can).
                  </p>
                  <pre>
                  class Foo {
                      public static $my_static = 'foo';
                      
                      public function staticValue() {
                        return self::$my_static;
                      }
                  }
                  
                  print Foo::$my_static . "\n";
                  $foo = new Foo();
                  
                  print $foo->staticValue() . "\n";
                  </pre>

                  <p>
                    <strong>Final Keyword: </strong>
                    PHP 5 introduces the final keyword, which prevents child classes from overriding a method by prefixing the definition with final. If the class itself is being defined final then it cannot be extended.
                  </p>
                  <p>Following example results in Fatal error: Cannot override final method BaseClass::moreTesting()</p>

                  <pre>
                  class BaseClass {
                      public function test() {
                        echo "BaseClass::test() called<br>";
                      }
                      
                      final public function moreTesting() {
                        echo "BaseClass::moreTesting() called<br>";
                      }
                  }
                  
                  class ChildClass extends BaseClass {
                      public function moreTesting() {
                        echo "ChildClass::moreTesting() called<br>";
                      }
                  }
                  </pre>

                  <p>
                    <strong>Calling parent constructors: </strong>
                    Instead of writing an entirely new constructor for the subclass, let's write it by calling the parent's constructor explicitly and then doing whatever is necessary in addition for instantiation of the subclass. Here's a simple example −
                  </p>

                  <pre>
                  class Name {
                    var $_firstName;
                    var $_lastName;
                    
                    function Name($first_name, $last_name) {
                        $this->_firstName = $first_name;
                        $this->_lastName = $last_name;
                    }
                    
                    function toString() {
                        return($this->_lastName .", " .$this->_firstName);
                    }
                  }
                  class NameSub1 extends Name {
                    var $_middleInitial;
                    
                    function NameSub1($first_name, $middle_initial, $last_name) {
                        Name::Name($first_name, $last_name);
                        $this->_middleInitial = $middle_initial;
                    }
                    
                    function toString() {
                        return(Name::toString() . " " . $this->_middleInitial);
                    }
                  }
                  </pre>

                  <p>
                  In this example, we have a parent class (Name), which has a two-argument constructor, and a subclass (NameSub1), which has a three-argument constructor. The constructor of NameSub1 functions by calling its parent constructor explicitly using the :: syntax (passing two of its arguments along) and then setting an additional field. Similarly, NameSub1 defines its non constructor toString() function in terms of the parent function that it overrides.
                  </p>
              </div>
            </div>
          </div>

          <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">AJAX</h4>
                  <p>
                    Ajax stands for Asynchronous Javascript And Xml. Ajax is just a means of loading data from the server and selectively updating parts of a web page without reloading the whole page.
                  </p>
                  <p>
                    Basically, what Ajax does is make use of the browser's built-in XMLHttpRequest (XHR) object to send and receive information to and from a web server asynchronously, in the background, without blocking the page or interfering with the user's experience.
                  </p>
                  <p>
                    <strong>
                      Understanding How Ajax Works : 
                    </strong>
                    To perform Ajax communication JavaScript uses a special object built into the browser—an XMLHttpRequest (XHR) object—to make HTTP requests to the server and receive data in response.
                  </p>
                  <p>All modern browsers (Chrome, Firefox, IE7+, Safari, Opera) support the XMLHttpRequest object.</p>
                  <p>The following illustrations demonstrate how Ajax communication works:</p>
                  <p>
                    <img src="./assets/images/ajax-illustration.png"/>
                  </p>
                  <p>
                  Since Ajax requests are usually asynchronous, execution of the script continues as soon as the Ajax request is sent, i.e. the browser will not halt the script execution until the server response comes back.
                  </p>
                  <p>In the following section we'll discuss each step involved in this process one by one:</p>
                  <br/>
                  <p>
                    <strong>Sending Request and Retrieving the Response</strong>
                    Before you perform Ajax communication between client and server, the first thing you must do is to instantiate an XMLHttpRequest object, as shown below:
                  </p>
                  <pre>var request = new XMLHttpRequest();</pre>
                  <p>Now, the next step in sending the request to the server is to instantiating the newly-created request object using the open() method of the XMLHttpRequest object.</p>

                  <p>The open() method typically accepts two parameters— the HTTP request method to use, such as "GET", "POST", etc., and the URL to send the request to, like this:</p>

                  <pre>request.open("GET", "info.txt"); -Or- request.open("POST", "add-user.php");</pre>

                  <p>And finally send the request to the server using the send() method of the XMLHttpRequest object.</p>

                  <pre>request.send(); -Or- request.send(body);</pre>

                  <p>The GET method is generally used to send small amount of data to the server. Whereas, the POST method is used to send large amount of data, such as form data.</p>

                  <p>In GET method, the data is sent as URL parameters. But, in POST method, the data is sent to the server as a part of the HTTP request body. Data sent through POST method will not visible in the URL.</p>

                  <p>In the following section we'll take a closer look at how Ajax requests actually works.</p>

                  <p>
                    <strong>Performing an Ajax GET Request:</strong>
                    The GET request is typically used to get or retrieve some kind of information from the server that doesn't require any manipulation or change in database, for example, fetching search results based on a term, fetching user details based on their id or name, and so on.
                  </p>
                  <p>The following example will show you how to make an Ajax GET request in JavaScript.</p>

                  <pre>
                  function displayFullName() {
                    // Creating the XMLHttpRequest object
                    var request = new XMLHttpRequest();

                    // Instantiating the request object
                    request.open("GET", "greet.php?fname=John&lname=Clark");

                    // Defining event listener for readystatechange event
                    request.onreadystatechange = function() {
                        // Check if the request is compete and was successful
                        if(this.readyState === 4 && this.status === 200) {
                            // Inserting the response from server into an HTML element
                            document.getElementById("result").innerHTML = this.responseText;
                        }
                    };

                    // Sending the request to the server
                    request.send();
                  }
                  </pre>
                  <p>When the request is asynchronous, the send() method returns immediately after sending the request. Therefore you must check where the response currently stands in its lifecycle before processing it using the readyState property of the XMLHttpRequest object.</p>

                  <p>The readyState is an integer that specifies the status of an HTTP request. Also, the function assigned to the onreadystatechange event handler called every time the readyState property changes. The possible values of the readyState property are summarized below.</p>

                  <div class="table-responsive">
                    <table class="table table-stripped">
                      <tbody>
                          <tr>
                            <th>Value</th>
                            <th>State</th>
                            <th>Description</th>
                          </tr>
                          <tr>
                            <td><code>0</code></td>
                            <td><code>UNSENT</code></td>
                            <td>An <code>XMLHttpRequest</code> object has been created, but the <code>open()</code> method hasn't been called yet (i.e. request not initialized).</td>
                          </tr>
                          <tr>
                            <td><code>1</code></td>
                            <td><code>OPENED</code></td>
                            <td>The <code>open()</code> method has been called (i.e. server connection established).</td>
                          </tr>
                          <tr>
                            <td><code>2</code></td>
                            <td><code>HEADERS_RECEIVED</code></td>
                            <td>The <code>send()</code> method has been called (i.e. server has received the request).</td>
                          </tr>
                          <tr>
                            <td><code>3</code></td>
                            <td><code>LOADING</code></td>
                            <td>The server is processing the request.</td>
                          </tr>
                          <tr>
                            <td><code>4</code></td>
                            <td><code>DONE</code></td>
                            <td>The request has been processed and the response is ready.</td>
                          </tr>
                      </tbody>
                    </table>
                  </div>

                  <p>
                  The status property returns the numerical HTTP status code of the XMLHttpRequest's response. Some of the common HTTP status codes are listed below:
                  </p>
                  <ul>
                    <li>200 — OK. The server successfully processed the request.</li>
                    <li>404 — Not Found. The server can't find the requested page.</li>
                    <li>503 — Service Unavailable. The server is temporarily unavailable.</li>
                  </ul>

                  <p>Here's the code from our server file that simply creates the full name of a person by joining their first name and last name and outputs a greeting message.</p>

                  <pre>
                  if(isset($_GET["fname"]) && isset($_GET["lname"])) {
                      $fname = htmlspecialchars($_GET["fname"]);
                      $lname = htmlspecialchars($_GET["lname"]);
                      
                      // Creating full name by joining first and last name
                      $fullname = $fname . " " . $lname;

                      // Displaying a welcome message
                      echo "Hello, $fullname! Welcome to our website.";
                  } else {
                      echo "Hi there! Welcome to our website.";
                  }
                  </pre>

                  <p>
                    <strong>Performing an Ajax POST Request:</strong>
                    The POST method is mainly used to submit a form data to the web server.
                  </p>
                  <p>The following example will show you how to submit form data to the server using Ajax.</p>

                  <pre>
                  function postComment() {
                    // Creating the XMLHttpRequest object
                    var request = new XMLHttpRequest();
                    
                    // Instantiating the request object
                    request.open("POST", "confirmation.php");
                    
                    // Defining event listener for readystatechange event
                    request.onreadystatechange = function() {
                        // Check if the request is compete and was successful
                        if(this.readyState === 4 && this.status === 200) {
                            // Inserting the response from server into an HTML element
                            document.getElementById("result").innerHTML = this.responseText;
                        }
                    };
                    
                    // Retrieving the form data
                    var myForm = document.getElementById("myForm");
                    var formData = new FormData(myForm);

                    // Sending the request to the server
                    request.send(formData);
                  }
                  </pre>
                  <p>
                  If you are not using the FormData object to send form data, for example, if you're sending the form data to the server in the query string format, i.e. request.send(key1=value1&key2=value2) then you need to explicitly set the request header using setRequestHeader() method, like this:
                  </p>
                  <pre>
                  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                  </pre>

                  <p>The setRequestHeader() method, must be called after calling open(), but before calling send().</p>

                  <p>Some common request headers are: application/x-www-form-urlencoded, multipart/form-data, application/json, application/xml, text/plain, text/html, and so on.</p>

                  <p>Here's the code of our server file that simply outputs the values submitted by the user.</p>

                  <pre>
                  if($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = htmlspecialchars(trim($_POST["name"]));
                    $comment = htmlspecialchars(trim($_POST["comment"]));
                    
                    // Check if form fields values are empty
                    if(!empty($name) && !empty($comment)) {
                        echo "<p>Hi, <b>$name</b>. Your comment has been received successfully.<p>";
                        echo "<p>Here's the comment that you've entered: <b>$comment</b></p>";
                    } else {
                        echo "<p>Please fill all the fields in the form!</p>";
                    }
                  } else {
                    echo "<p>Something went wrong. Please try again.</p>";
                  }
                  </pre>

                  <p>For security reasons, browsers do not allow you to make cross-domain Ajax requests. This means you can only make Ajax requests to URLs from the same domain as the original page, for example, if your application is running on the domain "mysite.com", you cannot make Ajax request to "othersite.com" or any other domain. This is commonly known as same origin policy.</p>
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

