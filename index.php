<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The application from</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <form action="result.php" method="post">
        <div>
            <label class=text>Name</label>
            <input type="text" name="name"></input>
        </div>

        <div class="select">
            <label class=text>Club you want to apply</label>
            <select name="club" class="club">
                <option value="Robotic Club">Robotic Club</option>
                <option value="Sport Club">Sport Club</option>
                <option value="Dace Club">Dance Club</option>
            </select>
        </div>

        <div class="check">
            <label class="text">Be time for you </label>
            <input type="radio" name="time" value="Sartuday mornings" checked> <label>Sartuday mornings</label>
            <input type="radio" name="time" value="Sartuday afternoons"> <label>Sartuday afternoons</label>
        </div>
        <div class=lip>
            <input type="radio" name="time" value="Sunday afternoons"> <label>Sunday afternoons</label>
        </div>

        <div>
            <label class=text4>Yours Skills</label>
        </div>

        <div class="skill">
            <input type="checkbox" name="skill[]" value="thes best coder"> <label>thes best coder</label>
            <input type="checkbox" name="skill[]" value="good in art"> <label>good in art</label>
            <input type="checkbox" name="skill[]" value="a super star"><label>a super star</label>
            <input type="checkbox" name="skill[]" value="a crazy dancer"> <label>a crazy dancer</label>
            <input type="checkbox" name="skill[]" value="singer"> <label>singer</label>
            <input type="checkbox" name="skill[]" value="good in design"> <label>good in design</label>
            <input type="checkbox" name="skill[]" value="the besr eater"><label>the besr eater</label>
            <input type="checkbox" name="skill[]" value="good in speeches"> <label>good in speeches</label>
        </div>
        <button type="submit" name="sub" value="SUBMIT!">SUBMIT!</button>
    </form>
</body>

</html>