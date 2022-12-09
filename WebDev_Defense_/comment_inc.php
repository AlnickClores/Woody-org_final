<?php
    function setComments($conn){
        if(isset($_POST['commentSubmit'])){
            $uid = $_POST['uid'];
            $date = $_POST['date'];
            $comment = $_POST['comment'];

            $sql = "INSERT INTO tbl_comments (uid, date, comment) VALUES ('$uid', '$date', '$comment')";
            $result = $conn -> query($sql);
        }
    }

    function getComments($conn){
        $sql = "SELECT * FROM tbl_comments ORDER BY cid DESC";
        $result = $conn -> query($sql);

        while($row = $result -> fetch_assoc()){
            $id = $row['uid'];
            $sqlUser = "SELECT * FROM tbl_users WHERE ID = '$id'";
            $resultUser = $conn -> query($sqlUser);

            if($rowUser = $resultUser->fetch_assoc()){
                echo "<div class='commentBox'><p>";
                    echo "<span class='usrn'>".$rowUser['Username']."&nbsp"."</span>";
                    echo "<span class='dte'>".$row['date']."</span>". "<br><br>";
                    echo "<span class='cmnt'>".nl2br($row['comment'])."</span>";
                echo "</p>
                <form class='deleteForm' method='POST' action='".deleteComments($conn)."'>
                    <input type='hidden' name='cid' value='".$row['cid']."'>
                    <button type='submit' name='commentDelete'>Delete</button>
                </form>
                </div>";
            }
        }
    }

    function deleteComments($conn){
        if(isset($_POST['commentDelete'])){
            $cid = $_POST['cid'];

            $sql = "DELETE FROM tbl_comments WHERE cid='$cid'";
            $result = $conn -> query($sql);
        }
    }