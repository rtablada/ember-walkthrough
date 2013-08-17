<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Contacts</title>
    <link rel="stylesheet" href="css/gumby.css">
</head>
<body>

    <div class="content">
        <div class="row">
            <h1>Contact Manager</h1>
        </div>
        <div class="row">
            <h2>New Contact</h2>
        </div>

        <div class="row">
            <form action="#">
                <div class="field">
                    <input type="date" class="text input" placeholder="Date">

                </div>
                <div class="field">
                    <input type="text" class="input numeric" placeholder="Items">
                </div>
                <div class="field">
                    <input type="text" class="input numeric" placeholder="Amount">
                </div>
            </form>
        </div>

        <div class="row" style="padding-bottom: 20px;">
            <div class="medium primary btn"><a href="#">Add Order</a></div>
            <div class="medium info btn"><a href="/">Cancel</a></div>
        </div>
    </div>

    <?= javascript_include_tag() ?>
</body>
</html>
