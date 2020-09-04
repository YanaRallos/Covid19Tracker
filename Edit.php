  <?php
                include_once("config.php");
                $message='';

                $id= $_GET['id'];
                $sql="SELECT * FROM patient where id=:id";
                $con = config::connect();
                $query=$con->prepare($sql);
                $query->bindParam(':id',$id,PDO::PARAM_STR);  
                $query->execute([':id' =>$id]);

                $results= $query->fetch(PDO::FETCH_OBJ);
        
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
                

                $sql = 'UPDATE patient SET lname=:lname,fname=:fname,minitial=:minitial,barangay=:barangay,
                municipality=:municipality,city=:city,map_add=:map_add,age=:age,gender=:gender,
                civil_stat=:civil_stat,pos_date=:pos_date,level=:level,hospital=:hospital,admit_date=:admit_date,
                status=:status WHERE id=:id';

                $query=$con->prepare($sql);
                if($query->execute([ ':lname' => $lname,':fname' =>$fname,':minitial' => $minitial,':barangay' =>$barangay,
                                    ':municipality' =>$municipality, ':city' =>$city, ':map_add' =>$map_add, ':age' =>$age,
                                    ':gender' =>$gender, ':civil_stat' =>$civil_stat, ':pos_date' =>$pos_date, ':level' =>$level,
                                    ':hospital' =>$hospital, ':admit_date' =>$admit_date, ':status' => $status, ':id' => $id])){

                                       header("location:index.php");
                }
            }
        ?>
        <?php require "header.php"?>
        
        <div class="container">
            <form method="post">
                <div class="row">
                <div class="col-25">
                    <label for="fname">First Name</label>
                </div>
                <div class="col-75">
                    <input type="text" name="fname" required value="<?= $results->fname; ?>" placeholder="First Name">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="lname">Last Name</label>
                </div>
                <div class="col-75">
                    <input type="text" name="lname" required value="<?= $results->lname; ?>" placeholder="Last Name">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="mname">Middle Name</label>
                </div>
                <div class="col-75">
                    <input type="text" name="minitial" value="<?= $results->minitial; ?>" placeholder="Middle Initial">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="barangay">Barangay</label>
                </div>
                <div class="col-75">
                    <input type="text" name="barangay" required value="<?= $results->barangay; ?>" placeholder="Barangay">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="municipality">Municipality</label>
                </div>
                <div class="col-75">
                    <input type="text" name="municipality" required value="<?= $results->municipality; ?>" placeholder="Municipality">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="city">City</label>
                </div>
                <div class="col-75">
                    <input type="text" name="city" required value="<?= $results->city; ?>" placeholder="City">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="mapadd">Map Address</label>
                </div>
                <div class="col-75">
                    <input type="text" name="map_add" required value="<?= $results->map_add; ?>" placeholder="Map Address">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="age">Age</label>
                </div>
                <div class="col-75">
                    <input type="text" name="age" required value="<?= $results->age; ?>" placeholder="Age..">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="gender">Gender</label>
                </div>
                <div class="col-75">
                <input type="radio" name="gender" value="Male" <?php if($results->gender=="Male"){echo "checked";} ?>>
                    <label for="male">Male</label>
                    <input type="radio" name="gender" value="Female" <?php if($results->gender=="Female"){echo "checked";} ?>>
                    <label for="female">Female</label>
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="civstat">Civil Status</label>
                </div>
                <div class="col-75">
                    <select name="civil_stat" value="<?= $results->civil_stat; ?>">
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Widow">Widow</option>
                    </select>
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="datetest">Date Tested</label>
                </div>
                <div class="col-75">
                    <input type="date" name="pos_date" required value="<?= $results->pos_date; ?>" placeholder="Date tested">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="level">Level</label>
                </div>
                <div class="col-75">
                    <select name="level" value="<?= $results->level; ?>">
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
                    <input type="text" name="hospital" required="" value="<?= $results->hospital; ?>" placeholder="Admitted to">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="datead">Date Admitted</label>
                </div>
                <div class="col-75">
                    <input type="date" name="admit_date" required="" value="<?= $results->admit_date; ?>" placeholder="Date admitted">
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="stat">Status</label>
                </div>
                <div class="col-75">
                    <select name="status" value="<?= $results->status; ?>">
                    <option value="Admitted">Admitted</option>
                    <option value="Expired">Expired</option>
                    <option value="Negative">Lab Negative</option>
                    </select>
                </div>
                </div>
                
                <div class="row">
                <input type="submit" class="btn btn-submit"value="Submit">
                <a href="index.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
        <?php require "footer.php"?>