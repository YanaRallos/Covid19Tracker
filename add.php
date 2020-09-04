
                
        <?php
                    include_once("config.php");
        
                if (isset($_POST['fname'])&& isset($_POST['lname'])&&
                    isset($_POST['minitial'])&& isset($_POST['barangay'])&& 
                    isset($_POST['municipality'])&& isset($_POST['city'])&&
                    isset($_POST['map_add'])&& isset($_POST['age'])&& 
                    isset($_POST['gender'])&& isset($_POST['civil_stat'])&& 
                    isset($_POST['pos_date'])&& isset($_POST['level'])&&
                    isset($_POST['hospital'])&& isset($_POST['admit_date'])&&
                    isset($_POST['status'])){

                    //calling the method connect
                    $con = config::connect();

                    //get the input field 
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $minitial = $_POST['minitial'];
                    $barangay = $_POST['barangay'];
                    $municipality = $_POST['municipality'];
                    $city = $_POST['city'];
                    $map_add = $_POST['map_add'];
                    $age = $_POST['age'];
                    $gender = $_POST['gender'];
                    $civil_stat = $_POST['civil_stat'];
                    $pos_date = $_POST['pos_date'];
                    $level = $_POST['level'];
                    $hospital = $_POST['hospital'];
                    $admit_date= $_POST['admit_date'];
                    $status = $_POST['status'];
                    

                    $sql = 'INSERT INTO patient (lname, fname,minitial,barangay,municipality,city,
                    map_add, age, gender, civil_stat, pos_date, level, hospital, admit_date, status) 
                            VALUES (:lname,:fname,:minitial,:barangay,:municipality,:city,
                    :map_add,:age,:gender,:civil_stat,:pos_date,:level,:hospital,:admit_date,:status)';

                    $query=$con->prepare($sql);
                    if($query->execute([ ':lname' => $lname,':fname' =>$fname,':minitial' => $minitial,':barangay' =>$barangay,
                                        ':municipality' =>$municipality, ':city' =>$city, ':map_add' =>$map_add, ':age' =>$age,
                                        ':gender' =>$gender, ':civil_stat' =>$civil_stat, ':pos_date' =>$pos_date, ':level' =>$level,
                                        ':hospital' =>$hospital, ':admit_date' =>$admit_date, ':status' => $status])){
                        header("location: index.php");
                }
        }
        ?>
        <?php require "header.php"?>
        <main>
        <h2 style="text-align:center;">Add Patient</h2>
          <div class="container">
            <form method="post">
                <div class="row">
                <div class="col-25">
                    <label for="fname">First Name</label>
                </div>
                <div class="col-75">
                    <input type="text" name="fname" required placeholder="First Name">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="lname">Last Name</label>
                </div>
                <div class="col-75">
                    <input type="text" name="lname" required placeholder="Last Name">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="mname">Middle Initial</label>
                </div>
                <div class="col-75">
                    <input type="text" name="minitial" placeholder="Middle Initial">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="barangay">Barangay</label>
                </div>
                <div class="col-75">
                    <input type="text" name="barangay" required placeholder="Barangay">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="municipality">Municipality</label>
                </div>
                <div class="col-75">
                    <input type="text" name="municipality" required placeholder=" Municipality">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="city">City</label>
                </div>
                <div class="col-75">
                    <input type="text" name="city" required placeholder=" City">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="mapadd">Map Address</label>
                </div>
                <div class="col-75">
                    <input type="text" name="map_add" required placeholder="Map Address">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="age">Age</label>
                </div>
                <div class="col-75">
                    <input type="text" name="age" required placeholder="Age">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="gender">Gender</label>
                </div>
                <div class="col-75">
                <input type="radio" name="gender" value="Male">
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="Female">
                    <label for="female">Female</label>
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="civil_stat">Civil Status</label>
                </div>
                <div class="col-75">
                    <select name="civil_stat">
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Widow">Widow</option>
                    </select>
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="pos_date">Date Tested</label>
                </div>
                <div class="col-75">
                    <input type="date" name="pos_date" required placeholder="Date tested">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="level">Level</label>
                </div>
                <div class="col-75">
                    <select name="level">
                    <option value="Asymptomatic">Asymptomatic</option>
                    <option value="Mild">Mild</option>
                    <option value="Severe">Severe</option>
                    <option value="Critical">Critical</option>
                    </select>
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="admitto">Admitted To (Name of Hospital)</label>
                </div>
                <div class="col-75">
                    <input type="text" name="hospital" required placeholder="Admitted to">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="datead">Date Admitted</label>
                </div>
                <div class="col-75">
                    <input type="date" name="admit_date" required placeholder="Date admitted">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="stat">Status</label>
                </div>
                <div class="col-75">
                    <select name="status">
                    <option value="Admitted">Admitted</option>
                    <option value="Expired">Expired</option>
                    <option value="Negative">Lab Negative</option>
                    </select>
                </div>
                </div>
                
                <div class="row">
                <button type="submit" class="btn btn-submit"> Submit </button>
                <a href="index.php" class="btn btn-danger"> Cancel </a>
            </div>
            </form>
                </div>
            </main>
            <?php require "footer.php"?>