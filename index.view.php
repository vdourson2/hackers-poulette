<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackers Poulette</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bellota:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Hahmlet:wght@500;600;700;800;900&family=Kalam:wght@300&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    </style>
    <link rel="stylesheet" href="dist/style.css" type="text/css">
</head>
<body>
    <header class="flex gap-24 items-center border-b-2 h-48 font-fontBellota">
        <img width="300" height="300" src="assets/img/hackers-poulette-logo.png" alt="Logo">
        <h1 class="text-5xl font-bold">Hackers Poulette</h1>
    </header>
    <h2 class="text-3xl p-8 pb-4 font-fontBellota font-bold">Contact support</h2>
    
    <div class="wrapForm flex item-center justify-center font-fontBellota text-lg">
        <form class="form flex flex-col items-center justify-center gap-3 max-w-lg" id="form" name="form" autocomplete="off" action="index.php" method="post">
            <fieldset class="personal border-2 border-colTurquoise p-4 rounded-md flex flex-col gap-2 w-full text-xl">
                <legend class="personal__legend font-bold text-2xl">Personal information</legend>
                <div class="personal__wrapName">
                    <p class="text-colTurquoise font-bold"><?= $error['name'] ?? ''; ?></p>
                    <label for="name">Name : </label>
                    <input class="border-2 border-gray-300 rounded" type="text" id="name" name="name" value="<?= $name ?? '';?>" required/>
                </div>
                <div class="personal__wrapLastName">
                    <p class="text-colTurquoise font-bold"><?= $error['lastname'] ?? ''; ?></p>
                    <label for="lastname">Lastname : </label>
                    <input class="border-2 border-gray-300 rounded" type="text" id="lastname" name="lastname" value="<?= $lastname ?? '';?>" required />
                </div>
                <div class="hidden">
                    <label for="age">Age : </label>
                    <input class="border-2 border-gray-300 rounded" type="text" id="age" name="age" />
                </div>
                <div class="personal__wrapGender">
                    <p class="text-colTurquoise font-bold"><?= $error['gender'] ?? ''; ?></p>
                    <label for="gender">Gender : </label>
                    <select class="py-1 px-2" id="gender" name="gender" required>
                        <option value="" <?= isset($gender) ? '' : 'selected';?> >Gender</option>
                        <option value="male" <?= (isset($gender) AND ($gender == "male")) ? 'selected' : '';?> >Male</option>
                        <option value="female" <?= (isset($gender) AND ($gender == "female")) ? 'selected' : '';?> >Female</option>
                        <option value="other" <?= (isset($gender) AND ($gender == "other")) ? 'selected' : '';?> >Other</option>
                    </select>
                </div>
                <div class="personal__wrapEmail">
                    <p class="text-colTurquoise font-bold"><?= $error['email'] ?? ''; ?></p>
                    <label for="email">Email : </label>
                    <input class="border-2 border-gray-300 rounded" type="email" id="email" name="email" value="<?= $email ?? '';?>"required/>
                </div>
                <div class="personal__wrapCountry">
                    <p class="text-colTurquoise font-bold"><?= $error['country'] ?? ''; ?></p>
                    <label for="country">Country : </label>
                    <select class="py-1 px-2" id="country" name="country" required>
                        <option value="" <?= isset($country) ? '' : 'selected';?>>Country</option>
                        <option value="belgium" <?= (isset($country) AND ($country == "belgium")) ? 'selected' : '';?> >Belgium</option>
                        <option value="france" <?= (isset($country) AND ($country == "france")) ? 'selected' : '';?> >France</option>
                        <option value="netherlands" <?= (isset($country) AND ($country == "netherlans")) ? 'selected' : '';?> >Netherlands</option>
                        <option value="germany" <?= (isset($country) AND ($country == "germany")) ? 'selected' : '';?> >Germany</option>
                        <option value="luxemburg" <?= (isset($country) AND ($country == "luxemburg")) ? 'selected' : '';?> >Luxemburg</option>
                    </select>
                </div>   
            </fieldset>
            <fieldset class="question border-2 p-4 rounded-md flex flex-col gap-2 w-full border-colTurquoise text-xl">
                <legend class="question__legend font-fontBellota font-bold text-2xl">Your question</legend>
                <div class="question__wrapSubject">
                    <label for="subject">Subject : </label>
                    <select class="py-1 px-2" id="subject" name="subject">
                        <option value="broken" name="subject">Broken or missing pieces</option>
                        <option value="information" name="subject">Need of information</option>
                        <option value="other" name="subject" selected>Other</option>
                    </select>
                </div> 
                <div class="question__wrapMessage flex flex-col">
                    <p class="text-colTurquoise font-bold"><?= $error['message'] ?? ''; ?></p>
                    <label for="message">Your message : </label>
                    <textarea class="border-2 border-gray-300 rounded" name="message" id="message" cols="30" rows="4" required><?= $message ?? '';?></textarea>
                </div>
            </fieldset>
            <button class="block text-2xl px-3 py-2 button w-32 text-white bg-colTurquoise focus:ring-4 focus:ring-blue-300 font-medium rounded-lg" type="submit" name="submit" value="submit">Submit</Button>
        </form>
    </div>

</body>
</html>