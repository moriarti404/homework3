<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Another brick in the wall</title>
</head>
<body>
    <div class="wrapper">
        <form action="count.php" method="post">
            <p>Will the brick pass through the hole?</p>

            <fieldset>
                <legend>Set brick size</legend>

                <label for="x-side">length(x)=</label>
                <input type="text" name="x-side" id="x-side" />

                <label for="y-side">width(y)=</label>
                <input type="text" name="y-side" id="y-side" />

                <label for="z-side">height(z)=</label>
                <input type="text" name="z-side" id="z-side" />
            </fieldset>

            <fieldset>
                <legend>Set size of the hole</legend>

                <label for="a-side">height(a)=</label>
                <input type="text" name="a-side" id="a-side" />

                <label for="b-side">width(b)=</label>
                <input type="text" name="b-side" id="b-side" />

                <input type="submit" value="Find out"/>
            </fieldset>
        </form>
    </div>
</body>
</html>