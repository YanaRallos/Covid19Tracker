<?php
            include_once("config.php");
            $sql="SELECT * from patient";
            $con = config::connect();
            $query =$con->prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);
            
            ?>
        
            <?php require "header.php"?>
            <main>
            <table>
                <tr>   
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Middle Name</th>
                    <th>Level</th>
                    <th>Admitted To</th>
                    <th>Date Admitted</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                    <?php foreach ($results as $pat): ?>
                    <tr>
                    <td><?php echo $pat->id; ?></td>
                    <td><?php echo $pat->fname; ?></td>
                    <td><?php echo $pat->lname; ?></td>
                    <td><?php echo $pat->minitial; ?></td>
                    <td><?php echo $pat->level; ?></td>
                    <td><?php echo $pat->hospital; ?></td>
                    <td><?php echo $pat->admit_date; ?></td>
                    <td><?php echo $pat->status; ?></td>
                    <td><a href="view.php?id=<?= $pat->id ?>" class="btn btn-submit">View Details</a> <a href="Edit.php?id=<?= $pat->id ?>" class="btn btn-submit">Edit</a>
                    <a href="delete.php?id=<?= $pat->id ?>" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>
                    <?php endforeach ?>
            </table>
        </main>
        </div>
        <?php require "footer.php"?>