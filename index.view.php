<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackers Poulette</title>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
</head>
<body>
    <header>
        <img src="assets/img/hackers-poulette-logo.png" alt="Logo">
        <h1>Hackers Poulette</h1>
    </header>
    <h2>Contact support</h2>
    <form class="form" id="form" name="form" autocomplete="off" action="index.php" method="post">
        <fieldset class="personal">
            <legend class="personal__legend">Personal information</legend>
            <div class="personal__wrapName">
                <label for="name">Name : </label>
                <input type="text" id="name" name="name" />
            </div>
            <div class="personal__wrapLastName">
                <label for="lastname">Lastname : </label>
                <input type="text" id="lastname" name="lastname" />
            </div>
            <div class="personal__wrapGender">
                <label for="gender">Gender : </label>
                <select id="gender" name="gender" >
                    <option value="" selected>Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="personal__wrapEmail">
                <p><?= isset($error_email) ? $error_email : ''; ?></p>
                <label for="email">Email : </label>
                <input type="email" id="email" name="email" />
            </div>
            <div class="personal__wrapCountry">
                <label for="country">Country : </label>
                <select id="country" name="country" >
                    <option value="" selected>Country</option>
                    <option value="belgium">Belgium</option>
                    <option value="france">France</option>
                    <option value="netherlands">Netherlands</option>
                    <option value="germany">Germany</option>
                    <option value="luxemburg">Luxemburg</option>
                </select>
            </div>   
        </fieldset>
        <fieldset class="question">
            <legend class="question__legend">Your question</legend>
            <div class="question__wrapSubject">
                <label for="subject">Subject : </label>
                <select id="subject" name="subject">
                    <option value="broken" name="subject">Broken or missing pieces</option>
                    <option value="information" name="subject">Need of information</option>
                    <option value="other" name="subject" selected>Other</option>
                </select>
            </div> 
            <div class="question__wrapMessage">
                <label for="message">Your message : </label>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
            </div>
        </fieldset>
        <Button class="button" type="submit" name="submit" value="submit">Submit</Button>
    </form>

</body>
</html>