<?php
/**
 * Created by PhpStorm.
 * User: kirigo karanja
 * Date: 19/04/2018
 * Time: 16:43
 */
?>

<?php
/**
 * Created by PhpStorm.
 * User: kirigo karanja
 * Date: 19/04/2018
 * Time: 16:31
 */
?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SignUp Page with security measures implemented ">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/login.css">

</head>

<body>
<div class="containerform">
    <img src='' width=200px; height=100px; id="output_image" class='image' style=" width:100px; margin-left: 35%; background-color: white" alt="Logo Image">
    <form method="post" action="#">

        <label class="password">
            <input type="file" name="myimage"  onchange="preview_image(event)"><br>
        </label>
        <label class="password">
            <span class="label-text">Client Name</span>
            <input type="text" name="sname"required/>
        </label>
        <label class="password">
            <span class="label-text">Year</span>
            <input type="text" name="email" required/>
        </label>
        <label class="password">
            <span class="label-text">Challenge</span>
            <textarea  name="number" required style="background: transparent;border: none"></textarea>
        </label>
        <label class="password">
            <span class="label-text">Solution</span>
            <textarea  name="number" required style="background: transparent;border: none"></textarea>
        </label>
        <label class="password">
            <span class="label-text">Outcome</span>
            <textarea  name="number" required style="background: transparent;border: none"></textarea>
        </label>

        <div class="text-center">
            <button type="submit" class="submit">SAVE CHANGES</button>
        </div>
    </form>
</div>


</body>
</html>

