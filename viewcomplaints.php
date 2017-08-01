<?php include('header.php'); ?>
<html>
<body>
	 <div>
                            <?php
                                mysql_connect('localhost','root','');
                                mysql_select_db('sba');
                                $result=mysql_query("select * from complaintdetails");
                            ?>
                             <center>
                                <h1 align="center">Complaints!!</h1>
                                <table class="table table-hover">
                                    <tr>
                                        <th style="text-align: center;">Location</th>
                                        <th style="text-align: center;">Subject</th>
                                        <th style="text-align: center;">Description</th>
                                    </tr>
                                    <?php
                                        while ($array=mysql_fetch_row($result)) {
                                            print "<tr> <td>";
                                            echo $array[2];
                                            print "</td> <td>";
                                            echo $array[3];
                                            print "</td> <td>";
                                            echo $array[4];
                                            print "</td> </tr";
                                        }
                                    ?>
                                </table>
                                </center>
    </div>				
</body>
</html>