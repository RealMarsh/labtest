<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>LAB TEST OUTPUT</title>
</head>
<body>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $word = $_REQUEST['word'];
            $wordArray = str_split($word);
            $wordCount = count($wordArray); 
            $wordAgain = implode("", $wordArray);

            $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U", " ");
            $wordWithDollar = str_replace($vowels, "$", $word);
        }
    ?>
    <div class="container mt-5 p-5 text-center">
        <div class="card">
            <div class="card-header">
                <strong>Word Encrypter</strong>
            </div>
            <div class="card-body text-center">
                <table class="table table-responsive table-borderless text-left">
                    <tr>
                        <th>Word</th>
                        <td> <?php echo $word; ?> </td>
                    </tr>
                    <tr>
                        <th>Encrypted</th>
                        <td> <?php echo $wordWithDollar; ?> </td>
                    </tr>
                    <tr>
                        <th>No of Character</th>
                        <td> <?php echo $wordCount ?> </td>
                    </tr>

                </table>
            </div>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>