<body>
    
    <div class="main">

        <div class="image">
            <img src=<?php echo "uploads/".$row['profilePicture']; ?> alt="student_picture">
            <h1><?php echo $row['nom']. " ".$row['prenom']; ?></h1>     
        </div>

        <div class="student-information">
            <div>
                N* Apoge: 
                <input type="text" value=<?php echo $row['id_student']; ?>>
            </div>

            <div>
                CNE: 
                <input type="text" value=<?php echo $row['cne']; ?>>
            </div>

            <div>
                First Name: 
                <input type="text" value=<?php echo $row['nom']; ?>>
            </div>
            
            <div>
                Last Name: 
                <input type="text" value=<?php echo $row['prenom']; ?>>
            </div>
            
            <div>
                Email:
                <input type="text" value=<?php echo $row['email']; ?>>
            </div>
            
        </div>

        <div class="services">
            <select class="round1">
                <option>EMPLOIE DU TEMPS</option>
                <option>xxxxxxxxxxxxxxx</option>
                <option>xxxxxxxxxxxxxxxx</option>
            </select>

            <select class="round2">
                <option>LISTE DE NOTES</option>
                <option>xxxxxxxxxxxxxxxxxxx</option>
                <option>xxxxxxxxxxxxxxxx</option>
            </select>

            <select class="round3">
                <option>ADMINISTRATION</option>
                <option>xxxxxxxxxxxxxxxxxxxxx</option>
                <option>xxxxxxxxxxxxxxxxxxx</option>
            </select>
        </div>
    </div>

</body>
