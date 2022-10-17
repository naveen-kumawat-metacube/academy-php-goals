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
                <h4 class="card-title">MySQL Database</h4>
                <p>
                MySQL is an open-source relational database management system (RDBMS). It is the most popular database system used with PHP. MySQL is developed, distributed, and supported by Oracle Corporation. 
                </p>
                <ul>
                  <li>The data in a MySQL database are stored in tables which consists of columns and rows.</li>
                  <li>MySQL is a database system that runs on a server.</li>
                  <li>MySQL is ideal for both small and large applications.</li>
                  <li>MySQL is very fast, reliable, and easy to use database system.It uses standard SQL</li>
                  <li>MySQL compiles on a number of platforms.</li>
                </ul>
                <p>
                  <strong>Connecting to MySQL database using PHP: </strong> There are 3 ways in which we can connect to MySQl from PHP as listed above and described below:
                </p>

                <p>
                  <strong>Using MySQLi object-oriented procedure: </strong>We can use the MySQLi object-oriented procedure to establish a connection to MySQL database from a PHP script. 
                </p>
                <pre>
                $servername = "localhost";
                $username = "username";
                $password = "password";

                // Creating connection
                $conn = new mysqli($servername, $username, $password);

                // Checking connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
                echo "Connected successfully";
                </pre>
                <p>Explanation: We can create an instance of the mysqli class providing all the necessary details required to establish the connection such as host, username, password etc. If the instance is created successfully then the connection is successful otherwise there is some error in establishing connection. </p>

                <p>
                  <strong>Using MySQLi procedural procedure: </strong>There is also a procedural approach of MySQLi to establish a connection to MySQL database from a PHP script as described below. 
                </p>
                <pre>
                $servername = "localhost";
                $username = "username";
                $password = "password";

                // Creating connection
                $conn = mysqli_connect($servername, $username, $password);

                // Checking connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                echo "Connected successfully";
                </pre>
                <p>Explanation: In MySQLi procedural approach instead of creating an instance we can use the mysqli_connect() function available in PHP to establish a connection. This function takes the information as arguments such as host, username , password , database name etc. This function returns MySQL link identifier on successful connection or FALSE when failed to establish a connection. </p>

                <p>
                  <strong>Using PDO procedure: </strong>PDO stands for PHP Data Objects. That is, in this method we connect to the database using data objects in PHP as described below: 
                </p>
                <pre>
                $servername = "localhost";
                $username = "username";
                $password = "password";

                try {
                    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
                    // setting the PDO error mode to exception
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    echo "Connected successfully"; 
                    }
                catch(PDOException $e)
                    {
                    echo "Connection failed: " . $e->getMessage();
                    }
                </pre>
                <p>Explanation:The exception class in PDO is used to handle any problems that may occur in our database queries. If an exception is thrown within the try{ } block, the script stops executing and flows directly to the first catch(){ } block. </p>

                <p>
                  <strong>Closing A Connection: </strong>When we establish a connection to MySQL database from a PHP script , we should also disconnect or close the connection when our work is finished. Here we have described the syntax of closing the connection to a MySQL database in all 3 methods described above. We have assumed that the reference to the connection is stored in $conn variable.
                </p>
                <ul>
                  <li><strong>Using MySQLi object oriented procedure </strong> $conn->close();</li>
                  <li><strong>Using MySQLi procedural procedure </strong> mysqli_close($conn);</li>
                  <li><strong>Using PDO procedure </strong> $conn = null;</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">DDL Statements</h4>
                  <p>
                  The DDL Commands in Structured Query Language are used to create and modify the schema of the database and its objects. The syntax of DDL commands is predefined for describing the data. The commands of Data Definition Language deal with how the data should exist in the database.
                  </p>
                  <p><strong>Following are the five DDL commands in SQL:</strong></p>
                  <ul>
                    <li>CREATE Command</li>
                    <li>DROP Command</li>
                    <li>ALTER Command</li>
                    <li>TRUNCATE Command</li>
                    <li>RENAME Command</li>
                  </ul>
                  <p>
                    <strong>CREATE Command</strong>: CREATE is a DDL command used to create databases, tables, triggers and other database objects.
                  </p>
                  <p><strong>Create a Database:</strong></p>
                  <pre>
                  CREATE Database Database_Name;  

                  Create Database Books;  
                  </pre>

                  <p><strong>Create a Table:</strong></p>
                  <pre>
                  CREATE TABLE table_name    
                  (  
                    column_Name1 data_type ( size of the column ) ,    
                    column_Name2 data_type ( size of the column) ,    
                    column_Name3 data_type ( size of the column) ,    
                    ...    
                    column_NameN data_type ( size of the column )  
                  ) ;   

                  CREATE TABLE Student   
                  (  
                    Roll_No. Int ,    
                    First_Name Varchar (20) ,    
                    Last_Name Varchar (20) ,    
                    Age Int ,  
                    Marks Int ,   
                  ) ;    
                  </pre>

                  <p><strong>Create a new Index:</strong></p>
                  <pre>
                  CREATE INDEX Name_of_Index ON Name_of_Table (column_name_1 , column_name_2 ,  … . , column_name_N);  
                  </pre>

                  <p><strong>Create a new Trigger:</strong></p>
                  <pre>
                  CREATE TRIGGER [trigger_name]   
                    [ BEFORE | AFTER ]    
                    { INSERT | UPDATE | DELETE }    
                  ON [table_name] ; 
                  </pre>

                  <p><strong>DROP Command: </strong>DROP is a DDL command used to delete/remove the database objects from the SQL database. We can easily remove the entire table, view, or index from the database using this DDL command.</p>

                  <p><strong>Remove a Database:</strong></p>
                  <pre>
                  DROP DATABASE Database_Name;  

                  DROP DATABASE Books;  
                  </pre>

                  <p><strong>Remove a Table:</strong></p>
                  <pre>
                  DROP TABLE Table_Name;

                  DROP TABLE Student;  
                  </pre>

                  <p><strong>Remove an Index:</strong></p>
                  <pre>
                  DROP INDEX Index_Name;  

                  DROP INDEX Index_city;
                  </pre>


                  <p><strong>ALTER Command: </strong>ALTER is a DDL command which changes or modifies the existing structure of the database, and it also changes the schema of database objects.</p>
                  <p>We can also add and drop constraints of the table using the ALTER command.</p>
                  
                  <p><strong>Add a New Field in the Table</strong></p>
                  <pre>
                  ALTER TABLE name_of_table ADD column_name column_definition;  

                  ALTER TABLE Student ADD Father's_Name Varchar(60);
                  </pre>

                  <p><strong>Remove a Field from the Table</strong></p>
                  <pre>
                  ALTER TABLE name_of_table DROP Column_Name_1 , column_Name_2 , ….., column_Name_N;

                  ALTER TABLE StudentDROP Age, Marks;
                  </pre>

                  <p><strong>Modify the column of the table</strong></p>
                  <pre>
                  ALTER TABLE table_name MODIFY ( column_name column_datatype(size));  

                  ALTER TABLE table_name MODIFY ( Last_Name varchar(25));  
                  </pre>

                  <p><strong>TRUNCATE Command: </strong>TRUNCATE is another DDL command which deletes or removes all the records from the table.</p>
                  <p>This command also removes the space allocated for storing the table records.</p>
                  <pre>
                  TRUNCATE TABLE Table_Name;  

                  TRUNCATE TABLE Student;  
                  </pre>
                  <p>The above query successfully removed all the records from the student table.</p>

                  <p><strong>RENAME Command: </strong>RENAME is a DDL command which is used to change the name of the database table.</p>
                  <pre>
                  RENAME TABLE Old_Table_Name TO New_Table_Name;   

                  RENAME TABLE Student TO Student_Details ;  
                  </pre>
                  <p>This query changes the name of the table from Student to Student_Details.</p>
              </div>
            </div>
          </div>


          <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">DML Statements</h4>
                  <p>DML is an abbreviation of Data Manipulation Language.</p>
                  <p>
                  The DML commands in Structured Query Language change the data present in the SQL database. We can easily access, store, modify, update and delete the existing records from the database using DML commands.
                  </p>
                  <p><strong>Following are the four main DML commands in SQL:</strong></p>
                  <ul>
                    <li>SELECT Command</li>
                    <li>INSERT Command</li>
                    <li>UPDATE Command</li>
                    <li>DELETE Command</li>
                  </ul>

                  <p>
                    <strong>SELECT Command: </strong> SELECT is the most important data manipulation command in Structured Query Language. The SELECT command shows the records of the specified table. It also shows the particular record of a particular column by using the WHERE clause.
                  </p>
                  <pre>
                  SELECT column_Name_1, column_Name_2, ….., column_Name_N FROM Name_of_table;  
                  </pre>
                  <p>Here, column_Name_1, column_Name_2, ….., column_Name_N are the names of those columns whose data we want to retrieve from the table.</p>
                  <p>If we want to retrieve the data from all the columns of the table, we have to use the following SELECT command:</p>
                  <pre>
                  SELECT * FROM table_name;  

                  SELECT * FROM Student;  
                  </pre>
                  <p>This SQL statement displays the following values of the student table:</p>
                  <div class="table-responsive">
                    <table class="table table-stripped">
                      <tbody>
                          <tr>
                            <th>Student_ID</th>
                            <th>Student_Name</th>
                            <th>Student_Marks</th>
                          </tr>
                          <tr>
                            <td>BCA1001</td>
                            <td>Abhay</td>
                            <td>85</td>
                          </tr>
                          <tr>
                            <td>BCA1002</td>
                            <td>Anuj</td>
                            <td>75</td>
                          </tr>
                          <tr>
                            <td>BCA1003</td>
                            <td>Bheem</td>
                            <td>60</td>
                          </tr>
                          <tr>
                            <td>BCA1004</td>
                            <td>Ram</td>
                            <td>79</td>
                          </tr>
                          <tr>
                            <td>BCA1005</td>
                            <td>Sumit</td>
                            <td>80</td>
                          </tr>
                      </tbody>
                    </table>
                  </div>
                  <p>If you want to access all the records of those students whose marks is 80 from the above table, then you have to write the following DML command in SQL:</p>

                  <pre>SELECT * FROM Student WHERE Stu_Marks = 80;</pre>
                  
                  <div class="table-responsive">
                    <table class="table table-stripped">
                      <tbody>
                          <tr>
                            <th>Student_ID</th>
                            <th>Student_Name</th>
                            <th>Student_Marks</th>
                          </tr>
                          <tr>
                            <td>BCA1005</td>
                            <td>Sumit</td>
                            <td>80</td>
                          </tr>
                      </tbody>
                    </table>
                  </div>

                  <p>
                    <strong>INSERT Command: </strong>INSERT is another most important data manipulation command in Structured Query Language, which allows users to insert data in database tables.
                  </p>
                  <pre>
                  INSERT INTO TABLE_NAME ( column_Name1 , column_Name2 , column_Name3 , .... column_NameN )  VALUES (value_1, value_2, value_3, .... value_N ) ;   
                  </pre>

                  <p>This example describes how to insert the record in the database table.</p>
                  <p>Let's take the following student table, which consists of only 2 records of the student.</p>
                  <div class="table-responsive">
                    <table class="table table-stripped">
                      <tbody>
                          <tr>
                            <th>Stu_Id</th>
                            <th>Stu_Name</th>
                            <th>Stu_Marks</th>
                            <th>Stu_Age</th>
                          </tr>
                          <tr>
                            <td>101</td>
                            <td>Ramesh</td>
                            <td>92</td>
                            <td>20</td>
                          </tr>
                          <tr>
                            <td>201</td>
                            <td>Jatin</td>
                            <td>83</td>
                            <td>19</td>
                          </tr>
                      </tbody>
                    </table>
                  </div>
                  <p>Suppose, you want to insert a new record into the student table. For this, you have to write the following DML INSERT command:</p>
                  <pre>
                  INSERT INTO Student (Stu_id, Stu_Name, Stu_Marks, Stu_Age) VALUES (104, Anmol, 89, 19);  
                  </pre>

                  <p>
                    <strong>UPDATE Command: </strong>UPDATE is another most important data manipulation command in Structured Query Language, which allows users to update or modify the existing data in database tables.
                  </p>
                  <pre>
                  UPDATE Table_name SET [column_name1= value_1, ….., column_nameN = value_N] WHERE CONDITION;  
                  </pre>
                  <p>Here, 'UPDATE', 'SET', and 'WHERE' are the SQL keywords, and 'Table_name' is the name of the table whose values you want to update.</p>

                  <p>This example describes how to update the value of a single field.</p>
                  <p>Let's take a Product table consisting of the following records:</p>
                  <div class="table-responsive">
                    <table class="table table-stripped">
                        <tbody>
                          <tr>
                            <th>Product_Id</th>
                            <th>Product_Name</th>
                            <th>Product_Price</th>
                            <th>Product_Quantity</th>
                          </tr>
                          <tr>
                            <td>P101</td>
                            <td>Chips</td>
                            <td>20</td>
                            <td>20</td>
                          </tr>
                          <tr>
                            <td>P102</td>
                            <td>Chocolates</td>
                            <td>60</td>
                            <td>40</td>
                          </tr>
                          <tr>
                            <td>P103</td>
                            <td>Maggi</td>
                            <td>75</td>
                            <td>5</td>
                          </tr>
                          <tr>
                            <td>P201</td>
                            <td>Biscuits</td>
                            <td>80</td>
                            <td>20</td>
                          </tr>
                          <tr>
                            <td>P203</td>
                            <td>Namkeen</td>
                            <td>40</td>
                            <td>50</td>
                          </tr>
                      </tbody>
                    </table>
                  </div>
                  <p>Suppose, you want to update the Product_Price of the product whose Product_Id is P102. To do this, you have to write the following DML UPDATE command:</p>
                  <pre>
                  UPDATE Product SET Product_Price = 80 WHERE Product_Id = 'P102' ;  
                  </pre>
                  <p>This example describes how to update the value of multiple fields of the database table.</p>
                  <p>Let's take a Student table consisting of the following records:</p>

                  <div class="table-responsive">
                    <table class="table table-stripped">
                      <tbody>
                        <tr>
                            <th>Stu_Id</th>
                            <th>Stu_Name</th>
                            <th>Stu_Marks</th>
                            <th>Stu_Age</th>
                        </tr>
                        <tr>
                            <td>101</td>
                            <td>Ramesh</td>
                            <td>92</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>201</td>
                            <td>Jatin</td>
                            <td>83</td>
                            <td>19</td>
                        </tr>
                        <tr>
                            <td>202</td>
                            <td>Anuj</td>
                            <td>85</td>
                            <td>19</td>
                        </tr>
                        <tr>
                            <td>203</td>
                            <td>Monty</td>
                            <td>95</td>
                            <td>21</td>
                        </tr>
                        <tr>
                            <td>102</td>
                            <td>Saket</td>
                            <td>65</td>
                            <td>21</td>
                        </tr>
                        <tr>
                            <td>103</td>
                            <td>Sumit</td>
                            <td>78</td>
                            <td>19</td>
                        </tr>
                        <tr>
                            <td>104</td>
                            <td>Ashish</td>
                            <td>98</td>
                            <td>20</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <p>Suppose, you want to update Stu_Marks and Stu_Age of that student whose Stu_Id is 103 and 202. To do this, you have to write the following DML Update command:</p>
                  <pre>
                  UPDATE Student SET Stu_Marks = 80, Stu_Age = 21 WHERE Stu_Id = 103 AND Stu_Id = 202;  
                  </pre>

                  <p>
                    <strong>DELETE Command: </strong>DELETE is a DML command which allows SQL users to remove single or multiple existing records from the database tables.
                  </p>
                  <p>This command of Data Manipulation Language does not delete the stored data permanently from the database. We use the WHERE clause with the DELETE command to select specific rows from the table.</p>
                  <pre>
                  DELETE FROM Table_Name WHERE condition;  
                  </pre>

                  <p>This example describes how to delete a single record from the table.</p>

                  <div class="table-responsive">
                    <table class="table table-stripped">
                      <tbody>
                        <tr>
                            <th>Product_Id</th>
                            <th>Product_Name</th>
                            <th>Product_Price</th>
                            <th>Product_Quantity</th>
                        </tr>
                        <tr>
                            <td>P101</td>
                            <td>Chips</td>
                            <td>20</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>P102</td>
                            <td>Chocolates</td>
                            <td>60</td>
                            <td>40</td>
                        </tr>
                        <tr>
                            <td>P103</td>
                            <td>Maggi</td>
                            <td>75</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>P201</td>
                            <td>Biscuits</td>
                            <td>80</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>P203</td>
                            <td>Namkeen</td>
                            <td>40</td>
                            <td>50</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <p>Suppose, you want to delete that product from the Product table whose Product_Id is P203. To do this, you have to write the following DML DELETE command:</p>
                  <pre>
                  DELETE FROM Product WHERE Product_Id = 'P202' ; 
                  </pre>
              </div>
            </div>
          </div>


          <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Database ER-Diagram</h4>
                  <p>ER Diagram is known as Entity-Relationship Diagram, it is used to analyze  the structure of the Database. It shows relationships between entities and their attributes. An ER Model provides a means of communication.</p>
                  <p>The Library Management System database keeps track of readers with the following considerations –</p>
                  <ul>
                    <li>
                      The system keeps track of the staff with a single point authentication system comprising login Id and password.
                    </li>
                    <li>
                      Staff maintains the book catalog with its ISBN, Book title, price(in INR), category(novel, general, story), edition, author Number and details.
                    </li>
                    <li>
                    A publisher has publisher Id, Year when the book was published, and name of the book.
                    </li>
                    <li>
                    Readers are registered with their user_id, email, name (first name, last name), Phone no (multiple entries allowed), communication address. The staff keeps track of readers.
                    </li>
                    <li>
                    Readers can return/reserve books that stamps with issue date and return date. If not returned within the prescribed time period, it may have a due date too.
                    </li>
                    <li>
                    Staff also generate reports that has readers id, registration no of report, book no and return/issue info.
                    </li>
                  </ul>
                  <div class="row">
                    <img src="./assets/images/er.png" class="img-fluid"/>
                  </div>

                  <p>
                  This Library ER diagram illustrates key information about the Library, including entities such as staff, readers, books, publishers, reports, and authentication system. It allows for understanding the relationships between entities. 
                  </p>

                  <p>Entities and their Attributes –</p>
                  <ul>
                    <li>
                      <strong>Book Entity : </strong>
                      It has authno, isbn number, title, edition, category, price. ISBN is the Primary Key for Book Entity.
                    </li>

                    <li>
                      <strong>Reader Entity : </strong>
                      It has UserId, Email, address, phone no, name. Name is composite attribute of firstname and lastname. Phone no is multi valued attribute. UserId is the Primary Key for Readers entity.
                    </li>

                    <li>
                      <strong>Publisher Entity : </strong>
                      It has PublisherId, Year of publication, name. PublisherID is the Primary Key.
                    </li>

                    <li>
                      <strong>Authentication System Entity : </strong>
                      It has LoginId and password with LoginID as Primary Key.
                    </li>

                    <li>
                      <strong>Reports Entity : </strong>
                      It has UserId, Reg_no, Book_no, Issue/Return date. Reg_no is the Primary Key of reports entity.
                    </li>

                    <li>
                      <strong>Staff Entity : </strong>
                      It has name and staff_id with staff_id as Primary Key.
                    </li>

                    <li>
                      <strong>Reserve/Return Relationship Set : </strong>
                      It has three attributes: Reserve date, Due date, Return date.
                    </li>
                  </ul>

                  <p>
                    <strong>Relationships between Entities – </strong>
                  </p>
                  <ul>
                    <li>
                    A reader can reserve N books but one book can be reserved by only one reader. The relationship 1:N.
                    </li>
                    <li>
                    A publisher can publish many books but a book is published by only one publisher. The relationship 1:N.
                    </li>
                    <li>
                    Staff keeps track of readers. The relationship is M:N.
                    </li>
                    <li>
                    Staff maintains multiple reports. The relationship 1:N.
                    </li>
                    <li>
                    Staff maintains multiple Books. The relationship 1:N.
                    </li>
                    <li>
                    Authentication system provides login to multiple staffs. The relation is 1:N.
                    </li>
                  </ul>
              </div>
            </div>
          </div>


          <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Database Normalization</h4>
                  <p>
                  Normalization is the process of organizing the data in the database.
                  </p>
                  <p>
                  Normalization is used to minimize the redundancy from a relation or set of relations. It is also used to eliminate undesirable characteristics like Insertion, Update, and Deletion Anomalies.
                  </p>
                  <p>
                  Normalization divides the larger table into smaller and links them using relationships.
                  </p>
                  <p>
                  The normal form is used to reduce redundancy from the database table.
                  </p>

                  <p>
                    <strong>Why do we need Normalization?</strong>
                    The main reason for normalizing the relations is removing these anomalies. Failure to eliminate anomalies leads to data redundancy and can cause data integrity and other problems as the database grows. Normalization consists of a series of guidelines that helps to guide you in creating a good database structure.
                  </p>

                  <p>Data modification anomalies can be categorized into three types:</p>
                  <ul>
                    <li>
                      <strong>Insertion Anomaly: </strong>
                      Insertion Anomaly refers to when one cannot insert a new tuple into a relationship due to lack of data.
                    </li>
                    <li>
                      <strong>Deletion Anomaly: </strong>
                      The delete anomaly refers to the situation where the deletion of data results in the unintended loss of some other important data.
                    </li>
                    <li>
                      <strong>Updatation Anomaly: </strong>
                      The update anomaly is when an update of a single data value requires multiple rows of data to be updated.
                    </li>
                  </ul>

                  <p>
                    <strong>Types of Normal Forms:
                    Normalization works through a series of stages called Normal forms. The normal forms apply to individual relations. The relation is said to be in particular normal form if it satisfies constraints.
                    </strong>
                  </p>
                  <p>
                    <strong>Following are the various types of Normal forms:</strong>
                    <img src="./assets/images/dbms-normalization.png"/>
                  </p>

                  <div class="table-responsive">
                    <table class="table table-stripped">
                      <tbody>
                          <tr>
                            <th>Normal Form</th>
                            <th>Description</th>
                          </tr>
                          <tr>
                            <td><a href="https://www.javatpoint.com/dbms-first-normal-form">1NF</a></td>
                            <td>A relation is in 1NF if it contains an atomic value.</td>
                          </tr>
                          <tr>
                            <td><a href="https://www.javatpoint.com/dbms-second-normal-form">2NF</a></td>
                            <td>A relation will be in 2NF if it is in 1NF and all non-key attributes are fully functional dependent on the primary key.</td>
                          </tr>
                          <tr>
                            <td><a href="https://www.javatpoint.com/dbms-third-normal-form">3NF</a></td>
                            <td>A relation will be in 3NF if it is in 2NF and no transition dependency exists.</td>
                          </tr>
                          <tr>
                            <td>BCNF</td>
                            <td>A stronger definition of 3NF is known as Boyce Codd's normal form.</td>
                          </tr>
                          <tr>
                            <td><a href="https://www.javatpoint.com/dbms-forth-normal-form">4NF</a></td>
                            <td>A relation will be in 4NF if it is in Boyce Codd's normal form and has no multi-valued dependency.</td>
                          </tr>
                          <tr>
                            <td><a href="https://www.javatpoint.com/dbms-fifth-normal-form">5NF</a></td>
                            <td>A relation is in 5NF. If it is in 4NF and does not contain any join dependency, joining should be lossless.</td>
                          </tr>
                      </tbody>
                    </table>
                  </div>
                  <p><strong>Advantages of Normalization</strong></p>
                  <ul>
                    <li>
                    Normalization helps to minimize data redundancy.
                    </li>
                    <li>
                    Greater overall database organization.
                    </li>
                    <li>
                    Data consistency within the database.
                    </li>
                    <li>
                    Much more flexible database design.
                    </li>
                    <li>
                    Enforces the concept of relational integrity.
                    </li>
                  </ul>

                  <p><strong>Disadvantages of Normalization</strong></p>
                  <ul>
                    <li>
                    You cannot start building the database before knowing what the user needs.
                    </li>
                    <li>
                    The performance degrades when normalizing the relations to higher normal forms, i.e., 4NF, 5NF.
                    </li>
                    <li>
                    It is very time-consuming and difficult to normalize relations of a higher degree.
                    </li>
                    <li>
                    Careless decomposition may lead to a bad database design, leading to serious problems.
                    </li>
                  </ul>

                  <p>
                    <strong>First Normal Form (1NF): </strong>
                    A relation will be 1NF if it contains an atomic value.
                  </p>
                  <p>
                  It states that an attribute of a table cannot hold multiple values. It must hold only single-valued attribute.
                  </p>
                  <p>
                  First normal form disallows the multi-valued attribute, composite attribute, and their combinations.
                  </p>
                  <p>
                    <strong>Example: Relation EMPLOYEE is not in 1NF because of multi-valued attribute EMP_PHONE.</strong>
                  </p>
                  <div class="table-responsive">
                    <strong>EMPLOYEE table:</strong>
                    <table class="table table-stripped">
                      <tbody>
                          <tr>
                            <th>EMP_ID</th>
                            <th>EMP_NAME</th>
                            <th>EMP_PHONE</th>
                            <th>EMP_STATE</th>
                          </tr>
                          <tr>
                            <td>14</td>
                            <td>John</td>
                            <td>7272826385,<br>
                                9064738238
                            </td>
                            <td>UP</td>
                          </tr>
                          <tr>
                            <td>20</td>
                            <td>Harry</td>
                            <td>8574783832</td>
                            <td>Bihar</td>
                          </tr>
                          <tr>
                            <td>12</td>
                            <td>Sam</td>
                            <td>7390372389,<br>
                                8589830302
                            </td>
                            <td>Punjab</td>
                          </tr>
                      </tbody>
                    </table>
                  </div>
                  <p>
                  The decomposition of the EMPLOYEE table into 1NF has been shown below:
                  </p>
                  <div class="table-responsive">
                    <table class="table table-stripped">
                      <tbody>
                        <tr>
                          <th>EMP_ID</th>
                          <th>EMP_NAME</th>
                          <th>EMP_PHONE</th>
                          <th>EMP_STATE</th>
                        </tr>
                        <tr>
                          <td>14</td>
                          <td>John</td>
                          <td>7272826385</td>
                          <td>UP</td>
                        </tr>
                        <tr>
                          <td>14</td>
                          <td>John</td>
                          <td>9064738238</td>
                          <td>UP</td>
                        </tr>
                        <tr>
                          <td>20</td>
                          <td>Harry</td>
                          <td>8574783832</td>
                          <td>Bihar</td>
                        </tr>
                        <tr>
                          <td>12</td>
                          <td>Sam</td>
                          <td>7390372389</td>
                          <td>Punjab</td>
                        </tr>
                        <tr>
                          <td>12</td>
                          <td>Sam</td>
                          <td>8589830302</td>
                          <td>Punjab</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <p>
                    <strong>Second Normal Form (2NF): </strong>
                    In the 2NF, relational must be in 1NF.
                  </p>
                  <p>
                  In the second normal form, all non-key attributes are fully functional dependent on the primary key
                  </p>
                  <p>
                    <strong>Example: Let's assume, a school can store the data of teachers and the subjects they teach. In a school, a teacher can teach more than one subject.</strong>
                  </p>
                  <div class="table-responsive">
                    <strong>TEACHER table</strong>
                    <table class="table table-stripped">
                      <tbody>
                          <tr>
                            <th>TEACHER_ID</th>
                            <th>SUBJECT</th>
                            <th>TEACHER_AGE</th>
                          </tr>
                          <tr>
                            <td>25</td>
                            <td>Chemistry</td>
                            <td>30</td>
                          </tr>
                          <tr>
                            <td>25</td>
                            <td>Biology</td>
                            <td>30</td>
                          </tr>
                          <tr>
                            <td>47</td>
                            <td>English</td>
                            <td>35</td>
                          </tr>
                          <tr>
                            <td>83</td>
                            <td>Math</td>
                            <td>38</td>
                          </tr>
                          <tr>
                            <td>83</td>
                            <td>Computer</td>
                            <td>38</td>
                          </tr>
                      </tbody>
                    </table>
                  </div>
                  <p>
                  In the given table, non-prime attribute TEACHER_AGE is dependent on TEACHER_ID which is a proper subset of a candidate key. That's why it violates the rule for 2NF.
                  </p>
                  <p>
                  To convert the given table into 2NF, we decompose it into two tables:
                  </p>
                  <div class="table-responsive">
                    <strong>TEACHER_DETAIL table</strong>
                    <table class="table table-stripped">
                      <tbody>
                        <tr>
                            <th>TEACHER_ID</th>
                            <th>TEACHER_AGE</th>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>30</td>
                        </tr>
                        <tr>
                            <td>47</td>
                            <td>35</td>
                        </tr>
                        <tr>
                            <td>83</td>
                            <td>38</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div class="table-responsive">
                    <strong>TEACHER_SUBJECT table</strong>
                    <table class="table table-stripped">
                      <tbody>
                        <tr>
                            <th>TEACHER_ID</th>
                            <th>SUBJECT</th>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>Chemistry</td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>Biology</td>
                        </tr>
                        <tr>
                            <td>47</td>
                            <td>English</td>
                        </tr>
                        <tr>
                            <td>83</td>
                            <td>Math</td>
                        </tr>
                        <tr>
                            <td>83</td>
                            <td>Computer</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <p>
                    <strong>Third Normal Form (3NF): </strong>
                    A relation will be in 3NF if it is in 2NF and not contain any transitive partial dependency.
                  </p>
                  <p>
                  3NF is used to reduce the data duplication. It is also used to achieve the data integrity.
                  </p>
                  <p>
                  If there is no transitive dependency for non-prime attributes, then the relation must be in third normal form.
                  </p>

                  <p>
                  A relation is in third normal form if it holds atleast one of the following conditions for every non-trivial function dependency X → Y.
                  </p>
                  <ul>
                    <li>X is a super key.</li>
                    <li>Y is a prime attribute, i.e., each element of Y is part of some candidate key.</li>
                  </ul>

                  <div class="table-responsive">
                    <strong>EMPLOYEE_DETAIL table: </strong>
                    <table class="table table-stripped">
                      <tbody>
                          <tr>
                            <th>EMP_ID</th>
                            <th>EMP_NAME</th>
                            <th>EMP_ZIP</th>
                            <th>EMP_STATE</th>
                            <th>EMP_CITY</th>
                          </tr>
                          <tr>
                            <td>222</td>
                            <td>Harry</td>
                            <td>201010</td>
                            <td>UP</td>
                            <td>Noida</td>
                          </tr>
                          <tr>
                            <td>333</td>
                            <td>Stephan</td>
                            <td>02228</td>
                            <td>US</td>
                            <td>Boston</td>
                          </tr>
                          <tr>
                            <td>444</td>
                            <td>Lan</td>
                            <td>60007</td>
                            <td>US</td>
                            <td>Chicago</td>
                          </tr>
                          <tr>
                            <td>555</td>
                            <td>Katharine</td>
                            <td>06389</td>
                            <td>UK</td>
                            <td>Norwich</td>
                          </tr>
                          <tr>
                            <td>666</td>
                            <td>John</td>
                            <td>462007</td>
                            <td>MP</td>
                            <td>Bhopal</td>
                          </tr>
                      </tbody>
                    </table>
                  </div>
                  <p>
                    <strong>Super key in the table above:</strong>
                  </p>
                  <pre>{EMP_ID}, {EMP_ID, EMP_NAME}, {EMP_ID, EMP_NAME, EMP_ZIP}....so on  </pre>
                  <p><strong>Candidate key: </strong>{EMP_ID}</p>
                  <p><strong>Non-prime attributes: </strong>In the given table, all attributes except EMP_ID are non-prime.</p>
                  <p>
                  Here, EMP_STATE & EMP_CITY dependent on EMP_ZIP and EMP_ZIP dependent on EMP_ID. The non-prime attributes (EMP_STATE, EMP_CITY) transitively dependent on super key(EMP_ID). It violates the rule of third normal form.
                  </p>
                  <p>
                  That's why we need to move the EMP_CITY and EMP_STATE to the new <EMPLOYEE_ZIP> table, with EMP_ZIP as a Primary key.
                  </p>

                  <div class="table-responsive">
                    <strong>EMPLOYEE table: </strong>
                    <table class="table table-stripped">
                      <tbody>
                        <tr>
                            <th>EMP_ID</th>
                            <th>EMP_NAME</th>
                            <th>EMP_ZIP</th>
                        </tr>
                        <tr>
                            <td>222</td>
                            <td>Harry</td>
                            <td>201010</td>
                        </tr>
                        <tr>
                            <td>333</td>
                            <td>Stephan</td>
                            <td>02228</td>
                        </tr>
                        <tr>
                            <td>444</td>
                            <td>Lan</td>
                            <td>60007</td>
                        </tr>
                        <tr>
                            <td>555</td>
                            <td>Katharine</td>
                            <td>06389</td>
                        </tr>
                        <tr>
                            <td>666</td>
                            <td>John</td>
                            <td>462007</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div class="table-responsive">
                    <strong>EMPLOYEE_ZIP table: </strong>
                    <table class="table table-stripped">
                      <tbody>
                        <tr>
                            <th>EMP_ZIP</th>
                            <th>EMP_STATE</th>
                            <th>EMP_CITY</th>
                        </tr>
                        <tr>
                            <td>201010</td>
                            <td>UP</td>
                            <td>Noida</td>
                        </tr>
                        <tr>
                            <td>02228</td>
                            <td>US</td>
                            <td>Boston</td>
                        </tr>
                        <tr>
                            <td>60007</td>
                            <td>US</td>
                            <td>Chicago</td>
                        </tr>
                        <tr>
                            <td>06389</td>
                            <td>UK</td>
                            <td>Norwich</td>
                        </tr>
                        <tr>
                            <td>462007</td>
                            <td>MP</td>
                            <td>Bhopal</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <p>
                    <strong>Boyce Codd normal form (BCNF): </strong>
                    BCNF is the advance version of 3NF. It is stricter than 3NF.
                  </p>
                  <p>
                  A table is in BCNF if every functional dependency X → Y, X is the super key of the table.
                  </p>
                  <p>For BCNF, the table should be in 3NF, and for every FD, LHS is super key.</p>

                  <p><strong>Example: </strong> Let's assume there is a company where employees work in more than one department.0</p>

                  <div class="table-responsive">
                    <strong>EMPLOYEE table: </strong>
                    <table class="table table-stripped">
                      <tbody>
                        <tr>
                            <th>EMP_ID</th>
                            <th>EMP_COUNTRY</th>
                            <th>EMP_DEPT</th>
                            <th>DEPT_TYPE</th>
                            <th>EMP_DEPT_NO</th>
                        </tr>
                        <tr>
                            <td>264</td>
                            <td>India</td>
                            <td>Designing</td>
                            <td>D394</td>
                            <td>283</td>
                        </tr>
                        <tr>
                            <td>264</td>
                            <td>India</td>
                            <td>Testing</td>
                            <td>D394</td>
                            <td>300</td>
                        </tr>
                        <tr>
                            <td>364</td>
                            <td>UK</td>
                            <td>Stores</td>
                            <td>D283</td>
                            <td>232</td>
                        </tr>
                        <tr>
                            <td>364</td>
                            <td>UK</td>
                            <td>Developing</td>
                            <td>D283</td>
                            <td>549</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <p><strong>In the above table Functional dependencies are as follows:</strong></p>
                  <pre>
                  EMP_ID  →  EMP_COUNTRY  
                  EMP_DEPT  →   {DEPT_TYPE, EMP_DEPT_NO}  
                  </pre>
                  <p>
                    <strong>Candidate key: {EMP-ID, EMP-DEPT}</strong>
                  </p>
                  <p>The table is not in BCNF because neither EMP_DEPT nor EMP_ID alone are keys.</p>
                  <p>To convert the given table into BCNF, we decompose it into three tables:</p>

                  <div class="table-responsive">
                    <strong>EMP_COUNTRY table: </strong>
                    <table class="table table-stripped">
                      <tbody>
                        <tr>
                            <th>EMP_ID</th>
                            <th>EMP_COUNTRY</th>
                        </tr>
                        <tr>
                            <td>264</td>
                            <td>India</td>
                        </tr>
                        <tr>
                            <td>264</td>
                            <td>India</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div class="table-responsive">
                    <stron0g>EMP_DEPT table: </stron0g>
                    <table class="table table-stripped">
                      <tbody>
                        <tr>
                            <th>EMP_DEPT</th>
                            <th>DEPT_TYPE</th>
                            <th>EMP_DEPT_NO</th>
                        </tr>
                        <tr>
                            <td>Designing</td>
                            <td>D394</td>
                            <td>283</td>
                        </tr>
                        <tr>
                            <td>Testing</td>
                            <td>D394</td>
                            <td>300</td>
                        </tr>
                        <tr>
                            <td>Stores</td>
                            <td>D283</td>
                            <td>232</td>
                        </tr>
                        <tr>
                            <td>Developing</td>
                            <td>D283</td>
                            <td>549</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div class="table-responsive">
                    <stron0g>EMP_DEPT_MAPPING table: </stron0g>
                    <table class="table table-stripped">
                      <tbody>
                        <tr>
                            <th>EMP_ID</th>
                            <th>EMP_DEPT</th>
                        </tr>
                        <tr>
                            <td>D394</td>
                            <td>283</td>
                        </tr>
                        <tr>
                            <td>D394</td>
                            <td>300</td>
                        </tr>
                        <tr>
                            <td>D283</td>
                            <td>232</td>
                        </tr>
                        <tr>
                            <td>D283</td>
                            <td>549</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <p>
                    <strong>Functional dependencies:</strong>
                  </p>
                  <pre>
                  EMP_ID   →    EMP_COUNTRY  
                  EMP_DEPT   →   {DEPT_TYPE, EMP_DEPT_NO}  
                  </pre>
                  <p>
                    <strong>Candidate keys:</strong>
                  </p>
                  <ul>
                    <li>
                      <strong>For the first table: </strong>EMP_ID
                    </li>
                    <li>
                      <strong>For the second table: </strong>EMP_DEPT
                    </li>
                    <li>
                      <strong>For the third table: </strong>{EMP_ID, EMP_DEPT}
                    </li>
                  </ul>

                  <p>Now, this is in BCNF because left side part of both the functional dependencies is a key.</p>

                  <p>
                    <strong>Fourth normal form (4NF): </strong> A relation will be in 4NF if it is in Boyce Codd normal form and has no multi-valued dependency.
                  </p>
                  <p>
                  For a dependency A → B, if for a single value of A, multiple values of B exists, then the relation will be a multi-valued dependency.
                  </p>
                  <div class="table-responsive">
                    <stron0g>STUDENT table: </stron0g>
                    <table class="table table-stripped">
                      <tbody>
                        <tr>
                            <th>STU_ID</th>
                            <th>COURSE</th>
                            <th>HOBBY</th>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>Computer</td>
                            <td>Dancing</td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>Math</td>
                            <td>Singing</td>
                        </tr>
                        <tr>
                            <td>34</td>
                            <td>Chemistry </td>
                            <td>Dancing</td>
                        </tr>
                        <tr>
                            <td>74</td>
                            <td>Biology</td>
                            <td>Cricket</td>
                        </tr>
                        <tr>
                            <td>59</td>
                            <td>Physics</td>
                            <td>Hockey</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <p>
                  The given STUDENT table is in 3NF, but the COURSE and HOBBY are two independent entity. Hence, there is no relationship between COURSE and HOBBY.
                  </p>
                  <p>
                  In the STUDENT relation, a student with STU_ID, 21 contains two courses, Computer and Math and two hobbies, Dancing and Singing. So there is a Multi-valued dependency on STU_ID, which leads to unnecessary repetition of data.
                  </p>
                  <p>
                  So to make the above table into 4NF, we can decompose it into two tables:
                  </p>

                  <div class="table-responsive">
                    <stron0g>STUDENT_COURSE table: </stron0g>
                    <table class="table table-stripped">
                      <tbody>
                        <tr>
                            <th>STU_ID</th>
                            <th>COURSE</th>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>Computer</td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>Math</td>
                        </tr>
                        <tr>
                            <td>34</td>
                            <td>Chemistry </td>
                        </tr>
                        <tr>
                            <td>74</td>
                            <td>Biology</td>
                        </tr>
                        <tr>
                            <td>59</td>
                            <td>Physics </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div class="table-responsive">
                    <stron0g>STUDENT_HOBBY table: </stron0g>
                    <table class="table table-stripped">
                      <tbody>
                        <tr>
                            <th>STU_ID</th>
                            <th>HOBBY</th>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>Dancing</td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>Singing</td>
                        </tr>
                        <tr>
                            <td>34</td>
                            <td>Dancing</td>
                        </tr>
                        <tr>
                            <td>74</td>
                            <td>Cricket</td>
                        </tr>
                        <tr>
                            <td>59</td>
                            <td>Hockey</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <p>
                    <strong>Fifth normal form (5NF): </strong>
                    A relation is in 5NF if it is in 4NF and not contains any join dependency and joining should be lossless.
                  </p>
                  <p>
                  5NF is satisfied when all the tables are broken into as many tables as possible in order to avoid redundancy.
                  </p>
                  <p>
                  5NF is also known as Project-join normal form (PJ/NF).
                  </p>

                  <div class="table-responsive">
                    <table class="table table-stripped">
                      <tbody>
                        <tr>
                            <th>SUBJECT</th>
                            <th>LECTURER </th>
                            <th>SEMESTER</th>
                        </tr>
                        <tr>
                            <td>Computer</td>
                            <td>Anshika</td>
                            <td>Semester 1</td>
                        </tr>
                        <tr>
                            <td>Computer</td>
                            <td>John</td>
                            <td>Semester 1</td>
                        </tr>
                        <tr>
                            <td>Math</td>
                            <td>John</td>
                            <td>Semester 1</td>
                        </tr>
                        <tr>
                            <td>Math</td>
                            <td>Akash</td>
                            <td>Semester 2</td>
                        </tr>
                        <tr>
                            <td>Chemistry</td>
                            <td>Praveen</td>
                            <td>Semester 1</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <p>
                  In the above table, John takes both Computer and Math class for Semester 1 but he doesn't take Math class for Semester 2. In this case, combination of all these fields required to identify a valid data.
                  </p>
                  <p>
                  Suppose we add a new Semester as Semester 3 but do not know about the subject and who will be taking that subject so we leave Lecturer and Subject as NULL. But all three columns together acts as a primary key, so we can't leave other two columns blank.
                  </p>
                  <p>
                  So to make the above table into 5NF, we can decompose it into three relations P1, P2 & P3:
                  </p>
                  <p><strong>P1</strong></p>
                  <div class="table-responsive">
                    <table class="table table-stripped">
                      <tbody>
                        <tr>
                            <th>SEMESTER</th>
                            <th>SUBJECT</th>
                        </tr>
                        <tr>
                            <td>Semester 1</td>
                            <td>Computer</td>
                        </tr>
                        <tr>
                            <td>Semester 1</td>
                            <td>Math</td>
                        </tr>
                        <tr>
                            <td>Semester 1</td>
                            <td>Chemistry</td>
                        </tr>
                        <tr>
                            <td>Semester 2</td>
                            <td>Math</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <p><strong>P2</strong></p>
                  <div class="table-responsive">
                    <table class="table table-stripped">
                      <tbody>
                        <tr>
                            <th>SUBJECT</th>
                            <th>LECTURER</th>
                        </tr>
                        <tr>
                            <td>Computer</td>
                            <td>Anshika</td>
                        </tr>
                        <tr>
                            <td>Computer</td>
                            <td>John</td>
                        </tr>
                        <tr>
                            <td>Math</td>
                            <td>John</td>
                        </tr>
                        <tr>
                            <td>Math</td>
                            <td>Akash</td>
                        </tr>
                        <tr>
                            <td>Chemistry</td>
                            <td>Praveen</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  
                  <p><strong>P3</strong></p>
                  <div class="table-responsive">
                    <table class="table table-stripped">
                      <tbody>
                        <tr>
                            <th>SEMSTER</th>
                            <th>LECTURER</th>
                        </tr>
                        <tr>
                            <td>Semester 1</td>
                            <td>Anshika</td>
                        </tr>
                        <tr>
                            <td>Semester 1</td>
                            <td>John</td>
                        </tr>
                        <tr>
                            <td>Semester 1</td>
                            <td>John</td>
                        </tr>
                        <tr>
                            <td>Semester 2</td>
                            <td>Akash</td>
                        </tr>
                        <tr>
                            <td>Semester 1</td>
                            <td>Praveen</td>
                        </tr>
                      </tbody>
                    </table>
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

