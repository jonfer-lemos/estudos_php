<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">msg_title</th>
                <th scope="col">msg_content	</th>
            </tr>
        </thead>

        <?php
        require './Conn.php';
        require './ListContact.php';

        $listMsgContact = new ListContact();
        $result_list_contacts = $listMsgContact->list();


        foreach ($result_list_contacts as $row_result_list_contact) {
            extract($row_result_list_contact); ?>
                     
            <tbody>
                <tr>
                    <th scope="row"><?php echo $id ?></th>
                    <td><?php echo $name ?></td>
                    <td><?php echo $email ?></td>
                    <td><?php echo $msg_title ?></td>
                    <td><?php echo $msg_content ?></td>
                   
                </tr>
            </tbody>

        <?php } ?>

    </table>












</body>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>