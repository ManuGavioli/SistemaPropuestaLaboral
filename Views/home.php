<?php
    require_once('nav.php');

    $student = $_SESSION["loggedUser"];
    
?>
<main class="py-5">
    <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">User info:</h2>
               <table class="table bg-light-alpha">
                    <thead>
                        <th>Student ID</th>
                        <th>Career ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Dni</th>
                        <th>File Number</th>
                        <th>Gender</th>
                        <th>Birth date</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Active</th>
                    </thead>
                    <tbody>
                        <?php
                            if(!empty($student)){
                                ?>
                                    <tr>
                                        <td><?php echo $student->getStudentId() ?></td>
                                        <td><?php echo $student->getCareerId() ?></td>
                                        <td><?php echo $student->getFirstName() ?></td>
                                        <td><?php echo $student->getLastName() ?></td>
                                        <td><?php echo $student->getDni() ?></td>
                                        <td><?php echo $student->getFileNumber() ?></td>
                                        <td><?php echo $student->getGender() ?></td>
                                        <td><?php echo $student->getBirthDate() ?></td>    <!--aca sacar la hora del nacimiento-->
                                        <td><?php echo $student->getEmail() ?></td>
                                        <td><?php echo $student->getPhoneNumber() ?></td>
                                        <td><?php echo $student->getActive() ?></td>      <!--aca hacer un if que muestre al usuario si se encuentra activo o no-->
                                    </tr>
                                <?php
                            }
                        ?>
                    </tbody>
               </table>
          </div>
    </section>
</main>