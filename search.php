<!DOCTYPE html>
<html>
    <head>
        <title>Search Question</title>
        <link rel="stylesheet" href="materialize.min.css">
        <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
        <script type = "text/javascript" src="materialize.min.js"></script>
        <script>
            $(document).ready(function() {
                $('select').material_select();
            })
        </script>
    </head>
    <body class = "cyan indigo-text">
        <div class="container">
            <nav class = "blue darken-3 white-text">
                <div class="nav-wrapper">
                    <ul id="nav-mobile" class="left hide-on-med-and-down">
                        <li><a href="submit.php">Submit Question</a></li>
                        <li><a href="search.php">Search Question</a></li>
                    </ul>
                </div>
            </nav>
            <br>
            <form action="" method="POST">
                <div class="row">
                    <div class="input-field col s6">
                        <select name="course">
                            <option value="SWE111">SWE111 : Introduction To Software Engineering</option>
                            <option value="SWE112">SWE112 : Computer Fundamentals With Lab</option>
                            <option value="PHY114">PHY114 : Physics With Lab</option>
                            <option value="MAT113">MAT113 : Mathematics-I (Calculus & Differential Equations)</option>
                            <option value="SWE121">SWE121 : Software Requirement Analysis & Design</option>
                            <option value="SWE122">SWE122 : Programming Language With Lab</option>
                            <option value="ENG123">ENG123 : English Language</option>
                            <option value="STA131">STA131 : Statistics & Probabilities</option>
                            <option value="SWE133">SWE133 : Data Structure With Lab</option>
                            <option value="MAT221">MAT221 : Mathematics-II</option>
                            <option value="SWE231">SWE231 : Software Engineering Project-I (using C)</option>
                            <option value="SWE132">SWE132 : Java Programming With Lab</option>
                            <option value="SWE211">SWE211 : Introduction To Database With Lab</option>
                            <option value="SWE213">SWE213 : Computer Algorithms With Lab</option>
                            <option value="SWE222">SWE222 : Software Engineering Quality Assurance & Testing</option>
                            <option value="SWE223">SWE223 : Digital Electronics With Lab</option>
                            <option value="SWE224">SWE224 : Discrete Mathematics</option>
                            <option value="SWE233">SWE233 : Object Oriented Concept & Design With Lab</option>
                            <option value="ACC124">ACC124 : Principles of Accounting</option>
                            <option value="SWE131">SWE131 : Documentation of Software Engineering</option>
                            <option value="SWE212">SWE212 : Software Project Management</option>
                            <option value="SWE232">SWE232 : Operating System With Lab</option>
                            <option value="SWE312">SWE312 : Theory of Computing</option>
                            <option value="SWE313">SWE313 : Dot Net Programming With Lab</option>
                            <option value="SWE322">SWE322 : Software Security</option>
                            <option value="SWE323">SWE323 : System Analysis & Design</option>
                            <option value="SWE311">SWE311 : Computer Architecture & Organization</option>
                            <option value="SWE321">SWE321 : Data Communication With Lab</option>
                            <option value="SWE333">SWE333 : DeskTop & Web Programming With Lab</option>
                            <option value="SWE413">SWE413 : Software Engineering & Cyber Laws</option>
                            <option value="SWE331">SWE331 : Object Oriented Software Development</option>
                            <option value="SWE412">SWE412 : Management Information System</option>
                            <option value="SWE422">SWE422 : Numerical Analysis With Lab</option>
                            <option value="SWE424">SWE424 : Artificial Intelligence With Lab</option>
                            <option value="SWE332">SWE332 : Software Engineering Project II (Web Programming)</option>
                            <option value="SWE423">SWE423 : Advanced Database Management With Lab</option>
                            <option value="SWE425">SWE425 : Telecommunication Engineering With Lab</option>
                            <option value="SWE426">SWE426 : Distributive Computing & Networking Security With Lab</option>
                        </select>
                        <label class="indigo-text">Course</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input type="number" name="number" class="validate">
                        <label class="indigo-text">Number of Questions</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <select name="easy">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="40">40</option>
                            <option value="50">50</option>
                            <option value="60">60</option>
                            <option value="70">70</option>
                            <option value="80">80</option>
                        </select>
                        <label class="indigo-text">Percentage of Easy Questions</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <select name="medium">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="40">40</option>
                            <option value="50">50</option>
                            <option value="60">60</option>
                            <option value="70">70</option>
                            <option value="80">80</option>
                        </select>
                        <label class="indigo-text">Percentage of Medium Questions</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <select name="hard">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="40">40</option>
                            <option value="50">50</option>
                            <option value="60">60</option>
                            <option value="70">70</option>
                            <option value="80">80</option>
                        </select>
                        <label class="indigo-text">Percentage of Hard Questions</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <button class="btn waves-effect waves-light blue darken-3" type="submit" name="Search">Search
                        </button>
                    </div>
                </div>
            </form>
            <table>
<?php
if (isset($_POST['Search']))
{
    $N = $_POST['number'];
    $E = $_POST['easy'];
    $M = $_POST['medium'];
    $H = $_POST['hard'];
    if (($E + $M + $H) != 100)
        die ("Sum is not equal to 100");
    $E = round(($N * $E) / 100);
    $M = round(($N * $M) / 100);
    $H = round(($N * $H) / 100);
    $link = mysqli_connect("localhost", "root", "", "question");
    if (!$link) die ("Sorry could not connect to database");
    $eq = mysqli_query($link , "select * from typed where Difficulty = 'Easy' order by rand() limit $E");
    $mq = mysqli_query($link , "select * from typed where Difficulty = 'Medium' order by rand() limit $M");
    $hq = mysqli_query($link , "select * from typed where Difficulty = 'Hard' order by rand() limit $H");
    if (!$eq || !$mq || !$hq) die ("Sorry no question under this difficulty level");
    while ($easy = mysqli_fetch_array($eq , MYSQLI_NUM))
        echo "<tr><td>".$easy[2]."</td></tr>";
    while ($medium = mysqli_fetch_array($mq , MYSQLI_NUM))
        echo "<tr><td>".$medium[2]."</td></tr>";
    while ($hard = mysqli_fetch_array($hq , MYSQLI_NUM))
        echo "<tr><td>".$hard[2]."</td></tr>";
}
    ?>
            </table>
        </div>
    </body>
</html>