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
            
        ?>
        <?php require "header.php"?>
        
        <div class="container">
            <form method="post">
                <div class="row">
                <div class="col-25">
                    <label for="fname">First Name:</label>
                    <label style="color:black;"> <?= $results->fname; ?></label>
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="lname">Last Name:</label>
                    <label style="color:black;"> <?= $results->lname; ?></label>
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="mname">Middle Initial:</label>
                   <label style="color:black;"> <?= $results->minitial; ?></label>
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="barangay">Barangay:</label>
                   <label style="color:black;"> <?= $results->barangay; ?></label>
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="municipality">Municipality:</label>
                    <label style="color:black;"> <?= $results->municipality; ?></label>
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="city">City: </label>
                    <label style="color:black;"> <?= $results->city; ?></label>
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="mapadd">Map Address:</label>
                   <label style="color:black;"> <?= $results->map_add; ?></label>
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="age">Age:</label>
                    <label style="color:black;"> <?= $results->age; ?></label>
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="gender">Gender:</label>
                <label style="color:black;"> <?= $results->gender; ?></label>
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="civstat">Civil Status:</label>
                    <label style="color:black;"> <?= $results->civil_stat; ?></label>
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="datetest">Date Tested:</label>
                   <label style="color:black;"> <?= $results->pos_date; ?></label>
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="level">Level:</label>
                   <label style="color:black;"> <?= $results->level; ?></label>
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="admitto">Admitted To (Name of Hospital):</label>
                   <label style="color:black;"> <?= $results->hospital; ?></label>
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="datead">Date Admitted:</label>
                  <label style="color:black;"> <?= $results->admit_date; ?></label>
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <label for="stat">Status:</label>
                    <label style="color:black;"> <?= $results->status; ?></label>
                </div>
                </div>
                <div class="row">
                <div class="col-25">
                    <a href="index.php" class="btn btn-submit"> Back </a>
                </div>
                </div>

            </form>
        </div>
        <?php require "footer.php"?>