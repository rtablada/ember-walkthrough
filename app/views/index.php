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
            <h1>My Contacts</h1>
        </div>

        <div class="row" style="padding-bottom: 20px;">
            <div class="medium primary btn"><a href="create">Add Order</a></div>
        </div>

        <div class="row">
            <table>
                <thead>
                    <th>Date</th>
                    <th>Items</th>
                    <th>Amount</th>
                    <th>Remove</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Jan 01, 2013</td>
                        <td>3</td>
                        <td>$30</td>
                        <td>
                            <button class="destroy"><i class="icon-cancel"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>May 10, 2013</td>
                        <td>Donaghy</td>
                        <td>$50</td>
                        <td>
                            <button class="destroy"><i class="icon-cancel"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>June 20, 2013</td>
                        <td>1</td>
                        <td>$100</td>
                        <td>
                            <button class="destroy"><i class="icon-cancel"></i></button>
                        </td>
                    </tr>
                    <tr class="total">
                        <td></td>
                        <td></td>
                        <td style="font-weight:bold">$180</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <?= javascript_include_tag() ?>
</body>
</html>
