<?php
include('db.php');
include('hedear.php');





?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <title>Read</title>
    <style>
        body {
            padding: 0px;
            margin: 0px;
        }

        table,
        tr,
        th,
        td {
            border: 1px solid lightgrey;
            border-collapse: collapse;

        }

        th {
            height: 30px;
        }

        td {
            height: 30px;
            text-align: center;

        }

        table {
            width: 90%;

        }

        thead {
            background-color: lightgrey;
        }

        #tableDiv {
            width: 100%;

            height: 600px;

        }

        #hautDePage {
            margin: auto;
            width: 80%;
            display: flex;


        }

        .buttonAdd {
            display: flex;
            vertical-align: middle;
            width: 50%;
            width: 40%;
            align-items: center;
            justify-content: flex-end;
        }

        #heading {
            display: flex;
            width: 50%;
        }

        #buttonAdd {
            width: 100px;
            height: 30px;
            background-color: #6001FF;
            color: white;
            border: none;
        }
    </style>
</head>

<body>
    <div id="hautDePage">
        <div id="heading">
            <p>LIST OF BOOKS</p>
        </div>
        <div class="buttonAdd">
            <a href="create.php"><button id="buttonAdd" style="">Add</button></a>

        </div>

    </div>
    <div id="tableDiv">
        <table style="margin: auto;">
            <thead>
                <tr>
                    <th style="width: 20%;">Titre</th>
                    <th style="width: 15%;">Auteur</th>
                    <th style="width: 15%;">images</th>
                    <th style="width: 10%;">Prix</th>
                    <th style="width: 10%;">Quantite</th>
                    <th>date dachat </th>
                    <th> date de publication</th>
                    <th style="width: 15%;"> Actions</th>
                </tr>

            </thead>
            <tbody>

                <?php
                $id = 'id';
                 $sql = "SELECT * FROM livres WHERE id=$id";
                //$sql = "SELECT * from livres";
                // $run=$conn->query($sql);
                $query_run = mysqli_query($conn, $sql);

                // if (mysqli_fetch_object($query_run)) {
                while ($row = mysqli_fetch_object($query_run)) {
                ?>
                    <tr>

                        <td><?= $row->titre; ?></td>
                        <td><?= $row->auteur; ?></td>
                        <td><?= $row->images; ?></td>
                        <td><?= $row->prix; ?></td>
                        <td><?= $row->quantite; ?></td>
                        <td><?= $row->date_achat; ?></td>
                        <td><?= $row->date_de_publication; ?></td>
                        <td align="center">
                            <!-- DELETE -->

                            <button value="<?= $row->id ?>" class="btn btn-danger">DELETE</button>
                            <!-- UPDATE -->
                            <button value="<?= $row->id ?>" class="btn btn-warning">UPDATE</button>

                        </td>
                    </tr>
                <?php
                }
                // } else {
                //     echo "No Records Found!";
                // }
                ?>


            </tbody>
        </table>
    </div>

    <?php include('footer.php'); ?>
    <script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
        $(function() {
            $(".btn-danger").click(function() {
                var supp = confirm("are you sure you want delete this item ?");
                if (supp == true) {
                    // console.log("delete.php?id=" + $(this)[0].value);
                    window.location.href = "delete.php?id=" + $(this)[0].value;
                } else
                    alert("suppression été annulée");
            })
            $(".btn-warning").click(function() {
                var supp = confirm("are you really want to edit your infos?");
                if (supp == true) {
                    // console.log("delete.php?id=" + $(this)[0].value);
                    window.location.href ="update.php?id=" + $(this)[0].value;
                } else
                    alert("suppression été annulée");
            })
        });
    </script>
</body>

</html>