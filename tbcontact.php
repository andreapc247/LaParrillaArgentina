<?php
//require 'db/db.php';
$data= $database->select('tbContact',['name','email']                        
                        );
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <div class="containerCenter tableSize ">
            <section>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="table-responsive">
                            <article class="tbl-header">
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                    </tr>
                                </table>
                            </article>
                            <div class="tbl-content">
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <?php
                                        for($a=0;$a<count($data);$a++){
                                            echo "<tr><td>".$data[$a]['name']."</td>
                                                <td>".$data[$a]['email']."</td></tr>";
                                        }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    
    
    
</body>
</html>